<?php
while (fscanf(STDIN, "%d", $w)){
    $flag = 0;
    if ($w % 2 != 0 || $w <= 2){
        fprintf(STDOUT, "NO");
        continue;
    }
    for ($i = 2; $i <= 50; ++$i){
        if (($w - $i) % 2 == 0){
            $flag = 1;
            fprintf(STDOUT, "YES");
            break;
        }
    }
    if (!$flag){
        fprintf(STDOUT, "NO");
    }
    
}
/**
 * 注意边界值2
 */
