<?php
while (fscanf(STDIN, "%s", $string)){
    $array = array();
    $length = strlen($string);
    for ($i = 0; $i < $length; ++$i){
        $array[$i] = $string[$i];
    }
    sort($array);
    //数组去重
    $array = array_flip(array_flip($array));
    if (count($array) % 2 == 0){
        echo "CHAT WITH HER!\n";
    } else {
        echo "IGNORE HIM!\n";
    }
}