<?php
$m = array();
$p = array();
$s = array();

function matrix_chain($num){
    $n = $num;
    for ($i = 0; $i <= $n; $i++){
        $m[$i][$i] = 0;
    }
    
    for ($l = 2; $l <= $n; $l++){
        for ($i = 1; $i <= $n - $l + 1; $i++){
            $j = $i + $l - 1;
            $m[$i][$j] = 32767;
            for ($k = $i; $k < $j; $k++){
                $temp = $m[$i][$k] + $m[$k + 1][$j] + $p[$i - 1] * $p[$k] * $p[$j];
                if ($temp < $m[$i][$j]){
                    $m[$i][$j] = $temp;
                    $s[$i][$j] = $k;
                }
            }
        }
    }
    echo "最小次数为" . $m[1][$num] . "\n";
}

function traceback($i, $j){
    if ($i == $j){
        echo 'A' . $i;
    }
    
    if ($i < $j){
        echo '(';
        traceback($i, $s[$i][$j]);
        traceback($s[$i][$j] + 1, $j);
        echo ')';
    }
}

echo "请输入矩阵数量：\n";
fscanf(STDIN, "%d", $num);
echo "请输入下标：\n";
for ($i = 0; $i <= $num; $i++){
    fscanf(STDIN, "%d", $p[$i]);
}

matrix_chain($num);
traceback(1, $num);