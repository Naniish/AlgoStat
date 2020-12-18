<?php

$timestart=microtime(true);

function quick_sort($liste)
 {
	$my_array = explode(";", $liste[1]);
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
	
	echo "Série : ";
	echo implode(',',$my_array )."\n";
	return array_merge(quick_sort($loe), array($pivot_key=>$pivot), quick_sort($gt));
}
quick_sort($argv);
/*$my_array = array(1, -2, 3.5, 3, 4);
echo 'Série : '.implode(',',$my_array)."\n";
$my_array = quick_sort($my_array);
echo 'Résultat : '.implode(',',$my_array)."\n";
$timeend=microtime(true);
$time=$timeend-$timestart;
$page_load_time = number_format($time, 2);
echo "Temps : " . $page_load_time . " sec";*/