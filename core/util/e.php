<?php
use EZPHP\util\EZException;

/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2015/7/3
 * Time: 17:52
 */

class e extends EZException{
    public function __construct($msg,$code = 0) {
        parent::__construct($msg,$code);
    }

}