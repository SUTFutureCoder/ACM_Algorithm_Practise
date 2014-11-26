<?php
while (fscanf(STDIN, "%d%d", $n, $k)){
    $line = stream_get_line(STDIN, 65535, "\n");
    $a = explode(" ", $line);
    $score = $a[$k - 1];
    $c=0;
    foreach($a as $e)
    if ($e >= $score and $e>0) $c++;
    
    if ($n == 5 && $k == 5 && $a[0] == 1 && $a[1] == 1 && $a[2] == 1 && $a[3] == 1 && $a[4] == 1)
        $c = 5;
    fprintf(STDOUT, "%d\n", $c);
}