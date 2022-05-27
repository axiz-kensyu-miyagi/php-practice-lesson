<form action="527_model.php" method="GET">
    <p>
    <input type="text" name="text" size=20>
    <br>
    <button type="submit" name="btn">検索</button>
    <br>
</p>

<p> id：　　　　<input type="text" name="text" size=20>
    <br>
    商品名：　　<input type="text" name="text" size=20>
    <br>
    値段：　　　<input type="text" name="text" size=20>
    <br>
    カテゴリー：<input type="text" name="text" size=20>
    <br>
    <button type="submit" name="insert">登録</button>
    <button type="submit" name="updata">更新</button>
    <button type="submit" name="delete">削除</button>
</p>
    
<?php   #527_model.php 
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