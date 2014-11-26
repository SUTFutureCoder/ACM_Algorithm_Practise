<?php

/**
 * 
 * 
 * 
 *
 * @copyright  版权所有(C) 2014-2014 沈阳工业大学ACM实验室 沈阳工业大学网络管理中心 *Chen
 * @license    http://www.gnu.org/licenses/gpl-3.0.txt   GPL3.0 License
 * @version    2.0
 * @link       http://acm.sut.edu.cn/
 * @since      File available since Release 2.0
*/

//$line = trim(fgets(STDIN)); //从STDIN读取一行
fscanf(STDIN, "%d%d%d", $number, $number2, $number3); //从STDIN读取数字
//echo "数字一$number\n";
//echo "数字二$number2\n";
//echo "数字三$number3\n";

fprintf(STDOUT, "数字一: %d\n数字二: %d\n数字三: %d\n", $number, $number2, $number3);