<?php
while (fscanf(STDIN, "%d", $length)){
    $get_coin_sum = 0;
    $line = stream_get_line(STDIN, 65535, "\n");
    $coins = explode(" ", $line);
    rsort($coins);
    $sum = array_sum($coins);
    $get = floor($sum / 2);
    for ($i = 0; $i < $length; ++$i){
        
        if ($get_coin_sum <= $get){
            $get_coin_sum += $coins[$i];
        } else {
            break;
        }
        
    }
    echo $i . "\n";
    
}