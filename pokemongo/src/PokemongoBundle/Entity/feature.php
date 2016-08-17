<?php

namespace PokemongoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * feature
 */
class feature
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var string
     */
    private $dateTaken;

    /**
     * @var int
     */
    private $pointLife;

    /**
     * @var string
     */
    private $pointCombat;

    /**
     * @var int
     */
    private $xp;


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
     * Set name
     *
     * @param string $name
     * @return feature
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return feature
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set dateTaken
     *
     * @param string $dateTaken
     * @return feature
     */
    public function setDateTaken($dateTaken)
    {
        $this->dateTaken = $dateTaken;

        return $this;
    }

    /**
     * Get dateTaken
     *
     * @return string 
     */
    public function getDateTaken()
    {
        return $this->dateTaken;
    }

    /**
     * Set pointLife
     *
     * @param integer $pointLife
     * @return feature
     */
    public function setPointLife($pointLife)
    {
        $this->pointLife = $pointLife;

        return $this;
    }

    /**
     * Get pointLife
     *
     * @return integer 
     */
    public function getPointLife()
    {
        return $this->pointLife;
    }

    /**
     * Set pointCombat
     *
     * @param string $pointCombat
     * @return feature
     */
    public function setPointCombat($pointCombat)
    {
        $this->pointCombat = $pointCombat;

        return $this;
    }

    /**
     * Get pointCombat
     *
     * @return string 
     */
    public function getPointCombat()
    {
        return $this->pointCombat;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     * @return feature
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return integer 
     */
    public function getXp()
    {
        return $this->xp;
    }
}
