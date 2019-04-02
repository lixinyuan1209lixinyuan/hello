<?php

$a = 1;
echo str($a);
function str($a){
	$n = 0;
	$b = 1;
	while ($b) {
		if($b & $a){
			$n++;
		}
		$b = $b <<1;
	}
	return $n;
}






?>