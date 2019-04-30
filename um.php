<?php 

function multiplos()
{
    for ($i = 1; $i <= 100; $i++){
        if (!($i % 3) && !($i % 5)) {
            echo("FizzBuzz\n");
            continue;
        } else if (!($i % 3)) {
            echo("Fizz\n");
        } else if (!($i % 5)) {
            echo("Buzz\n");
        } else {
            echo($i."\n");
        }
    }
}
multiplos();

?>