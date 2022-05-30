<?php   #530_function05_mumei/php

    $nums = [10, 45, 22, 77, 34, 21, 200, 186, 22, 5];

    //コールバック関数
    $res = array_filter($nums, function($val) {
        if($val%2 == 0){
        return $val;
        }
    });

    print_r($res);

    /*  //クロージャ
    $func = function($val) {
        if($val%2 == 0){     
        return $val ;
        }
    };
    
    $es = array_filter($nums, $func);
    
    print_r($es);
    */
?>