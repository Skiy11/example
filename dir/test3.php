<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 28.11.16
 * Time: 15:17
 */

session_start();

    $_SESSION['test'] = 'car';
    $_SESSION['foo'] = 'bmw';

    $_SESSION[] = array();
    session_destroy();

