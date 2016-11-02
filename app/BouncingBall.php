<?php

namespace App;


class BouncingBall{

    /**
     * https://www.codewars.com/kata/bouncing-balls/php
     */
    public static function bouncingBall($h, $bounce, $window){
        $result = -1;
        while($h > 0 && $bounce > 0 && $bounce < 1 && $h > $window){
            if(((++$result ?? 1) % 2) != 0){
                $h *= $bounce;
            }
        }

        return $result;
    }

}