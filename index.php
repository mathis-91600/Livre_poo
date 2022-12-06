<?php

include("Vehicule.php");
include("Auteur.php");

?>
    <h1 style="text-align: center">Véhicule :</h1>
<?php

$gtr34 = new Vehicule("voiture", "Nissan", "grise", 0);
echo $gtr34;
$gtr34->faireUnTrajet(100);
$gtr34->faireMarcheArriere(30);

// Pour cet exercice , on souhaite afficher la bibliographie d'un auteur.

// Partie 1 :

// Un auteur a un nom, un prénom, un sexe (binaire pour cet exercice), une date de naissance et des livres à son actif.

?>
    <h1 style="text-align: center">Auteur :</h1>
<?php

$auteur1 = new Auteur("toto", "test", "homme", "12/12/2001");
echo "<br/><br/>". $auteur1;
$auteur2 = new Auteur("tata", "teste", "femme", "12/12/2001");
echo "<br/><br/>". $auteur2;


// Un livre est composé d'un titre, d'une année de parution, d'un nombre de pages et d'un prix.



// Créer les classes et les attributs permettant de manipuler de tels objets.



// Ajouter les getters et setters à ces deux classes (manuellement !).