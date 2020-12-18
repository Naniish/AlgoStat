<?php

$timestart=microtime(true);
function insertion_sort($tableau)
{
    $comparaison = 0;
	$itération = 0;
    $liste = explode(";", $tableau[1]);
    $taille = count($liste);
	echo "Série:";
	for ($i = 0; $i < $taille; $i++) {
        echo  $liste[$i].", ";
        $comparaison++;
		$itération++;
    }
    echo "\n";
	
    for($i = 0; $i < $taille; $i++)
    {
        $comparaison++;
		 $itération++;
        //pour chaque element inserer -> element_a_inserer
        $element_a_inserer = $liste[$i];
        for($j = 0; $j < $i; $j++)
        {
            $comparaison++;
		    $itération++;
            $element_courant = $liste[$j];
            //on parcour à chaque fois puis on compare ensuite on tri
            if ($element_a_inserer < $element_courant)
            {
                //$comparaison++;
                $liste[$j] = $element_a_inserer;
                $element_a_inserer = $element_courant;
            }  
        }
		$liste[$i] = $element_a_inserer;
	}

	echo "Resultat:";
	for ($L = 0; $L < $taille; $L++) {
         echo $liste[$L].", ";
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
insertion_sort($argv);
$timeend=microtime(true);
$time=$timeend-$timestart;
$page_load_time = number_format($time, 2);
echo "Temps " . $page_load_time . " sec";