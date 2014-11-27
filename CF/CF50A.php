<?php
while (fscanf(STDIN, "%d%d", $m, $n)){
    if ($m % 2 == 0 || $n % 2 == 0){
        $pieces = ($m * $n) / 2;
    }
    if ($m % 2 != 0 && $n % 2 != 0){
        $pieces = ($m * $n - 1) / 2;
    }
    echo $pieces . "\n";
}