<?php 

class Vehicule
{

    // Attributs

    private $type;
    private $couleur;
    private $marque;
    public $kilometrage;

    // Méthodes

    // Constructeur
    public function __construct($type, $marque, $couleur = null, $kilometrage){
        $this->type = $type;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->kilometrage = $kilometrage;
    }

    public function __toString()
    {
        if ( $this->couleur != null ) {
            return "Ce véhicule est de type ". $this->type . " et de marque ". $this->marque . " et de couleur " . $this->couleur . ", elle a parcouru " . $this->kilometrage . " km !<br>";
        } else {
            return "Ce véhicule est de type ". $this->type . " et de marque ". $this->marque . ", elle a parcouru" . $this->kilometrage . " km !<br/>";
        }
    }

    //GETTERS

    public function getType() {
        return $this->type;
    }
    public function getMarque() {
        return $this->marque;
    }
    public function getCouleur() {
        return $this->couleur;
    }

    public function getKilometrage(){
        return $this->kilometrage;
    }

    //SETTERS

    public function setType($type){
        $this->type = $type;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function setKilometrage($kilometrage){
        $this->kilometrage = $kilometrage;
    }

    // Objectif 3 :

    public function faireUnTrajet($trajet){
        $kilometrage = $this->getKilometrage();
        $kilometrageTotal = $kilometrage + $trajet;
        $this->setKilometrage($kilometrageTotal);
        echo "le véhicule a avancé de " . $this->getKilometrage() ." km !";
    }

    public function faireMarcheArriere($trajet){
        $kilometrage = $this->getKilometrage();
        $kilometrageTotal = $kilometrage - $trajet;
        if ( $this->getKilometrage() < $trajet ){
            echo "la voiture ne peut pas reculer plus qu'elle n'a avancé<br/>";
        } else {
            $this->setKilometrage($kilometrageTotal);
            $distanceGarage = $kilometrageTotal - $trajet;
            echo "le véhicule a reculé de " . $trajet . " km !<br/>";
            echo "Il a donc parcouru ". $distanceGarage ." km depuis le garage";
        }
    }
    // - Démarrer
    // - Conduire
}