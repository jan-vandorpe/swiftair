<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Credit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\CreditRepository")
 */
class Credit
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
     * @ORM\Column(name="Naam", type="string", length=255)
     */
    private $naam;

    /**
     * @ORM/OneToMany(targetEntity="Card", mappedBy="credit")
     */

    /**
     * Constructor
     */
    public function __construct() {
        $this->credit = new ArrayCollection();
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
     * @return Credit
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
