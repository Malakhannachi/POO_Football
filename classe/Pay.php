<?php

class Pay {
    private string $nom ;
    private array $joueurs;
    private array $equipes;

    public function __construct (string $nom){
        $this->nom = $nom;
        $this->joueurs = [];
        
        $this->equipes = [];
       
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

    public function getJoueurs(): array
    {
        return $this->joueurs;
    }

    public function setJoueurs(array $joueurs): self
    {
        $this->joueurs = $joueurs;

        return $this;
    }

    public function getEquipes(): array
    {
        return $this->equipes;
    }

    public function setEquipes(array $equipes): self
    {
        $this->equipes = $equipes;

        return $this;
    }

    public function addJoueurs (Joueur $joueur){
        $this->joueurs[]=$joueur;
    }
    public function addEquipe (Equipe $equipe){
        $this->equipes[]=$equipe;
    }

    public function getAfficherPay(){
        $resultat ="<div class='container pink'>"."<div class='pay'>"."<h2>$this</h2>"."<br></div> ";
        foreach ( $this->equipes as $equipe) {
            $resultat.= "<div class='nom'>".$equipe ." <br></div>";
            
        } 
        $resultat.="</div>" ;
        return $resultat;
    }

   


    public function __toString()
    {
        return $this->nom;
    }
}