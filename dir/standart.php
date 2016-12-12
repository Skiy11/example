<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 28.11.16
 * Time: 15:17
 */

class MyClass
{
    const FIRST_NUMBER = 45;
    const SECOND_NUMBER = 89;

    public function simpleMethod ()
    {
        if (self::FIRST_NUMBER < self::SECOND_NUMBER) {
            echo self::SECOND_NUMBER;
        } elseif (self::FIRST_NUMBER > self::SECOND_NUMBER) {
            echo self::FIRST_NUMBER;
        } else {
            echo "Constants equal";
        }
    }
}
