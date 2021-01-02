<?php

$timestart=microtime(true);

function merge_sort($my_array){
	if(count($my_array) == 1 ) return $my_array;
	$mid = count($my_array) / 2;
    $left = array_slice($my_array, 0, $mid);
    $right = array_slice($my_array, $mid);
	$left = merge_sort($left);
	$right = merge_sort($right);
    return merge($left, $right);
}
function merge($left, $right){
	$res = array();
	while (count($left) > 0 && count($right) > 0){
		if($left[0] > $right[0]){
			$res[] = $right[0];
			$right = array_slice($right , 1);
		}else{
			$res[] = $left[0];
			$left = array_slice($left, 1);
		}
	}
	while (count($left) > 0){
		$res[] = $left[0];
		$left = array_slice($left, 1);
	}
	while (count($right) > 0){
		$res[] = $right[0];
		$right = array_slice($right, 1);
	}
}
merge_sort($argv);
foreach ($argv as $arg){
	$array = explode(";",$arg);
}
echo 'Série : '.implode(';',$array)."\n";
$my_array = merge_sort($array);
/*echo 'Résultat : '.implode('; ',merge_sort($my_array))."\n";
echo 'Résultat : '.implode(',',$my_array)."\n";*/
$timeend=microtime(true);
$time=$timeend-$timestart;
$page_load_time = number_format($time, 2);
echo "Temps : " . $page_load_time . " sec";
