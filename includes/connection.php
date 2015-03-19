<?php
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 16/03/2015
 * Time: 09:30
 */
// vavriable de base
$server ='localhost';
$dbname = 'blogv1' ;
$user ='blogv1' ;
$pwd ='0408' ;

$dsn = 'mysql:dbname='.$dbname.';host='.$server.'; charset=utf8';

$db = new PDO($dsn ,$user , $pwd) ;
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC) ;

// détruire les autres variables
unset($server,$dbname,$user,$pwd) ;
