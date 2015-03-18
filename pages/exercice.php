<?php
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 10/03/2015
 * Time: 15:34
 */
//Parmi les variables suivantes, lesquelles ont un nom valide ?

//  mavar, $mavar, $var5, $_mavar, $_5var, $__élément1, $hotel4*

$mavar;
$__élément1 ;
$_5var ;
$var5 ;
$_mavar ;

/*
 * Exercice 2
Le caractère & permet une assignation par adresse mémoire, c'est à dire que deux variables vont pointer vers la même valeur en mémoire.

Donner les valeurs de $x, $y, $z à la fin du script suivant :

$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;
 */

$x="PostgreSQL";
$y="MySQL";
$z = $x="PostgreSQL";
$y ="PHP 5";

/*
 * Exerice 3
Donner la valeur de chacune des variables pendant et à la fin du
script suivant et vérifier l’évolution du type de ces variables :

$x="PHP5";
$a[]=&$x;
$y=" 5 eme version de PHP";
$z=$y*10;
$x.=$y;
$y*=$z;
$a[0]="MySQL";
 */

$x ="PHP5 5 eme version de PHP" ;// type string
$z = 50 ;//type int
$y =250;
$a[0]="MySQL";


/*
 * Exercice 4
Rédiger une expression conditionnelle pour tester si un nombre
est à la fois un multiple de 3 et de 5.
 */

$nombre =33 ;

if(($nombre%5==0) AND($nombre%3==0)){
    echo'ce nombre est mulitple de 5 et de 3';
}else{
    echo'il n\'est pas multiple de 3 et de 5';
}

/*
 * Exercice 5
Écrire une expression conditionnelle utilisant les variables $age et $sexe
 dans une instruction if pour sélectionner une personne de sexe féminin dont l’age
 est compris entre 21 et 40 ans et afficher un message de bienvenue approprié.
 */
$sexe ='F';
$age =65 ;

if(($sexe=='F') AND ($age>21) AND( $age<40)){
    echo'Bienvenue';
    echo'</br>';
}else{
    echo'Aurevoir';
    echo'</br>';
}


/*
 * Exercice 6
Effectuer une suite de tirages de nombres aléatoires jusqu’à obtenir une suite composée d’un nombre pair suivi de deux nombres impairs.
 */
$compteur =0 ;
do
{
    $x=rand(1,100);
    $y=rand(1,100);
    $z=rand(1,100);
    $compteur++;
}
while( (($x>$y) OR ($x%2==1) ) OR   (($y>$z) OR ($y%2==0) )  OR ($z%2==0)    ) ;
echo $x.' , '.$y.' , '.$z ;
echo'</br>';











