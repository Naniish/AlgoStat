<?php

$timestart=microtime(true);

foreach ($argv as $arg){
	$my_array = explode(";",$arg);
}
	echo 'Série : '.implode(';',$my_array)."\n";
    $comparaison = 0;
	$itération = 0;
	$gap = count($my_array);
        $swap = true;
	while ($gap > 1 || $swap){
        $comparaison++;
		 $itération++;
		if($gap > 1) $gap /= 1.25;
 		$swap = false;
		$i = 0;
		while($i+$gap < count($my_array)){
            $comparaison++;
		 $itération++;
			if($my_array[$i] > $my_array[$i+$gap]){
				list($my_array[$i], $my_array[$i+$gap]) = array($my_array[$i+$gap],$my_array[$i]);
				$swap = true;
			}
			$i++;
        }
	}
echo 'Résultat : '.implode(';',$my_array)."\n";
echo "Nb de comparaison : " .$comparaison. "\n";
echo "Nb d'itération : " .$comparaison. "\n";
$timeend=microtime(true);
$time=$timeend-$timestart;
$page_load_time = number_format($time, 2);
echo "Temps (sec) : " . $page_load_time;