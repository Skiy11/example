<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 28.11.16
 * Time: 15:17
 */

session_start();

if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = date("H:i:s");
}

echo $_SESSION['time'];