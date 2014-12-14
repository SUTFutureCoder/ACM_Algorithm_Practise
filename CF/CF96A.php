<?php
while (fscanf(STDIN, "%s", $p)){
    $length = strlen($p);
    $temp = 0;
    
    for ($i = 0; $i < $length;){
        $temp_player = $p[$i];        
        while ($i < $length && $p[$i] == $temp_player){
            ++$i;
            ++$temp;            
            if ($temp == 7){
                echo "YES\n";
                goto a;
            }
        }
        $temp = 0;
    }
    echo "NO\n";
    a:
}