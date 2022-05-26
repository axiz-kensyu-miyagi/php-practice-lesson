<?php   #524_array06_associate.php

    $score = [
        "english" => ["satou" => 70, "suzuki" => 75, "takahashi" => 65], 
        "math" => ["satou" => 80, "suzuki" => 85, "takahashi" => 79], 
        "japanese" => ["satou" => 74, "suzuki" => 78, "takahashi" => 80] 
            ];


    echo "<table border=1>";
    echo "<th>科目</th><th>さとう</th><th>すずき</th><th>たかはし</th>";

    foreach($score as $key=>$value)
    {
        //echo "<tr>".$key."</tr>";
        echo "<tr>";
        echo "<td>".$key."</td>";
        foreach($value as $val)
        {

            echo "<td>" .$val ."</td>";  //配列の中の単一データを示す
        }
        echo '</tr>'; 
    }
    echo '</table>';

?>

