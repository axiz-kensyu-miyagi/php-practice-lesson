<?php   #524_array04_sort.php
    // 配列の定義
    $array = [4, 7, 3, 5, 9, 1, 2, 8, 6];

    $count = count($array);

    for($i = 0; $i < $count; $i++){
        for($n = 1; $n < $count; $n++){
            if($array[$n-1] > $array[$n]){
                $temp = $array[$n];         //右隣の方が大きかったらその右の数字を$tempに代入
                $array[$n] =$array[$n-1];   //左側を右側に代入
                $array[$n-1] =$temp;        //$tempに代入していた値を$array[$n-1]へ代入
            }
        }
    }
    print_r($array); 
?>
