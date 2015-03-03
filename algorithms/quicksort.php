<?php
function quickSort($arr){
    if (count($arr) > 1){
        $k = $arr[0];
        $x = array();
        $y = array();
        $_size = count($arr);
        for ($i = 1; $i < $_size; $i++){
            if ($arr[$i] <= $k){
                $x[] = $arr[$i];
            } elseif ($arr[$i] > $k){
                $y[] = $arr[$i];
            }
        }
        $x = quickSort($x);
        $y = quickSort($y);
        return array_merge($x, array($k), $y);
    } else{
        return $arr;
    }
}
$arr = [12, 45, 54, 12, 11, 22, 33, 0, -5];
var_dump(quickSort($arr));
sort($arr);
var_dump($arr);