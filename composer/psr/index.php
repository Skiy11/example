<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 30.11.16
 * Time: 16:06
 */
use App\History;
use App\Hosts\Host;
use App\Hosts\Test\Test;


$app = new App\Generator();
$app->test();

$history = new History();
$history->test();

$host = new Host();
$host->test();

$test = new Test();
$test->test();
