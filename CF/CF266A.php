<?php

while (fscanf(STDIN, "%d", $n)){
    $re = 0;
    fscanf(STDIN, "%s", $string);
    for ($i = 0; $i < $n;){
        $temp = $string[$i];
        if ($i < $n - 1 && $temp == $string[$i + 1]){
            for (++$i; $i < $n; ++$i){
                if ($temp == $string[$i]){
                    ++$re;
                } else {
                    break;
                }
            }
        } else {
            ++$i;
        }
    }
    echo $re . "\n";
}