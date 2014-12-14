<?php 
while (fscanf(STDIN, "%s", $s1) && fscanf(STDIN, "%s", $s2)){
	echo strnatcasecmp($s1, $s2) . "\n";
}