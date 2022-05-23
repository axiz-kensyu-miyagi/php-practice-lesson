<form action="520_branch01_suti.php" method="POST">
    num1:<input type="text" name="text1" size="10">
    <br>
    num2:<input type="text" name="text2" size="10">
    <br>
    <button type="submit" name="button">比較</button>
</form>

<?php   #520_branch01_suti.php
    $num1 = $_POST["text1"]?? 0;  //$_GET:javaでいうgetAttributeと同じ
    $num2 = $_POST["text2"]?? 0;

    if( $num1 == $num2 ){
        echo "比較結果：" .$num1 ."と" .$num2 ."同じ";
    }else if( $num1 > $num2 ){
        echo "比較結果：" .$num1 ."は" .$num2 ."より大きい";
    }else{
        echo "比較結果：" .$num2 ."は" .$num1 ."より小さい";
    }
?>