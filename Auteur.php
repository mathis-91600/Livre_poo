<?php

class Auteur
{

private $nom;
private $prenom;
private $sexe;
private $dateNaissance;

// constructor

public function __construct($nom, $prenom, $sexe, $dateNaissance) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->sexe = $sexe;
    $this->dateNaissance = $dateNaissance;
}

public function __toString () {
    if ( $this->getSexe() === "homme" ){
        return "Cet auteur s'appelle ". $this->getNom(). " " .$this->getPrenom() . " c'est un ". $this->getSexe() ." et ça date de naissance est ". $this->getDateNaissance(). " .";
    } else {
        return "Cet auteur s'appelle ". $this->getNom(). " " .$this->getPrenom() . " c'est une ". $this->getSexe() ." et ça date de naissance est ". $this->getDateNaissance(). " .";
    }
}

// Getters

public function getNom () {
    return $this->nom;
}
public function getPrenom () {
    return $this->prenom;
}
public function getSexe () {
    return $this->sexe;
}
public function getDateNaissance () {
    return $this->dateNaissance;
}

// Setters

public function setNom ($nom) {
    $this->nom = $nom;
}
public function setPrenom ($prenom) {
    $this->prenom = $prenom;
}
public function setSexe ($sexe) {
    $this->sexe = $sexe;
}
public function setDateNaissance ($dateNaissance) {
    $this->dateNaissance = $dateNaissance;
}
}