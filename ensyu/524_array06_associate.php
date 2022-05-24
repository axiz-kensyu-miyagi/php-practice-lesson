<?php   #524_array06_associate.php

    $score = [
        "english" => ["satou" => 70, "suzuki" => 75, "takahashi" => 65], 
        "math" => ["satou" => 80, "suzuki" => 85, "takahashi" => 79], 
        "japanese" => ["satou" => 74, "suzuki" => 78, "takahashi" => 80] 
            ];

    foreach($score as $key => $value){
        echo $key;  //english,math, japaneseが出力
        print_r($value);  //english,math, japanese以外のデータが出力
        echo '<br>';    

    }
?>

