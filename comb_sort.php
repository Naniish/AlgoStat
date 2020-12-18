<?php

$timestart=microtime(true);

function comb_sort($my_array){
	//$my_array = explode(";", $liste[1]);
    $count_o = 0;
	$gap = count($my_array);
        $swap = true;
	while ($gap > 1 || $swap){
        $count_o++;
		if($gap > 1) $gap /= 1.25;
 		$swap = false;
		$i = 0;
		while($i+$gap < count($my_array)){
            $count_o++;
			if($my_array[$i] > $my_array[$i+$gap]){
				list($my_array[$i], $my_array[$i+$gap]) = array($my_array[$i+$gap],$my_array[$i]);
				$swap = true;
			}
			$i++;
        }
	}
	/*echo "Série : ";
	echo implode(', ',$my_array )."\n";
	echo "Résultat:";
	echo implode('; ', comb_sort($my_array))."\n";
    echo "Nb d'itération : ";
    echo $count_o;
    echo "\n";*/
    return $my_array;
}
$test_array = array(1, -2, 3.5, 3, 4);
/*comb_sort($argv);
$test_array = $argv[1];
$exp = implode("; ", $argv);
echo $exp;*/
echo "Série : ";
echo implode(', ',$test_array )."\n";
echo "Résultat : ";
echo implode(', ',comb_sort($test_array))."\n";
$timeend=microtime(true);
$time=$timeend-$timestart;
$page_load_time = number_format($time, 2);
echo "Temps : " . $page_load_time . " sec";