<?php   #522_array01_sumave.php
    // 配列の定義
    $nums = [4, 7, 3, 5, 9, 1, 2, 8, 6];

    $sum = 0;

/*通常のfor文使用

   for($i = 0; $i < count($nums); $i++){
       $sum += $nums[$i]; 
    //   echo $sum, '<br>';
    }
    echo "合計：" .$sum, '<br>';

    $ave = $sum / count($nums);

    echo "平均：" .$ave;
*/

//foreach文の使用
    foreach($nums as $value){
        $sum += $value;
    }
    
    echo "合計：" .$sum, '<br>';

    $ave = $sum / count($nums);

    echo "平均：" .$ave;
   
?>


    
