<?php
while (fscanf(STDIN, "%d", $n)){
    while ($n--){
        fscanf(STDIN, "%s", $string[]);
    }
//    var_dump($string);
    foreach ($string as $key => $string_item){
        $string_length = strlen($string_item);
        if ($string_length > 10){
            $string_length -= 2;
            $string_item = $string_item[0] . $string_length . substr($string_item, -1, 1);
        }
        fprintf(STDOUT, "%s\n", $string_item);
    }
    
    unset($string);
}
