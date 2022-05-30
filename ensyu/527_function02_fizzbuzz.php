<?php   #527_function02_fizzbuzz.php

function fizzbuzz($num) {

    if ($num % 15 == 0)
     {
       print "FizzBuzz" ;
     }elseif ($num % 5 == 0)
     {
       print "Buzz" ;
     }elseif ($num % 3 == 0)
      {
       print "Fizz" ;
    }else
     {
       print $num ;
    }
}

echo fizzbuzz(24);

?>
