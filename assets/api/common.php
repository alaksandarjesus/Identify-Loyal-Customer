<?php

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


require('database.classes.php');
$db = new Database;
$output = false;
$date = date("Y-m-d H:i:s");
$seed=md5(date("Y-m-d H:i:s"));