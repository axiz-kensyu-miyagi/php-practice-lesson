<?php   #値の入れ替え

    $x = 11;    //変数xに11を代入
    $y = 22;    //変数yに22を代入
    $z = 0;    //変数zに0を代入 予備の箱を用意
    
    $z = $y;    //zにyの中身を代入
    $y = $x;    //yにxの中身を代入
    $x = $z;    //xにzの中身を代入

    echo "$x<br>";  //xの中身を出力して、<br>で改行
    echo $y;        //yの中身を出力