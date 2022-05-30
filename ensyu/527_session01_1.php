<?php   #527_session01_1.php

    $btn = $_POST["btn"];
    session_start();
    if($btn == 1){
        if(!isset($_SESSION['num'])) {
            $_SESSION['num'] = 1;
        } else {
            $_SESSION['num'] += 1;
        }
    }else if($btn == 2){
        unset($_SESSION['num']);
        $_SESSION['num'] = 1;
    }

?>

<p><?= $_SESSION['num'] ?></p>

<form action="527_session01_1.php" method=POST>
    <button type="submit" name="btn" value="1">カウントアップ</button>    
    <button type="submit" name="btn" value="2">クリア</button>
</form>
