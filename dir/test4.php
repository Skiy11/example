<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 28.11.16
 * Time: 15:17
 */

var_dump(session_save_path());

session_save_path('/home/phpstudent/sites/session_store');
session_start();

var_dump(session_save_path());