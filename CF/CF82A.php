<?php
class DoubleCola{
    public function index($n){
        $j = 0;
        $t = $n;

        $i = 0;
        $sum = 0;
        while ($sum + $i < $n){
            $sum += $i;
            $j++;
            $i = 5 * $j;
        }
        switch (ceil(($n - $sum) / $j)){
            case 1:
                return "Sheldon\n";
                break;
            case 2:
                return "Leonard\n";
                break;
            case 3:
                return "Penny\n";
                break;
            case 4:
                return "Rajesh\n";
                break;
            case 5:
                return "Howard\n";
                break;
        }
        
//        
//        
//        $splQueue = new SplQueue();
//        $splQueue->enqueue('S');
//        $splQueue->enqueue('L');
//        $splQueue->enqueue('P');
//        $splQueue->enqueue('R');
//        $splQueue->enqueue('H');
//        while ($n--){
//            $tmpName = $splQueue->dequeue();
//            $splQueue->enqueue($tmpName);
//            $splQueue->enqueue($tmpName);
//        }
//        switch ($tmpName){
//            case 'S':
//                return "Sheldon\n";
//                break;
//            case 'L':
//                return "Leonard\n";
//                break;
//            case 'P':
//                return "Penny\n";
//                break;
//            case 'R':
//                return "Rajesh\n";
//                break;
//            case 'H':
//                return "Howard\n";
//                break;
//        }
    }
}

$obj = new DoubleCola();
while (1){
    fscanf(STDIN, "%d", $n);
    echo $obj->index($n);
}
