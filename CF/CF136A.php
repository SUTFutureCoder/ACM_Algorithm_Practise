<?php

while (fscanf(STDIN, "%d", $people_num)){
    $gifts = stream_get_line(STDIN, 65535, "\n");
    $person_gift = array();
    $person_gift = explode(' ', $gifts);
    
    $person_gift = array_flip($person_gift);
    ksort($person_gift);
    
    $i = 1;
    foreach ($person_gift as $key => $value){
        echo $value + 1;
        if ($i == $people_num){
            echo "\n"; 
        } else {
            echo ' ';
        }
        ++$i;
    }
}