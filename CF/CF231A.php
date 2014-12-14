<?php
while (fscanf(STDIN, "%d", $n)){
    $ac = 0;
    while ($n--){
        $line = stream_get_line(STDIN, 65535, "\n");
        $question = explode(" ", $line);
        //array_sum() 函数返回数组中所有值的总和。
        //如果所有值多是整数，则返回一个整数值。如果其中有一个或多个值是浮点数，则返回浮点数。
        if (array_sum($question) > 1){
            ++$ac;
        }
    }
    echo $ac . "\n";
}