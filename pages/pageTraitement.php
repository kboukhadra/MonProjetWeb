<?php
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 13/03/2015
 * Time: 18:58
 */
$post = (isset($_POST)) ? $_POST : "";

echo '<pre>';
print_r($post);
echo '</pre>';


echo$post['profil'] ;