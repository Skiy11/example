<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 30.11.16
 * Time: 16:06
 */

class MyTestClass
{
    const RANDOM_ARRAY = array(11, 3, 5, 7, 9, 15, 21, 33, 1, 14);

    public function findMaxMin()
    {
        for ($i = 0; $i < count(self::RANDOM_ARRAY); $i++) {
            $first = self::RANDOM_ARRAY[$i];
            $second = self::RANDOM_ARRAY[$i+1];

            if ($first < $second) {
                $min = $first;
            } elseif ($first > $second) {
                $max = $first;
            }
        }
    }
}
