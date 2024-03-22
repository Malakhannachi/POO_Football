<?php

class Carriere {
    private Joueur $joueurs;
    private  Equipe $equipes;
    private  DateTime $dateJ;
    public function __construct (Joueur $joueurs, Equipe $equipes, string $dateJ){
        $this->joueurs = $joueurs;
        $this->equipes = $equipes;
        $this->dateJ= new DateTime($dateJ);
        $joueurs->getaddCarriere($this);
        $equipes->getaddCarriere($this);
    }

    public function getJoueurs(): Joueur
    {
        return $this->joueurs;
    }

    public function setJoueurs(Joueur $joueurs): self
    {
        $this->joueurs = $joueurs;

        return $this;
    }

    public function getEquipes(): Equipe
    {
        return $this->equipes;
    }

    public function setEquipes(Equipe $equipes): self
    {
        $this->equipes = $equipes;

        return $this;
    }

    public function getDateJ()
    {
        return $this->dateJ->format("Y");
    }

    public function setDateJ(DateTime $dateJ): self
    {
        $this->dateJ = $dateJ;

        return $this;
    }
}