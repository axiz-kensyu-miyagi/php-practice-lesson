
<?php   #527_session01_1.php
    session_start();
    if(!isset($_SESSION['num'])) {
        $_SESSION['num'] = 1;
    } else {
        $_SESSION['num'] += 1;
    }
?>

<p><?= $_SESSION['num'] ?></p>

<? unset($_SESSION['num']); ?>

<form action="527_session01_1.php">
    <button type="submit" name="btn1">カウントアップ</button>
    <button type="submit" name="btn2">クリア</button>
</form>



