<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Luchthavens
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\LuchthavensRepository")
 */
class Luchthavens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="string", length=3)
     * @ORM\Id
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Landen", inversedBy="luchthavens")
     * @ORM\JoinColumn(name="landid", referencedColumnName="id")
     */
    protected $landid;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255)
     */
    private $naam;

    /**
     * @ORM/OneToMany(targetEntity="Vluchten", mappedBy="vertrekluchthavens")
     * @ORM/OneToMany(targetEntity="Vluchten", mappedBy="aankomstluchthavens")
     */
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->vertrekluchthavens = new ArrayCollection();
        $this->aankomstluchthavens = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Luchthavens
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set naam
     *
     * @param string $naam
     * @return Luchthavens
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

    /**
     * Set landid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Landen $landid
     * @return Luchthavens
     */
    public function setLandid(\SCRUM\SwiftairBundle\Entity\Landen $landid = null)
    {
        $this->landid = $landid;

        return $this;
    }

    /**
     * Get landid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Landen 
     */
    public function getLandid()
    {
        return $this->landid;
    }
}
