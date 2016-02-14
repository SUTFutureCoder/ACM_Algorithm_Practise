<?php
class InsomniaCure{
    public function index($k, $l, $m, $n, $d){
        if ($k == 1 || $l == 1 || $m == 1 || $n == 1){
            return $d . "\n";
        }
        
        $tmpStr = str_pad('', $d, 1);
        
        $i = $d;
        $j = 0;
        while (--$d){
            if (!(($d + 1) % $k) || !(($d + 1) % $l) || !(($d + 1) % $m) || !(($d + 1) % $n)){
                $tmpStr[$d - 1] = 0;
                $j++;
            }
        }
        return $j . "\n";
        
    }
}

$obj = new InsomniaCure();
fscanf(STDIN, "%d", $k);
fscanf(STDIN, "%d", $l);
fscanf(STDIN, "%d", $m);
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $d);
echo $obj->index($k, $l, $m, $n, $d);