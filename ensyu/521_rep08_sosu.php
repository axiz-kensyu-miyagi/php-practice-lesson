
<form action="521_rep08_sosu.php" method="POST">
<p>
    num：<input type="text" name="num" size="10">
</p>
    <button type="submit" name="btn">素数判定</button>
</form>

<?php
    $num = $_POST["num"]?? 0;  //$_GET:javaでいうgetAttributeと同じ

    $flag = 0;

    if($num>1){

    for($i = 2; $i < $num; $i++){
        if($num % $i == 0){
            $flag = 1;
        }
    }
    if($flag == 1){
        echo "素数ではありません。";
    }
    if($flag == 0){
        echo "素数です。";
    }
}        
?>
