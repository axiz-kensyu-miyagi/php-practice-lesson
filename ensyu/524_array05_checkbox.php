<form action="524_array05_checkbox.php" method="GET">
    <input type="checkbox" name="food[]" value="120">ニンジン（120円）
    <br>
    <input type="checkbox" name="food[]" value="198">玉ねぎ（198円）
    <br>
    <input type="checkbox" name="food[]" value="198">じゃがいも（198円）
    <br>
    <input type="checkbox" name="food[]" value="266">豚肉（266円）
    <br>
    <input type="checkbox" name="food[]" value="189">鶏肉（189円）
    <br>
    <input type="checkbox" name="food[]" value="398">牛肉（398円）
    <br>
    <input type="checkbox" name="food[]" value="158">カレールー（158円）
    <br>   
    <button type="submit" name="btn">決定</button>
</form>

<?php   #524_array05_checkbox.php

    if(!isset($_GET['food'])){ 
      echo 'データが選択されていません。選択してください。';
    }else {
        $sum = 0;
        $max = count($_GET['food']); 
        for($i=0; $i<$max; $i++){ 
            $sum += $_GET['food'][$i];
            //echo "{$_GET['food'][$i]}<br/>\n";
        }
        echo '合計：' .$sum .'円';
    }

?>