<?php
/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2015/7/3
 * Time: 17:52
 */


class e extends Exception{
    public function __construct($code = 0) {
                $msg = 'the template file is not exists';
        parent::__construct($msg,$code);
    }

}