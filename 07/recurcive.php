<?php
function factorial($n){
    echo $n, "<br>";
    if($n == 1){
        return $n;
    }

    return $n * factorial($n -1);
}
echo factorial(5);
/*
 * 5
 * 4
 * 3
 * 2
 * 1
 *
 */

function fibonacci($n){

    if($n === 1 || $n ===2){
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

//1, 1, 2, 3, 5, 8, 13, 21 ....
echo "<br>";
fibonacci(4);
/*for($i = 1; $i <= 10; $i++){
    echo fibonacci($i), "<br>";
}*/
