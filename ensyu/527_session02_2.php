<?php   #527_session02_2.php

    session_start();

    $data = $_GET['text']?? 0;
    //echo $data;

    $btn = $_GET['btn']?? 0;
    //echo $btn .'<br>';

    if($btn == 'add')       #追加ボタンが押されたとき
    {   #セッションに値があるまたは配列のとき
        if(!isset($_SESSION['array']) || !is_array($_SESSION['array']))
         {
            $_SESSION['array'] = array($data);
        }else       #セッションが配列でないとき
        {
            $_SESSION['array'][] = $data;
        }
    }else if($btn == 'no')  #取り出しボタンが押されたとき
    {   #セッションに値があるまたは配列のとき  
        if(!isset($_SESSION['array']) || is_array($_SESSION['array']))
        {
            foreach($_SESSION['array'] as $key => $value)
            {
                if($value == $data)
                {
                    unset($_SESSION['array'][$key]);     //該当するキーを削除
                }
            }
        }
    }
    
    #画面出力コード
    echo '[';
    foreach($_SESSION['array'] as $key => $value)
    {
        echo $value.', ';
    }
    echo ']';    
?>

<form action="527_session02_2.php" method="GET">
    <p>
    <input type="text" name="text" size=20> 
    </p>
    <button type="submit" name="btn" value="add">追加</button>
    <button type="submit" name="btn" value="no">取り出し</button>
</form>
