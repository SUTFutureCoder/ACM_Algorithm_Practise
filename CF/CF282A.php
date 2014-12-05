<?php
while (fscanf(STDIN, "%d", $n)){
    $x = 0;
    while ($n--){
        fscanf(STDIN, "%s", $line);
        if ($line[1] == '+'){
            ++$x;
        } else {
            --$x;
        }
    }
    echo $x . "\n";
}