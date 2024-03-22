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

    public function getAfficherPay(){
        $resultat =$this;
        foreach ( $this->equipes as $equipe) {
            $resultat.= $equipe;
            
        } 
        return $resultat;
    }

    public function addEquipe (Equipe $equipe){
        $this->equipes[]=$equipe;
    }


    public function __toString()
    {
        return $this->nom;
    }
}