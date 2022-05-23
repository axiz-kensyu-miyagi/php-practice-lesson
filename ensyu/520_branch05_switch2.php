<form action="520_branch05_switch2.php" method="POST">
<p>
    <select name="tokyo">
        <option value="1">新橋</option>
        <option value="2">浜松町</option>
        <option value="3">田町</option>
        <option value="4">品川</option>
    </select>
    <br>
</p>
    <button type="submit" name="button">送信</button>
</form>

<?php
    $select = $_POST["tokyo"];

    if($select == "1"){
        echo "東京まで 有楽町 を通過します。";
    }else if($select == "2"){
        echo "東京まで 新橋 有楽町 を通過します。";
    }else if($select == "3"){
        echo "東京まで 浜松町 新橋 有楽町 を通過します。";
    }else if($select == "4"){
        echo "東京まで 田町 浜松町 新橋 有楽町 を通過します。";
    }
?>