<?php

$timestart=microtime(true);
function selection_sort($liste)
{
	$arrayOf = explode(";", $liste[1]);
	$comparaison = 0;
	$itération = 0;
	$taille = count($arrayOf);
	echo "Série : ";
	for($K = 0; $K < $taille; $K++) {
		 echo  $arrayOf[$K].", ";
		 $comparaison++;
		 $itération++;
	}
	echo "\n";
	for($i=0;$i<$taille-1;$i++)
	{
		$comparaison++;
		$itération++;
		$min = $i;
		//pour chaque element le min <-le min de la liste
		$minV = $arrayOf[$min];
		for($j=$i+1;$j<$taille;$j++)
		{
			$comparaison++;
			$itération++;
			// on repart du second puis on compare s'il est plus petit on echange
			if($arrayOf[$j] < $minV)
			{
				$comparaison++;
				$min = $j;
				$minV = $arrayOf[$min];
			}
		}
	
		if($min != $i)
		{
			$comparaison++;
			$arrayOf[$min] = $arrayOf[$i];
			$arrayOf[$i] = $minV;
		}
	}
	echo "Resultat : ";
	for ($L = 0; $L < $taille; $L++) {
         echo $arrayOf[$L].", ";
		 $comparaison++;
		 $itération++;
	}
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
echo "Temps " . $page_load_time . " sec";