<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP\core;


use EZPHP\base;

class model extends base{

    public static $_modelA;


    public $class;



    /**
     * @var \PDO
     */
    public $db;


    public function __construct()
    {

        $db=C('db');

        $pdo = new \PDO('mysql:host='.$db['host'].';dbname='.$db['name'], $db['username'], $db['password']);

//        $key = $db['host'].'_'.$db['name'].'_'.$db['username'].'_'.$db['password'];


        //todo  判断是否已经有了

        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);//错误报告
        $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false); //启用或禁用预处理语句的模拟。
        $pdo->setAttribute(\PDO::ATTR_STRINGIFY_FETCHES, true);  //提取的时候将数值转换为字符串
        //                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        $pdo->exec('set names utf8mb4');
        $this->db = $pdo;



//        try {
//            
//
//        }
//        catch (PDOException $e) {
//            echo $this->ExceptionLog($e->getMessage());
//            die();
//        }
        
        
        //$dbh = null;
    }

    //todo  记录所有sql
    
    /**
     * @return $this
     */
    public static function intance(){
        $class = get_called_class();
        self::$_modelA[$class] = new $class;
        return self::$_modelA[$class];
    }


    protected function getTableName(){
        $class=get_called_class();

        $class=substr($class,0,-5);

        return 't_'.$class;
    }

    protected function getPs($where,$param){

        $table=$this->getTableName();

        $sql='SELECT * from '.$table.' WHERE '.$where;

        $PS =$this->db->prepare($sql);


        for ($i = 0; $i < count($param); $i++) {
            $PS->bindParam($i+1,$param[$i]);
        }
        $PS->execute();

        return $PS;
    }

    
    public function query($where,$param)
    {
        //$dbp=$this->db->beginTransaction();



        $PS = $this->getPs($where,$param);


        $res = $PS->fetch(\PDO::FETCH_ASSOC);
        return $res;
    }

    public function queryAll($where,$param)
    {
        //$dbp=$this->db->beginTransaction();

        $PS = $this->getPs($where,$param);


        $res = $PS->fetchAll(\PDO::FETCH_ASSOC);
        return $res;
    }

}