<?php
session_start();
require('includes/all.php');
$app = new Application($db);
$app->handleRequest();
$app->showReponse();

