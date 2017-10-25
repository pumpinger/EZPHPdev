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

    public static $model;


    /**
     * @var \PDO
     */
    private $mDb;

    public $mController;


    public function __construct()
    {
        $this->mDb = new db(get_called_class());
    }

    //todo  记录所有sql
    
    /**
     * @return $this
     */
    public static function intance(){
        $class = get_called_class();

        if( self::$model[$class] ){
            return self::$model[$class];
        }
        self::$model[$class] = new $class;
        return self::$model[$class];
    }

    public function db()
    {
        return $this->mDb;
    }







    public function getAll(Array $field=array('*'))
    {
        $res=$this->db()->setField($field)->query();

        return $res;
    }


}