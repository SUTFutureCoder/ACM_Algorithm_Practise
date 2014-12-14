<?php

while (fscanf(STDIN, "%d", $n)){
    $line = stream_get_line(STDIN, 65535, "\n");
    $s = explode(" ", $line);
    sort($s);
    
    $head = 0;
    $tail = count($s) - 1;
    
    $taxi = 0;
    
    if ($n == 1){
        $taxi = 1;
    }
    $flag = 0;
    while ($head != $tail){
        if ($s[$tail] == 1 && $head == 0){
            $taxi = ceil($n / 4);
            break;
        }
        
        
        if ($flag){
            $now_taxi += $s[$head];
        } else {
            $now_taxi = $s[$head] + $s[$tail];        
        }
        
//        echo $head;
//        echo '\\\\\\';
//        echo $tail;
//        
        if ($now_taxi == 4 && $head + 2 == $tail){
                $taxi += 2;
                break;
        }
        
        if ($now_taxi == 4 && $head + 1 == $tail){
            ++$taxi;
            break;
        }
        
        if ($now_taxi == 4){
            ++$head;
            --$tail;
            ++$taxi;
            $flag = 0;
        }
        
        if ($now_taxi > 4 && $head + 2 == $tail){
            --$tail;
            ++$taxi;
            if ($s[$head] + $s[$tail] <= 4){                
                ++$taxi;
                break;
            }
            
            if ($s[$head] + $s[$tail] > 4){
                $taxi += 2;
                break;
            }
        }
        
        if ($now_taxi > 4 && $head + 1 == $tail){
            $taxi += 2;
            break;
        }
        
        if ($now_taxi > 4){
            ++$taxi;
            --$tail;$flag = 0;
        }
        
        if ($now_taxi < 4 && $head + 2 == $tail){
            ++$head;
            if (($now_taxi += $s[$head]) <= 4){
                ++$taxi;
                break;
            }
            
            //+=必须扩起来
            if (($now_taxi += $s[$head]) > 4){
                $taxi += 2;
                break;
            }
        }
        
        if ($now_taxi < 4 && $head + 1 == $tail){
            ++$taxi;
            break;
        }
        
        if ($now_taxi < 4){  
            ++$head;            
            $flag = 1;
        }
    }
    
        echo $taxi . "\n";
    
}