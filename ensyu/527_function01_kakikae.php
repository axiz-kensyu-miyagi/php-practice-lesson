<form action="527_function01_kakikae.php" method="POST">
<p>
    ワード：<input type="text" name="text1" size="10">
    <br>
    回数：<input type="text" name="text2" size="10">
    <br>
</p>
    <button type="submit" name="btn">送信</button>
</form>

<?php   #527_function01_kakikae.php
    $text1 = $_POST["text1"]?? 0;
    $text2 = $_POST["text2"]?? 0;

  /*
    for($i = 0; $i < $text2; $i++){
        echo "text1";
    }
  */  

    function greet($text1, $text2) 
    {
//        for($i = 0; $i < $text2; $i++)
            echo "ワードは ".$text1 .' ';
            echo "回数は ".$text2 .'<br>';
            echo "と入力されました";
    }
    greet($text1, $text2); // 関数呼び出し


?>