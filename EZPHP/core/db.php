<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 15:29
 */

namespace EZPHP\core;


use Exception;
use EZPHP\base;
use PDOException;

class db extends base
{
    private static $record = array();

    private $sql = array();
    private $model;
    private $pdo;


    public function __construct($model)
    {

        $this->model=$model;

        $db=C('db');
        $pdo = new \PDO('mysql:host='.$db['host'].';dbname='.$db['name'], $db['username'], $db['password']);

//        $key = $db['host'].'_'.$db['name'].'_'.$db['username'].'_'.$db['password'];


        //todo  判断是否已经有了

        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);//错误报告
        $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false); //启用或禁用预处理语句的模拟。
        $pdo->setAttribute(\PDO::ATTR_STRINGIFY_FETCHES, true);  //提取的时候将数值转换为字符串
        //                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        $pdo->exec('set names utf8mb4');
        $this->pdo=$pdo;
        return $pdo;
    }

    private function getTableName(){
        $class= $this->model;

        $class=substr($class,0,-5);

        return 't_'.$class;
    }

    public function getLastSql()
    {
        return self::$record[count(self::$record)-1];

    }
    public function getSql()
    {
        return self::$record;
    }


    private function getPs($op='query'){


        $table= $this->sql['table'] ?:$this->getTableName();
        $field= $this->sql['field'] ?:'*';



        $sql='SELECT '.$field.' FROM '.$table;

//
//        if($op  ==  'query'){
//        }elseif($op  ==  'instert'){
//            $sql='INSTERT INTO '.$table;
//
//        }elseif($op == 'delete'){
//
//        }elseif($op == 'update'){
//
//        }



        if($this->sql['where']){
            $sql.=' WHERE '.$this->sql['where'];
        }

        if($this->sql['order']){
            $sql.=' ORDER BY '.$this->sql['order'];
        }

        if($this->sql['limit']){
            $sql.=' LIMIT '.$this->sql['limit'];
        }



        $PS =$this->pdo->prepare($sql);


        for ($i = 0; $i < count($this->sql['param']); $i++) {
            $PS->bindParam($i+1,$this->sql['param'][$i]);
        }
        $PS->execute();


        self::$record[]=$sql;



        return $PS;
    }


    //todo  也可以 直接给一个 条件构造器
    public function query($only_one=false)
    {
        //$where=array(),$param=array(),$size = 1,$field = array('*'),$order =array(),$offset= 0,$compare = '', $idkey = 't.id'
        //$dbp=$this->db->beginTransaction();


//        $limit="";
//        if($offset !== 0){
//            if($compare  &&  $idkey){
//                //值分页
//                $whereStr.=' '.$idkey.' '.$compare.' '.$offset;
//
//                if($size){
//                    $limit='0,'.$size;
//                }
//            }else{
//                //page分页
//                $limit=$offset.','.$size;
//
//            }
//        }elseif($size){
//            $limit='0,'.$size;
//        }



        $PS = $this->getPs();


        if($only_one){
            $res = $PS->fetch(\PDO::FETCH_ASSOC);

        }else{
            $res = $PS->fetchAll(\PDO::FETCH_ASSOC);

        }


        //todo  还是说 再 instance 的时候就 初始化一下?
        $this->init();
        return $res;
    }


    public function querySql(){

    }







    public function setJoin($value)
    {
        $this->sql['join']=$value;
        return $this;
    }

    public function setGroup($value)
    {
        $this->sql['group']=$value;
        return $this;
    }

    public function setTable($table)
    {
        $this->sql['table']=$table;
        return $this;
    }


    /**
     * @param array $where
     * @return db
     */
    public function setEqual(Array $where=array())
    {
        $this->_setCondtion('=',$where);
        return $this;
    }

    public function _setCondtion($op,$where)
    {
        $whereStr='';
        foreach ($where as $k=>$v) {
            $whereStr.=' '.$k.' '.$op.' ? ';
            $this->sql['param'][]=$v;
        }

        $this->sql['where']=$whereStr.$this->sql['where'];
        return $this;
    }


    public function setGreater(Array $where=array())
    {
        $this->_setCondtion('>',$where);
        return $this;
    }

    public function setGreaterEqual(Array $where=array())
    {
        $this->_setCondtion('>=',$where);
        return $this;
    }

    public function setLess(Array $where=array())
    {
        $this->_setCondtion('<',$where);
        return $this;
    }

    public function setUnequal(Array $where=array())
    {
        $this->_setCondtion('<>',$where);
        return $this;
    }

    public function setLessEqual(Array $where=array())
    {
        $this->_setCondtion('<=',$where);
        return $this;
    }

    public function setLike(Array $where=array())
    {
        $this->_setCondtion('like',$where);
        return $this;
    }


    public function setField(Array $field=array('*'))
    {

        $this->sql['field']=implode(',',$field);
        return $this;

    }


    /**
     * @param array $order
     * @return db
     */
    public function setOrder(Array $order=array())
    {
        $orderStr='';
        foreach ($order as $k=>$v) {
            $orderStr.=' `'.$k.'` '.$v;
        }
        $this->sql['order']=$orderStr;

        return $this;

    }
    public function setLimit($offset,$size)
    {
        $this->sql['limit']=$offset.','.$size;
        return $this;

    }


    public function add($data)
    {
        $table= $this->sql['table'] ?:$this->getTableName();

        $sql='INSERT INTO '.$table;


        $sql.='(`'.implode('`,`',array_keys($data)).'`) VALUES ';


        $sql.='(';
        foreach ($data as $v) {
            $sql.='?,';
            $this->sql['param'][]=$v;
        }
        $sql=rtrim($sql,',');
        $sql.=')';




        if($this->sql['where']){
            $sql.=' WHERE '.$this->sql['where'];
        }



        $PS =$this->pdo->prepare($sql);


        for ($i = 0; $i < count($this->sql['param']); $i++) {
            $PS->bindParam($i+1,$this->sql['param'][$i]);
        }

        $PS->execute();


        return $this->pdo->lastInsertId();


    }


    private function init(){
        $this->sql=array();
    }


}