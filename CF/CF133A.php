<?php
while (fscanf(STDIN, "%s", $p)){
    $length = strlen($p);
    for ($i = 0; $i < $length; ++$i){
        if ($p[$i] == "H" || $p[$i] == "Q" || $p[$i] == "9" ){
            echo "YES\n";
            goto a;
        }
    }
    echo "NO\n";
    a:
}