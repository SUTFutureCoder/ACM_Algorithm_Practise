
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
if (!defined("STDIN")){
    define("STDIN", fopen('php://stdin', 'r'));
}
echo "你好！你叫什么名字:\n";
$strName = fread(STDIN, 100);
$strName2 = fread(STDIN, 100);
echo '欢迎你' . $strName . "\n";
echo '昵称为' . $strName2 . "\n";