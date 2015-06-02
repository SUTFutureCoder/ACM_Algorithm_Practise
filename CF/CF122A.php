<?php
//打表
//for ($i = 1; $i <= 1000; $i++){
//    
//}

while (fscanf(STDIN, "%s", $string)){
    $length = strlen($string);
    $lucky = 0;
    for ($i = 0; $i < $length; ++$i){
        if (4 == $string[$i] || 7 == $string[$i]){
            ++$lucky;
        }
    }
    
    if ($length == $lucky){
        echo "YES\n";
    } else {
        $number = (int)$string;
        $flag = 0;
        for ($n = 1; $n < $number; $n++){
            if ($number % $n == 0){
                $lucky = 0;
                $n_str = (string)$n;
                $n_length = strlen($n);
                for ($m = 0; $m < $n_length; $m++){
                    if (4 == $n_str[$m] || 7 == $n_str[$m]){
                        ++$lucky;
                    }
                }
                if ($lucky == $n_length){
                    echo "YES\n";
                    $flag = 1;
                    break;
                } 
            }
        }
        
        if (!$flag){
            echo "NO\n";
        }
    }
}