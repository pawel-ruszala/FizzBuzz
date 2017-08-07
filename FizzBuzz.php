<?php
function simpleFizzBuzz($number = 100)
{
    for ($i = 1; $i <= $number; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br />";
        } else if ($i % 3 == 0) {
            echo "Fizz<br />";
        } else if ($i % 5 == 0) {
            echo "Buzz<br />";
        } else {
            echo $i . "<br />";
        }
    }
}

function secondFizzBuzz(){
    for ($i = 1; $i <= 100; $i++) {
        $mod3 = $i % 3;
        $mod5 = $i % 5;
        echo (!$mod3 && !$mod5 ? "FizzBuzz" : (!$mod3 ? "Fizz" : (!$mod5 ? "Buzz" : $i))) ."<br>";
    }
}

//simpleFizzBuzz(30);
//secondFizzBuzz();