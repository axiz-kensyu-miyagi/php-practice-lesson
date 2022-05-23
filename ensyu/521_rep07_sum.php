
<form action="521_rep07_sum.php" method="POST">
<p>
    ループ最大数：<input type="text" name="loop" size="10">
</p>
<p>
    合計最大：<input type="text" name="sum" size="10">
</p>
    <button type="submit" name="btn">計算</button>
</form>

<?php
    $maxLoop = $_POST["loop"]?? 0;  //$_GET:javaでいうgetAttributeと同じ
    $maxSum = $_POST["sum"]?? 0;

//    echo 'ループ回数：' ."$maxLoop" ."$maxSum";

    $loop = 1;     
    $sum = 0;

    while($loop <= $maxLoop){
        $sum = $sum + $loop;

        if($sum <= $maxSum){
            //echo "$sum";
            //echo '&nbsp';
            //echo "$loop";
            //echo '<br>';
        }else{
            echo 'ループ回数：' ."$loop";
            break;
        }
        $loop++;
    }

?>
