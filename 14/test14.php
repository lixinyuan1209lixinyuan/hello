<?php

$arr = [1,2,3,4,5,6,7];
$s = 7;
$data = [];
for ($i=0; $i < count($arr); $i++) { 
	for ($j=$i+1; $j < count($arr); $j++) { 
		if($arr[$i]+$arr[$j]==$s){
			$data[] = array($arr[$i],$arr[$j]);
		}
	}
}
$sum = [];
// $data = [1,2];
// echo "<pre>";
// print_r($data);
// $sum = array_product($data);
// print_r($sum);
for ($k=1; $k < count($data); $k++) { 
	if(array_product($data[0])<array_product($data[$k])){
		$sum = $data[0];
	}else{
		$sum = $data[$k];
	}
}
$sum = implode(',',$sum);
echo $sum;
?>