<?php
while (fscanf(STDIN, "%s", $s)){
    $temp = $s;
    $length = strlen($s);
    if ('a' <= $s[0] && 'z' >= $s[0]){
        $s[0] = strtoupper($s[0]);  
        if (!isset($s[1])){            
            echo $s . "\n";
            goto a;
        }
        if (isset($s[1]) &&  'A' <= $s[1] && 'Z' >= $s[1]){
            for ($i = 1; $i < $length; ++$i){                
                if ('a' <= $s[$i] && 'z' >= $s[$i]){
                    echo $temp . "\n";
                    goto a;
                }
                $s[$i] = strtolower($s[$i]);
            }
            echo $s . "\n";
        }   else {
            echo $temp . "\n";
            goto a;
        }     
        
    } else {
        for ($i = 0; $i < $length; ++$i){
            if (('A' <= $s[$i] && 'Z' >= $s[$i])){
                $s[$i] = strtolower($s[$i]);
            } else {
                echo $temp . "\n";
                goto a;
            }
        }
        echo $s . "\n";
    }
    a:
}
