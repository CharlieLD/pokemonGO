<?php

namespace PokemongoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * category
 */
class category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $acier;

    /**
     * @var string
     */
    private $bird;

    /**
     * @var string
     */
    private $combat;

    /**
     * @var string
     */
    private $dragon;

    /**
     * @var string
     */
    private $eau;

    /**
     * @var string
     */
    private $feu;

    /**
     * @var string
     */
    private $glace;

    /**
     * @var string
     */
    private $insecte;

    /**
     * @var string
     */
    private $normal;

    /**
     * @var string
     */
    private $plante;

    /**
     * @var string
     */
    private $poison;

    /**
     * @var string
     */
    private $psy;

    /**
     * @var string
     */
    private $roche;

    /**
     * @var string
     */
    private $sol;

    /**
     * @var string
     */
    private $spectre;

    /**
     * @var string
     */
    private $tenebres;

    /**
     * @var string
     */
    private $vol;

    /**
     * @var string
     */
    private $electrik;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set acier
     *
     * @param string $acier
     * @return category
     */
    public function setAcier($acier)
    {
        $this->acier = $acier;

        return $this;
    }

    /**
     * Get acier
     *
     * @return string 
     */
    public function getAcier()
    {
        return $this->acier;
    }

    /**
     * Set bird
     *
     * @param string $bird
     * @return category
     */
    public function setBird($bird)
    {
        $this->bird = $bird;

        return $this;
    }

    /**
     * Get bird
     *
     * @return string 
     */
    public function getBird()
    {
        return $this->bird;
    }

    /**
     * Set combat
     *
     * @param string $combat
     * @return category
     */
    public function setCombat($combat)
    {
        $this->combat = $combat;

        return $this;
    }

    /**
     * Get combat
     *
     * @return string 
     */
    public function getCombat()
    {
        return $this->combat;
    }

    /**
     * Set dragon
     *
     * @param string $dragon
     * @return category
     */
    public function setDragon($dragon)
    {
        $this->dragon = $dragon;

        return $this;
    }

    /**
     * Get dragon
     *
     * @return string 
     */
    public function getDragon()
    {
        return $this->dragon;
    }

    /**
     * Set eau
     *
     * @param string $eau
     * @return category
     */
    public function setEau($eau)
    {
        $this->eau = $eau;

        return $this;
    }

    /**
     * Get eau
     *
     * @return string 
     */
    public function getEau()
    {
        return $this->eau;
    }

    /**
     * Set feu
     *
     * @param string $feu
     * @return category
     */
    public function setFeu($feu)
    {
        $this->feu = $feu;

        return $this;
    }

    /**
     * Get feu
     *
     * @return string 
     */
    public function getFeu()
    {
        return $this->feu;
    }

    /**
     * Set glace
     *
     * @param string $glace
     * @return category
     */
    public function setGlace($glace)
    {
        $this->glace = $glace;

        return $this;
    }

    /**
     * Get glace
     *
     * @return string 
     */
    public function getGlace()
    {
        return $this->glace;
    }

    /**
     * Set insecte
     *
     * @param string $insecte
     * @return category
     */
    public function setInsecte($insecte)
    {
        $this->insecte = $insecte;

        return $this;
    }

    /**
     * Get insecte
     *
     * @return string 
     */
    public function getInsecte()
    {
        return $this->insecte;
    }

    /**
     * Set normal
     *
     * @param string $normal
     * @return category
     */
    public function setNormal($normal)
    {
        $this->normal = $normal;

        return $this;
    }

    /**
     * Get normal
     *
     * @return string 
     */
    public function getNormal()
    {
        return $this->normal;
    }

    /**
     * Set plante
     *
     * @param string $plante
     * @return category
     */
    public function setPlante($plante)
    {
        $this->plante = $plante;

        return $this;
    }

    /**
     * Get plante
     *
     * @return string 
     */
    public function getPlante()
    {
        return $this->plante;
    }

    /**
     * Set poison
     *
     * @param string $poison
     * @return category
     */
    public function setPoison($poison)
    {
        $this->poison = $poison;

        return $this;
    }

    /**
     * Get poison
     *
     * @return string 
     */
    public function getPoison()
    {
        return $this->poison;
    }

    /**
     * Set psy
     *
     * @param string $psy
     * @return category
     */
    public function setPsy($psy)
    {
        $this->psy = $psy;

        return $this;
    }

    /**
     * Get psy
     *
     * @return string 
     */
    public function getPsy()
    {
        return $this->psy;
    }

    /**
     * Set roche
     *
     * @param string $roche
     * @return category
     */
    public function setRoche($roche)
    {
        $this->roche = $roche;

        return $this;
    }

    /**
     * Get roche
     *
     * @return string 
     */
    public function getRoche()
    {
        return $this->roche;
    }

    /**
     * Set sol
     *
     * @param string $sol
     * @return category
     */
    public function setSol($sol)
    {
        $this->sol = $sol;

        return $this;
    }

    /**
     * Get sol
     *
     * @return string 
     */
    public function getSol()
    {
        return $this->sol;
    }

    /**
     * Set spectre
     *
     * @param string $spectre
     * @return category
     */
    public function setSpectre($spectre)
    {
        $this->spectre = $spectre;

        return $this;
    }

    /**
     * Get spectre
     *
     * @return string 
     */
    public function getSpectre()
    {
        return $this->spectre;
    }

    /**
     * Set tenebres
     *
     * @param string $tenebres
     * @return category
     */
    public function setTenebres($tenebres)
    {
        $this->tenebres = $tenebres;

        return $this;
    }

    /**
     * Get tenebres
     *
     * @return string 
     */
    public function getTenebres()
    {
        return $this->tenebres;
    }

    /**
     * Set vol
     *
     * @param string $vol
     * @return category
     */
    public function setVol($vol)
    {
        $this->vol = $vol;

        return $this;
    }

    /**
     * Get vol
     *
     * @return string 
     */
    public function getVol()
    {
        return $this->vol;
    }

    /**
     * Set electrik
     *
     * @param string $electrik
     * @return category
     */
    public function setElectrik($electrik)
    {
        $this->electrik = $electrik;

        return $this;
    }

    /**
     * Get electrik
     *
     * @return string 
     */
    public function getElectrik()
    {
        return $this->electrik;
    }
}
