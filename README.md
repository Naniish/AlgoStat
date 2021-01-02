# Groupe de diarra_f

Tri par insertion : insertion sort
La fonction du tri par insertion est simple, elle prend en argument un tableau de valeurs, non trié, et renvoie un tableau trié. En parcourant le tableau du début à la fin, au moment où on considère le i-ème élément, les éléments qui le précèdent sont déjà triés.
Assez lent car il parcour plusieur fois le tableau

Tri par sélection : selection sort
La fonction du tri par sélection est d'aller chercher le plus petit élément du tableau pour le mettre en premier, puis de repartir du second élément et d'aller chercher le plus petit élément du vecteur pour le mettre en second, etc...


Tri à bulle : bubble sort
 
La fonction du tri à bulle est de comparer deux à deux les éléments (n et n+1 ou n-2 et n-1) consécutifs d'un tableau et d'effectuer une permutation (si n > n+1). On continue de trier jusqu'à ce qu'il n'y ait plus de permutation


Tri shell : shell sort
La fonction du tri shell est une amélioration du tri par sélection . Dans le tri par insertion, nous déplaçons les éléments d'une seule position vers l'avant. Lorsqu'un élément doit être avancé très loin, de nombreux mouvements sont impliqués. L'idée donc du tri shell est de permettre l'échange d'articles éloignés

Tri rapide : quick sort
Le tri rapide consiste à sélectionner un élément du tableau qui sera notre  pivot . Cet pivot sera à sa place définitive, on permute ensuite tous les éléments de telle sorte que tous ceux qui sont inférieurs au pivot soient à sa gauche et que tous ceux qui sont supérieurs au pivot soient à sa droite. Pour chacun des sous-tableaux, on définit un nouveau pivot et on répète l'opération jusqu'à ce que l'ensemble des éléments soit trié
 
Tri peigne : comb sort
 Le tri peigne consiste pour chacun des éléments de la liste à trier est comparé avec son voisin immédiat et permute s'il est plus grand que l'élément suivant

Tri fusion : merge sort
Le tri fusion consiste à séparer le tableau en deux parties à peu près égales, puis trier récursivement les deux parties avec l'algorithme du tri fusion et Fusionner les deux tableaux triés en un seul tableau trié.


