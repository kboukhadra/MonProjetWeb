<?php
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 11/03/2015
 * Time: 08:58
 */


header("Content-Type:text/html;charset=UTF-8");
function surfaceCercle($rayon){
    $surface = pi()*$rayon*$rayon;
    $surface = round($surface,2);
    return $surface ;

}
$rayon =10 ;
echo 'la surface est  '.surfaceCercle($rayon).' cm<sup>2</sup> pour un rayon de '.$rayon.' cm';