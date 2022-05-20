<?php
$num1 = $_POST["num1"]?? 0;  //$_GET:javaでいうgetAttributeと同じ
$num2 = $_POST["num2"]?? 0;
echo $num1 + $num2;
