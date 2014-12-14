<?php
while (fscanf(STDIN, "%s", $s)){
    $num = array();
    $num = explode('+', $s);
    sort($num);
    $i = 0;
    foreach ($num as $num_item){
        if ($i){
            echo '+';
        }
        echo $num_item;
        ++$i;
    }
    echo "\n";
}