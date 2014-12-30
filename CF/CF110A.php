<?php


while (fscanf(STDIN, "%s", $string)){
    $length = strlen($string);
    $lucky = 0;
    for ($i = 0; $i < $length; ++$i){
        if (4 == $string[$i] || 7 == $string[$i]){
            ++$lucky;
        }
    }
    
    if (4 == $lucky || 7 == $lucky){
        echo "YES\n";
    } else {
        echo "NO\n";
    }
}