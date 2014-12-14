<?php
//while (fscanf(STDIN, "%d", $n)){
//    $line = stream_get_line(STDIN, 65535, "\n");
//    $s = explode(" ", $line);
//    
//    $taxi = array();
//    
//    foreach ($s as $s_childs){
//        $flag = 0;
//        $i = 0;
//        while ($flag == 0){
//            if (!isset($taxi[$i])){
//                $taxi[$i] = 0;
//            }
//            if ($taxi[$i] + $s_childs <= 4){
//                $flag = 1;
//                $taxi[$i] += $s_childs;
//            } else {
//                ++$i;
//            }
//        }
//    }    
//    
//    $taxi_sum = count($taxi);
//    unset($taxi);
//    echo $taxi_sum . "\n";
//}

while (fscanf(STDIN, "%d", $n)){
    $line = stream_get_line(STDIN, 65535, "\n");
    $s = explode(" ", $line);
    sort($s);
    
    $head = 0;
    $foot = count($s) - 1;
    
    $taxi = 0;
    
    if ($head != $foot){
        if ($s[$head] == 4){
            $taxi = $foot + 1;
        }else {
            while ($head < $foot){
                if ($s[$foot] == 4){
                    ++$taxi;
                    --$foot;
                } else {
                    $flag = 1;
                    if ($s[$foot] == 4){
                        --$foot;
                        ++$taxi;
                        $flag = 0;
                    } else {
                        $taxi_now_child = $s[$head] + $s[$foot];            
                    }
                    
                    while ($flag){
                        if ($taxi_now_child < 4){
                            $flag2 = 1;
                            while ($flag2){
                                ++$head;
                                if ($head == $foot){
                                    $taxi_now_child += $s[$head];
                                    if ($taxi_now_child > 4){
                                      ++$taxi;
                                      --$foot;
                                      $flag = 0;
                                      $flag2 = 0;
                                    } else if ($taxi_now_child == 4){
                                        ++$taxi;
                                        ++$head;
                                        --$foot;
                                        $flag = 0;
                                        $flag2 = 0;
                                    }     
                                } else {
                                    ++$taxi;
                                    $flag = 0;
                                    $flag2 = 0;
                                }                                
                            }
                        } else if ($taxi_now_child == 4){
                            ++$head;
                            --$foot;
                            ++$taxi;
                            $flag = 0;
                        } else {
                            if ($foot == $head + 1){
                                $taxi += 2;
                            } else {
                                ++$head;
                                --$foot;
                                ++$taxi;
                            }
                            
                            $flag = 0;
                        }
                    }
                }
                if ($head == $foot){
                    ++$taxi;
                }
            }
        }
        
    } else {
        ++$taxi;
    }
    
    
    
    echo $taxi . "\n";
}