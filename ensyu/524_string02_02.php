<form action="524_string02_02.php" method="GET">
    <p>例：○○って△回言って  <br>
    <input type="text" name="text" size=20>
    </p>
    <button type="submit" name="btn">送信</button>
</form>

<?php   #524_string02_02.php
    $str = $_GET["text"]?? 0;
    echo '結果：' .$str .'<br>';
?>