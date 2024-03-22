<?php

class Equipe {
    private string $nom;
    private Pay $pays;
    private array $carrieres;

    public function __construct ( string $nom, Pay $pays){
        $this->nom = $nom;
        $this->pays = $pays;
        $this->pays->addEquipe($this);
        $this->carrieres = [];
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
    public function getAfficherEquipe(){
        $resultat =$this;
        foreach ( $this->carrieres as $carriere) {
        $resultat.= $carriere->getJoueurs(). " (".$carriere->getDateJ().")";;
            
        }
        return $resultat;
    }

    public function __toString()
    {
        return $this->nom;
    }

}

