<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/17
 * Time: 18:28
 */



$str = 'http://test.com/testdir/index.php?param1=10&param2=20&param3=30&param4=40&param5=50&param6=60';
$arr = parse_url($str);var_dump($arr);

$arr_query = convertUrlQuery($arr['query']);
var_dump($arr_query);
var_dump(getUrlQuery($arr_query));

function convertUrlQuery($query)
{


    $queryParts = explode('&', $query);


    $params = array();

    foreach ($queryParts as $param) {

        $item = explode('=', $param);

        $params[$item[0]] = $item[1];

    }


    return $params;

}



function getUrlQuery($array_query){


  $tmp = array();

  foreach($array_query as $k=>$param)
  {
      $tmp[] = $k.'='.$param;

  }

  $params = implode('&',$tmp);

  return $params;

}