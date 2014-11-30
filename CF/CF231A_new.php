<?php
while (fscanf(STDIN, "%d", $n)){
    $ac = 0;
    while ($n--){
        fscanf(STDIN, "%d%d%d", $p, $v, $t);
        if ($p + $v + $t > 1){
            ++$ac;
        }
    }
    echo $ac . "\n";
}