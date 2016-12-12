<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 28.11.16
 * Time: 15:17
 */

session_start();

var_dump(session_name());

var_dump(session_id());

var_dump(session_save_path());

$sName = session_name();

$sId = session_id();
