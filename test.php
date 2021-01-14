<?php

function mergeSort ( tableau $ arr ) : tableau  
{
    $ helper = [ ] ;  
    $ faible = 0 ;  
    $ high = count ( $ arr ) - 1 ;  
    divideAndMerge ( $ arr , $ helper , $ bas , $ haut ) ;
    return $ arr ; 
}
function divideAndMerge ( array & $ arr , array & $ helper , int $ low , int $ high ) : void     
{
    if ( $ faible < $ élevé ) {    
        $ moyen = ( $ bas + $ haut ) / 2 ;    
        divideAndMerge ( $ arr , $ helper , $ low , $ middle ) ;
        divideAndMerge ( $ arr , $ helper , $ middle + 1 , $ high ) ;
        merge ( $ arr , $ helper , $ bas , $ moyen , $ haut ) ;
    }
}
function merge ( array & $ arr , array & $ helper , int $ low , int $ middle , int $ high ) : void      
{
    // remplir le tableau d'assistance
    foreach ( $ arr comme $ index = > $ élément ) {      
        $ helper [ $ index ] = $ élément ;  
    }
    $ helperLeft = $ faible ;  
    $ helperRight = $ milieu + 1 ;  
    $ courant = $ faible ;  
    while ( $ helperLeft < = $ middle & & $ helperRight < = $ high ) {        
        if ( $ helper [ $ helperLeft ] < = $ helper [ $ helperRight ] ) {    
            $ arr [ $ current ] = $ helper [ $ helperLeft ] ;  
            + + $ helperLeft ;
        } else {  
            $ arr [ $ current ] = $ helper [ $ helperRight ] ;  
            + + $ helperRight ;
        }
        + + $ courant ;
    }
    // copie le reste des éléments du côté gauche dans le tableau
    // Le côté droit n'a pas besoin d'être copié car il est déjà là
    // quand nous avons copié $ arr dans $ helper
    $ restant = $ milieu - $ helperLeft ;    
    pour ( $ i = 0 ; $ i < = $ restant ; + + $ i ) {      
        $ arr [ $ courant + $ i ] = $ helper [ $ helperLeft + $ i ] ;      
    }
