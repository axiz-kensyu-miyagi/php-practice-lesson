<form action="520_form01_form.php" method="POST">
    <input type="text" name="text1" size="10">
    +
    <input type="text" name="text2" size="10">
    <br>
    <button type="submit" name="button">送信</button>
</form>

<?php
    $text1 = $_POST["text1"];  //$_GET:javaでいうgetAttributeと同じ
    $text2 = $_POST["text2"];

    echo "$text1" ."$text2";

