
<form action="523_array03_search.php" method="GET">
<p>
    検索値：<input type="text" name="num" size="10">
</p>
    <button type="submit" name="btn">検索</button>
</form>

<?php   #523_array03_search.php
    $num = $_GET["num"]?? 0;

    // 配列の定義
    $nums = [4, 7, 3, 5, 9, 1, 2, 8, 6];

    $keys = array_keys($nums, "$num");
    print_r($keys);

    echo "番目の要素です。";
    echo "※0から開始";

?>