<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Vliegtuigen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\VliegtuigenRepository")
 */
class Vliegtuigen
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
     * @ORM\Column(name="naam", type="string", length=50)
     */
    private $naam;

    /**
     * @ORM/OneToMany(targetEntity="Capaciteiten", mappedBy="vliegtuigen")
     * @ORM/OneToMany(targetEntity="Vluchten", mappedBy="vliegtuigen")
     */
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->capaciteiten = new ArrayCollection();
        $this->vliegtuigen = new ArrayCollection();
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
     * @return Vliegtuigen
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
        return $this->naam;
    }
}
