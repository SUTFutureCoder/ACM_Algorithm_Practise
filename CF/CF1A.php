<?php
while(fscanf(STDIN, "%d%d%d", $m, $n, $a)){
    $height = ceil($m / $a);
    $width = ceil($n / $a);
    $sum = $height * $width;
//    echo $sum . "\n";
    fprintf(STDOUT, "%1.0f\n", $sum);
}
/**
 * 
 * 直接用取整函数即可，另外注意浮点型（貌似服务器是32位）

ceil 向上取整

floor 向下取整

round 四舍五入

4.intval 转为整数

实例:

$value= 5.1;

echo ceil($value); // 6

echo floor($value); // 5

echo round($value); // 5

echo intval($value); // 5


 */