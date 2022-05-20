<form action="520_form02_choice.php" method="POST">
    <input type="radio" name="radio" value="red">赤
    <input type="radio" name="radio" value="yellow">黄
    <input type="radio" name="radio" value="bule">青
    <br>
    <button type="submit" name="btn">チェック</button>
</form>

<?php
    $choice = $_POST["radio"];  //$_GET:javaでいうgetAttributeと同じ

    echo "$choice";

