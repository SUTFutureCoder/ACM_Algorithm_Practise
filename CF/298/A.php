<?php
while (fscanf(STDIN, "%d", $n)){
    $b = array();
    for ($i = 0; $i < $n; ++$i){
        fscanf(STDIN, "%d", $b[$i]);
    }
    
    $a = array();
    $temp = array();
    $a[0] = $b[0];
    $max = $a[0];
    echo $a[0] . "\n";
    for ($i = 1; $i < $n; ++$i){
        //位
        for ($digit = $max; ;$digit++){
            $temp_array = str_split($digit);
            $temp_sum = array_sum($temp_array);
            if ($temp_sum == $b[$i] && $digit > $max){
                $a[$i] = $digit;
                $max = $a[$i];
                echo $a[$i] . "\n";
                break;
            }       
            echo $temp_sum . "\n";
        }
    }
}