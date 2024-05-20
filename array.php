<?php

session_start();
$test = [];


$test['one'] = 1;
$test['two'] = 2;
// $_SESSION['login'] = true;

$emai = "t@gmail.com";
$pass = 123;

// if ($emai = 't@gmail.com' && $pass = 123) {
//     $_SESSION['login'] = true;
// }

var_dump($test);