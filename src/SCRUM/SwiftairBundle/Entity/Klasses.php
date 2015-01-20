<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Klasse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\KlassesRepository")
 */
class Klasses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255)
     */
    private $naam;

    /**
     * @ORM/OneToMany(targetEntity="Capaciteiten", mappedBy="klasses")
     * @ORM/OneToMany(targetEntity="Prijzen", mappedBy="klasses")
     * @ORM/OneToMany(targetEntity="Tickets", mappedBy="klasses")
     */
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->capaciteiten = new ArrayCollection();
        $this->prijzen = new ArrayCollection();
        $this->tickets = new ArrayCollection();
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
     * Set naam
     *
     * @param string $naam
     * @return Klasses
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
    
    public function __toString() {
        if ($this->naam == "") {
            return "Vliegtuig";
        }
        else {
            return $this->naam;
        }
    }
}
