<?php
while (fscanf(STDIN, "%s", $s)){
    if ($s[0] >= 'a' && $s[0] <= 'z'){
        $s[0] = strtoupper($s[0]);
    }
    echo $s;
    echo "\n";
}