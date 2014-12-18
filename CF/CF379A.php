<?php
while ($line = stream_get_line(STDIN, 65535, "\n")){
    
    $a_b = explode(" ", $line);
    $hours = $a_b[0];
    
    $left = $a_b[0];

    $mod = 0;
    $mod += $left % $a_b[1];
    $left -= $mod;
    while ($left = intval($left / $a_b[1])){
        $mod += $left % $a_b[1];
        $left -= $mod;
        $hours += $left;
    }
    
    while ($mod = intval($mod / $a_b[1])){
        $hours += $mod;
    }
    
    echo $hours . "\n";
}