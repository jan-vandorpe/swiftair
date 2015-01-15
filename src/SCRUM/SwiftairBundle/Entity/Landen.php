<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Landen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\LandenRepository")
 */
class Landen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="string", length=3)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255)
     */
    private $naam;

    /**
     * @ORM/OneToMany(targetEntity="Luchthavens", mappedBy="landen")
     */
    
    public function __construct() {
        $this->luchthavens = new ArrayCollection();
    }
    
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
     * Set landnaam
     *
     * @param string $landnaam
     * @return Landen
     */
    public function setLandnaam($landnaam)
    {
        $this->landnaam = $landnaam;

        return $this;
    }

    /**
     * Get landnaam
     *
     * @return string 
     */
    public function getLandnaam()
    {
        return $this->landnaam;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Landen
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set naam
     *
     * @param string $naam
     * @return Landen
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string 
     */
    public function getNaam()
    {
        return $this->naam;
    }
}
