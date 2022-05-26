<form action="526_DB.php" method=GET>
    <p>商品名を入力してください<br>
    <input type="text" name="text" size="20">
    </p>
    <button type="submit" name="btn">検索</button>
</form>

<?php   #526_DB.php
    $pdo = new PDO(
    // DSN
    'mysql:dbname=axizdb;host=127.0.0.1', 
    // UserName
    'axizuser',
    // PASS
    'axiz'
    ,[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC  //連想配列の添え字出力されなくなる←オプションの一つ
    ]
    );

    $stmt = $pdo->query("select * from products WHERE product_name LIKE '%" . $_GET["text"] . "%'");  //query関数
    $result = $stmt->fetchAll();  //fetch関数を利用することで連想配列で受け取れる

    echo "<table border=1>";
    echo "<th>id</th><th>商品名</th><th>値段</th><th>カテゴリ</th>";
    
    foreach($result as $key=>$value)
    {
        echo "<tr>";
        foreach($value as $val)
        {
            echo "<td>" .$val ."</td>";  //配列の中の単一データを示す
        }
        echo '</tr>'; 
    }
    echo '</table>';

?>