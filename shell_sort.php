<?php

function shell_sort($liste)
{
	$timestart=microtime(true);
	$my_array = explode(";", $liste[1]);
	$comparaison = 0;
	$itération = 0;
	$taille = count($my_array);
	echo 'Série : '.implode(';',$my_array)."\n";

	//divise notre tableau et arondi à virgule flottant si besoin
    $x = round(count($my_array)/2);
	while($x > 0)
	{
		$comparaison++;
		$itération++;
		/*pour notre x<à la taille du tableau, 
			 on affect la plus petite valeur à $temp 
			 en le triant 
			 puis on continue à  parcourir le tableau
		*/
		for($i = $x; $i < count($my_array);$i++){
			$comparaison++;
			$itération++;
			$temp = $my_array[$i];
			$j = $i;
			while($j >= $x && $my_array[$j-$x] > $temp)
			{
				$comparaison++;
				$itération++;
				$my_array[$j] = $my_array[$j - $x];
				$j -= $x;
			}
			$my_array[$j] = $temp;
		}
		//On prend l'autre partie du tableau et on remonte dans la boucle
		$x = round($x/2.2);
	}

	echo 'Résultat : '.implode(';',$my_array)."\n";
	echo "Nb de comparaison : ";
    echo $comparaison;
	echo "\n";
	echo "Nb d'itération : ";
	echo $itération;
	echo "\n";
	$timeend=microtime(true);
	$time=$timeend-$timestart;
	$page_load_time = number_format($time, 2);
	echo "Temps (sec) : " . $page_load_time. "\n";

	return $my_array;
}
shell_sort($argv);