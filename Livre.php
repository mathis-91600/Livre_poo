<?php

class Livre
{

    private $titre;
    private $anneeParution;
    private $pages;
    private $prix;

    public function __construct ($titre, $anneeParution, $pages, $prix) {
        $this->titre = $titre;
        $this->anneeParution = $anneeParution;
        $this->pages = $pages;
        $this->prix = $prix;
    }

    public function __string () {
        return "Titre du livre : ". $this->getTitre ."<br/>"
    }

    public function getTitre () {
        return $this->titre;
    }
    public function getAnneeParution () {
        return $this->anneeParution;
    }
    public function getPages () {
        return $this->pages;
    }
    public function getPrix () {
        return $this->prix;
    }
}