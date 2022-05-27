<form action="527_string03_regular.php" method="GET">
    <p>郵便番号：
    <input type="text" name="text" size=20>
    </p>
    <button type="submit" name="btn">チェック</button>
</form>


<?php
    $num = $_GET['text'];
    if(preg_match('/^([0-9]{3})(-[0-9]{4})/', $num)) {
        echo "正しい郵便番号です";
    }else{
        echo "郵便番号ではありません";
    }

?>
