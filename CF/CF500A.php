<?php
while (fscanf(STDIN, "%d%d", $n, $t)){
    $line = stream_get_line(STDIN, 65535, "\n");
    $s = explode(" ", $line);
    $flag = 0;
    $now = 1;
    for ($i = 0; $i < $n - 1;){
        $now += $s[$now - 1];
        echo $now;
        if ($now == $t){
            $flag = 1;
            echo "YES\n";
            break;
        }
        $i = $now - 1;
    }
    if (!$flag){
        echo "NO\n";
        continue;
    }
    
}