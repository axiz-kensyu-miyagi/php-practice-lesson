<form action="520_rep01_rep.php" method="POST">
<p>
    ワード：<input type="text" name="text1" size="10">
    <br>
    回数：<input type="text" name="text2" size="10">
    <br>
</p>
    <button type="submit" name="btn">送信</button>
</form>

<?php
    $text1 = $_POST["text1"]?? 0;
    $text2 = $_POST["text2"]?? 0;

    for($i = 0; $i < $text2; $i++){
        echo "text1";
    }
?>