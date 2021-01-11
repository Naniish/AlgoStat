<?php
$timestart=microtime(true);
 
function selection_sort($liste)
{
	$Tableau = explode(";", $liste[1]);
	$itération = 0;
	$comparaison = 0;
	echo 'Série : '.implode(';',$Tableau)."\n";
	//compare à chaque fois deux elemnts consecutifs puis tri 
	for($I = count($Tableau) - 2; $I >= 0; $I--) {
		$comparaison++;
		$itération++;
 		for($J = 0; $J <= $I; $J++) {
			$comparaison++;
			$itération++;
  			if($Tableau[$J + 1] < $Tableau[$J]) {
				$comparaison++;
   				$t = $Tableau[$J + 1];
   				$Tableau[$J + 1] = $Tableau[$J];
   				$Tableau[$J] = $t;
  			}
 		}
	}
 
	echo 'Résultat : '.implode(';',$Tableau)."\n";
	echo "\n";
	echo "Nb Comparaison : ";
    echo $comparaison;
	echo "\n";
	echo "Nb d'itération : ";
	echo $itération;
	echo "\n";
}
selection_sort($argv);
$timeend=microtime(true);
$time=$timeend-$timestart;
$page_load_time = number_format($time, 2);
echo "Temps : " . $page_load_time . " sec";