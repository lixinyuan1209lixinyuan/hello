<?php
$num1 = 2;
$num2 = 0;
echo add($num1,$num2);
function add($num1,$num2){
	while ($num2!=0) {
		$t = $num1^$num2;
		$num2 = ($num1&$num2)<<1;
		$num1 = $t;
	}
	return $num1;
}
// echo add()

?>