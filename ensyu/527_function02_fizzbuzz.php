<?php   #527_function02_fizzbuzz.php

    function fizzbuzz($num):string
    {
        if($num/3 === 0){
            return 'Fizz';
        }else if($num/5 === 0)
        {
            return 'BUZZ';
        }else{
            return $num;
        }
    }

//    $num = 5;
    echo fizzbuzz('63');


    //関数の定義
    function foo($val){
    echo $val + 100;
    }
 
    $num = 100;
 
    //関数の呼出し
    foo($num);

    ?>
