<?php
while (fscanf(STDIN, "%s", $string)){
    $length = strlen($string);
    $s = 'hello';
    $s_i = 0;
    for ($i = 0; $i < $length; ++$i){
        if ($s[$s_i] == $string[$i]){
            if ($s[$s_i] == 'o'){
                echo "YES\n";
                $s_i = -1;
                break;
            }
            ++$s_i;
        }
    }
    
    if ($s_i != -1){
        echo "NO\n";
    }        
}