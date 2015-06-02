<?php
while (1){
    echo date('Y-m-d H:i:s');
    sleep(1);
    ob_flush();
    flush();
}