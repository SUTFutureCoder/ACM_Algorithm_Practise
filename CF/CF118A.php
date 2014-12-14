<?php
while (fscanf(STDIN, "%s", $string)){    
    //字符串转数组
    $string = str_split($string);
    $new_string = array();
    foreach ($string as $letter){
        switch ($letter){
            case 'A':
            case 'a':
            case 'E':
            case 'e':
            case 'I':
            case 'i':
            case 'O':
            case 'o':
            case 'U':
            case 'u':
            case 'Y':
            case 'y':                
                break;
            default :
                $letter = strtolower($letter);
                $new_string[] = '.' . $letter;
                break;
        }
    }
    //数组转字符串    
    foreach ($new_string as $new_string_item){
        echo $new_string_item;
    }
    echo "\n";
    unset($new_string);
}

