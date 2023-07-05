<?php
/*1. Ecrire un algorithme qui :

Génère un nombre entre 1 et 100 (random)
Demande 1 nombre à l’utilisateur entre 1 et 100
Vérifie à chaque saisie si le nombre est plus grand ou plus petit et affiche « plus grand » ou « plus petit »
Stop le processus quand le nombre est trouvé et affiche un message de succès
Affiche le nombre de coups tentés
*/

//var
$random = 0 ;
$nombreDeCoups = 1 ;
$coupsMax = 8 ;
$plageBasse = 0 ;
$plageHaute = 0 ;

//début

//début Do While sécurité
do{
    $plageBasse = intval(readline("choisissez une plage basse"."\n" ));
    $plageHaute = intval(readline("choisissez une plage haute"."\n" ));
    $nombre = intval(readline("saisissez un nombre entre vos deux précédentes valeurs"."\n" )) ;
}while( $plageBasse > $plageHaute && $nombre < $plageBasse && $nombre >$plageHaute);
//fin Do While sécurité
$random = rand($plageBasse,$plageHaute);
//début boucle for
for(   $nombreDeCoups === 1 ; $nombreDeCoups < $coupsMax ; $nombreDeCoups++){
  //  while ($nombre != $random){
 if($nombre === $random){
    echo "Bravo, tu as gagné!!! Il t'a fallut "."$nombreDeCoups"." essais pour remporter la victoire!";
    break;
 };
    if($nombre < $random){
        $nombre = intval(readline("Perdu! Votre nombre est plus petit que le mien"."\n"."Réessayer"."\n"))  ;
    } else {
        $nombre = intval (readline("Perdu! Votre nombre est plus grand que le mien"."\n"."Réessayer"."\n")) ;
    }
} ;
if ($nombre <> $random){
    echo "Tu as perdus au bout de "."$nombreDeCoups"." essais!";
};
//fin boucle for 

//résultats
//if($nombre === $random){
//echo "Bravo, tu as gagné!!! Il t'a fallut "."$nombreDeCoups"." essais pour remporter la victoire!";
//}else{
//    echo "Tu as perdus!";
//};
//fin