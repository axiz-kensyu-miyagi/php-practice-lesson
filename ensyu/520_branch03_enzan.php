<form action="520_branch03_enzan.php" method="POST">
<p>
    <input type="text" name="text1" size="10">
    <select name="enzan">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
    </select>
    <input type="text" name="text2" size="10">
    <br>
</p>
    <button type="submit" name="button">計算</button>
</form>

<?php
    $num1 = $_POST["text1"]?? 0;  //$_GET:javaでいうgetAttributeと同じ
    $num2 = $_POST["text2"]?? 0;
    $select = $_POST["enzan"];

    if($select == "1"){
        echo "計算結果：" .$num1 + $num2;
    }else if($select == "2"){
        echo "計算結果：" .$num1 - $num2;
    }else if($select == "3"){
        echo "計算結果：" .$num1 * $num2;
    }else if($select == "4"){
        echo "計算結果：" .$num1 / $num2;
    }
?>