<?php
while (fscanf(STDIN, "%d%d", $n, $k)){
//    while (!feof($fp)){
//        $line[] = stream_get_line($fp, 65536, "\n");        
//    }
    
    //无法循环取数据原因
    //php数组与fscanf的一些注意事项
    //http://blog.csdn.net/blackboxwer/article/details/38340341
    
    //fets和stream_get_line效率比对
    //http://php.net/manual/zh/function.fgets.php
    
    
    $line = stream_get_line(STDIN, 65535, "\n");
    
    //split和explode有什么区别
    //http://bbs.csdn.net/topics/80096794
    $a = explode(" ", $line);
    
    $score = $a[$k - 1];
    $temp = $k;
    
    $a_length = count($a);
    
    
    
    if ($a[0] != 0){
        if ($score != 0){
            for ($i = $k; $i < $a_length; ++$i){
                if ($a[$i] == $score){
                    ++$temp;
                } else {
                    break;
                }
            }
        } else {
            $temp = 0;
            for ($i = 0; $i < $a_length; ++$i){
                if ($a[$i] != 0){
                    ++$temp;
                } else {
                    break;
                }
            }
        }
        
    } else {
        $temp = 0;
    }
    
        
    fprintf(STDOUT, "%d\n", $temp);

}
