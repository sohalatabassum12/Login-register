<?php
session_start();

$_SESSION['login'] = false;

session_unset();

var_dump($_SESSION);
echo "you are logged out";