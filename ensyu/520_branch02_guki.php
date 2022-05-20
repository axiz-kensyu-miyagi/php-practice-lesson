<form action="520_branch02_guki.php" method="POST">
    <input type="text" name="text" size="10">
    <br>
    <button type="submit" name="button">数値判定</button>
</form>

<?php
    $num = $_POST["text"]?? 0;  //$_GET:javaでいうgetAttributeと同じ

    if( $num % 2 == 1 ){
        echo "判定結果：" .$num ."は奇数です。";
    }else {
        echo "判定結果：" .$num ."は偶数です。";
    }