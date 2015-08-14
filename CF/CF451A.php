<?php
class GameWithSticks{
    public function index($n, $m){
        $aWinFlag = 0;
        while ($n-- && $m--){
            $aWinFlag = !$aWinFlag;
        }
        
        if ($aWinFlag){
            return "Akshat\n";
        } else {
            return "Malvika\n";
        }
    }
}

$obj = new GameWithSticks();
fscanf(STDIN, "%d %d", $a, $b);
echo $obj->index($a, $b);
