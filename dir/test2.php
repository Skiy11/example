<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 28.11.16
 * Time: 15:17
 */

session_start();

if (!isset($_SESSION['time'])) {
    $_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['time'] = date("H:i:s");
}

if ($_SESSION['ua'] != $_SERVER['HTTP_USER_AGENT']) {
    die("Wrong browser!");
}

echo $_SESSION['time'];