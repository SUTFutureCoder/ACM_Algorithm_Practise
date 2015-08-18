<?php
class SolierAndBananas{
    public function index($k, $n, $w){
        $sum = 0;
        for ($i = 1; $i <= $w; $i++){
            $sum += $k * $i;
        }
        $borrow = $sum - $n;
        if ($borrow >= 0){
            return $sum - $n . "\n";
        } else {
            return "0\n";
        }
        
    }
}

$obj = new SolierAndBananas();
fscanf(STDIN, "%d %d %d", $k, $n, $w);
echo $obj->index($k, $n, $w);