<?php
session_start();
/*                      all.php
 *require('includes/connection.php');
include("includes/blocs/menu.php");
include('includes/function.php') ;
require('Vue/View.php') ;
include('includes/blocs/header.php');
require ('app/Application.php');
include('includes/blocs/header.php');
 */

require('includes/all.php');
// on instancie la classe Application
$app = new Application($db);
// on appelle ces 2 méthodes
$app->handleRequest();
$app->showReponse();

