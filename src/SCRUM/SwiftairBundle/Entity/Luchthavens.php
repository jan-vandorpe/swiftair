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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set landid
     *
     * @param integer $landid
     * @return Luchthavens
     */
    public function setLandid($landid)
    {
        $this->landid = $landid;

        return $this;
    }

    /**
     * Get landid
     *
     * @return integer 
     */
    public function getLandid()
    {
        return $this->landid;
    }

    /**
     * Set luchthavennaam
     *
     * @param string $luchthavennaam
     * @return Luchthavens
     */
    public function setLuchthavennaam($luchthavennaam)
    {
        $this->luchthavennaam = $luchthavennaam;

        return $this;
    }

    /**
     * Get luchthavennaam
     *
     * @return string 
     */
    public function getLuchthavennaam()
    {
        return $this->luchthavennaam;
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
}
