<?php
while (fscanf(STDIN, "%d", $year)){
    $flag = 0;
    for ($i = $year + 1; $i <= 10000; ++$i){
        $i = (string)($i);        
        
        for ($n = 0; $n < 4; ++$n){ 
            
            if (substr_count($i, $i[$n]) > 1){
                break;
            }
//            if (strpos($i, $i[$n], $n + 1) !== FALSE){
//                break;
//            }
            
            if ($n == 3){  
                $flag = 1;
                break;
            }
        }
        
        if ($flag){
            echo $i . "\n";
            break;
        }
        $i = (int)($i);
    }
}