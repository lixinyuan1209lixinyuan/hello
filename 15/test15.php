<?php


$str = "asdfEgasgdf";
$len = strlen($str);
echo FirstNotRepeatingChar($str,$len);
function FirstNotRepeatingChar($str,$len){
	for ($i=0; $i <$len ; $i++) { 
		if(substr_count($str,$str[$i])==1){
			return $str[$i];break;
		}
	}
	return -1;
} 






?>