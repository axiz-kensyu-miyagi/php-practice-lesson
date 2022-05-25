<form action="524_string01_01.php" method="GET">
    <p>
    <input type="text" name="text" size=10>
    </p>
    <button type="submit" name="btn">送信</button>
</form>

<?php   #524_string01_01.php
    $str = $_GET["text"]?? 0;
    echo '長さ：' .strlen($str) .'<br>';
    echo '大文字変換：' .strtoupper($str) .'<br>';
    echo '小文字変換：' .strtolower($str) .'<br>';
?>