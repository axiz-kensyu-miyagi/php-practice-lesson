<form action="524_array05_checkbox.php" method="GET">
    <input type="checkbox" name="ninjin" value="120">ニンジン（120円）
    <br>
    <input type="checkbox" name="tamanegi" value="198">玉ねぎ（198円）
    <br>
    <input type="checkbox" name="jagaimo" value="198">じゃがいも（198円）
    <br>
    <input type="checkbox" name="buta" value="266">豚肉（266円）
    <br>
    <input type="checkbox" name="tori" value="189">鶏肉（189円）
    <br>
    <input type="checkbox" name="usi" value="398">牛肉（398円）
    <br>
    <input type="checkbox" name="curry" value="158">カレールー（158円）
    <br>   
    <button type="submit" name="btn">決定</button>
</form>

<?php   #524_array05_checkbox.php
    $foods = $_GET["btn"]?? 0;

    if(($foods != null) && ($foods != " ")){
        echo '選択してください';
    }else{
        echo $foods;
    }
?>