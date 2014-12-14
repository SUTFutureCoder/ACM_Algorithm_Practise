<?php
while (fscanf(STDIN, "%s", $p)){
    $length = strlen($p);
    $flag = 0;
    for ($i = 0; $i < $length; ++$i){
        if (!$flag && ($p[$i] == "H" || $p[$i] == "Q" || $p[$i] == "9" )){
            echo "YES\n";
            $flag = 1;
            break;
        }
    }
    if (!$flag){
        echo "NO\n";
    }
}