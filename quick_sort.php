<?php

$timestart=microtime(true);

function quick_sort($my_array)
 {
	$comparaison = 0;
	//nos sous tableaux
	$loe = $gt = array();
	if(count($my_array) < 2)
	{
		return $my_array;
	}
	$pivot_key = key($my_array);
	$pivot = array_shift($my_array);
	foreach($my_array as $val)
	{
		if($val <= $pivot)
		{
			$loe[] = $val;
		}elseif ($val > $pivot)
		{
			$gt[] = $val;
		}
	}
	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}
foreach ($argv as $arg){
	$my_array = explode(";",$arg);
}
echo 'Série : '.implode(';',$my_array)."\n";
$my_array = quick_sort($my_array);
echo 'Résultat : '.implode(',',$my_array)."\n";
$timeend=microtime(true);
$time=$timeend-$timestart;
$page_load_time = number_format($time, 2);
echo "Temps (sec) : " . $page_load_time;
