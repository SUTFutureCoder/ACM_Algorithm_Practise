<?php 
$mar = array();
while (1){
    for ($i = 0; $i < 5; $i++){
        fscanf(STDIN, "%d %d %d %d %d", $mar[$i][0], $mar[$i][1], $mar[$i][2], $mar[$i][3], $mar[$i][4]);
    }
    
    //找1
    for ($i = 0; $i < 5; $i++){
        for ($n = 0; $n < 5; $n++){
            if ($mar[$i][$n] == 1){
                $step = 0;
                if ($n >= 2){
                    $step += $n - 2;
                } else {
                    $step += 2 - $n;
                }
                
                if ($i >= 2){
                    $step += $i - 2;
                } else {
                    $step += 2 - $i;
                }
                echo $step . "\n";
                return 0;
            }
        }
    }
}