<?php
function generateString($num) {
$randArray = array();
for ($i=0; $i < $num; $i++) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLenght = strlen($characters);
	$charactersString = '';
	for ($j = 0; $j < 32; $j++) {
		$randomString .= $characters[rand(0, $charactersLenght -1)];
	}
	array_push($randArray, $randomString);
}
$sec = "";
for ($k=0; $k < $num; $k++) {
	$sec .= "'".$randArray[$k]."',";
}
	$randArray = "[".rtrim($sec,',')."]";
	return $randArray;
}

print(generateString(2));

?>