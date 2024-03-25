<?php

class Joueur {
    private string $prenom;
    private string $nom ;
    private DateTime $dateN;
    private Pay $pays;
    private array $carrieres;

    public function __construct (string $prenom, string $nom, string $dateN, Pay $pays){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateN = new DateTime($dateN);
        $this->pays = $pays;
        $this->carrieres = [];

    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateN(): DateTime
    {
        return $this->dateN;
    }

    public function setDateN(DateTime $dateN): self
    {
        $this->dateN = $dateN;

        return $this;
    }

    public function getPays(): Pay
    {
        return $this->pays;
    }

    public function setPays(Pay $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
    
    public function getCarrieres(): array
    {
        return $this->carrieres;
    }

    public function setCarrieres(array $carrieres): self
    {
        $this->carrieres = $carrieres;

        return $this;
    }

    public function getaddCarriere( Carriere $carriere){
        $this->carrieres[]=$carriere;
        
    }

    public function getAfficherJ(){
        $resultat ="<div class='container vert'>"."<div class='joueur'>"."<h2>$this</h2>"."<br></div>";
        $resultat .="<div class='affichage'>".$this->getPays()." ".$this->getAge()." "."ans"."<br></div>";
        foreach ( $this->carrieres as $carriere) {
            $resultat.= "<div class='aff2'>". $carriere->getEquipes(). ' ('.$carriere->getDateJ().')'." <br></div>";
            
        }

        $resultat.="</div>";
        return $resultat;
    }


    public function getAge(){
        $newDate = new DateTime("22-03-2024");
        $age = $this->dateN->diff($newDate);
        return $age->y;
    }

    public function __toString()
    {
        return $this->nom." ".$this->prenom;
    }


    
}