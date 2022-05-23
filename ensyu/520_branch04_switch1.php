<form action="520_branch04_switch1.php" method="POST">
    <input type="radio" name="radio" value="red">赤
    <input type="radio" name="radio" value="yellow">黄
    <input type="radio" name="radio" value="bule">青
    <br>
    <button type="submit" name="btn">チェック</button>
</form>

<?php
    $choice = $_POST["radio"];  //$_GET:javaでいうgetAttributeと同じ

    if( $choice == "red" ){
        echo "赤ですね。進んではいけません。";
    }else if( $choice == "yellow" ){
        echo "黄ですね。止まってください。";
    }else if( $choice == "bule" ){
        echo "青ですね。進んでください。";
    }else{
        echo "赤、青、黄のいずれかを選択してください。";
    }

?>
