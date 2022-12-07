<?php
class Lutin extends monstre{
    private $musculation;
    private $lachete;
    private $inteligence;
    private $arme;
    private $endurance;
    private $sante;
    /**
     * Get the value of musculation
     */ 
    public function getMusculation()
    {
        return $this->musculation;
    }

    /**
     * Set the value of musculation
     *
     * @return  self
     */ 
    public function setMusculation($musculation)
    {
        $this->musculation = $musculation;

        return $this;
    }

    /**
     * Get the value of lachete
     */ 
    public function getLachete()
    {
        return $this->lachete;
    }

    /**
     * Set the value of lachete
     *
     * @return  self
     */ 
    public function setLachete($lachete)
    {
        $this->lachete = $lachete;

        return $this;
    }

    /**
     * Get the value of inteligence
     */ 
    public function getInteligence()
    {
        return $this->inteligence;
    }

    /**
     * Set the value of inteligence
     *
     * @return  self
     */ 
    public function setInteligence($inteligence)
    {
        $this->inteligence = $inteligence;

        return $this;
    }


    /**
     * Get the value of endurance
     */ 
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * Set the value of endurance
     *
     * @return  self
     */ 
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;

        return $this;
    }

    /**
     * Get the value of sante
     */ 
    public function getSante()
    {
        return $this->sante;
    }

    /**
     * Set the value of sante
     *
     * @return  self
     */ 
    public function setSante($sante)
    {
        $this->sante = $sante;

        return $this;
    }

    /**
     * Get the value of arme
     */ 
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * Set the value of arme
     *
     * @return  self
     */ 
    public function setArme($arme)
    {
        $this->arme = $arme;

        return $this;
    }
}
?>