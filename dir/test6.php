<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 28.11.16
 * Time: 15:17
 */

//$lifeTime = 0;

//session_set_cookie_params($lifeTime, null, null, true);
//session_start();

$lifeTime = 720;
setcookie(session_name(), session_id(), time() + $lifeTime, null, null, true, true);
session_start();

