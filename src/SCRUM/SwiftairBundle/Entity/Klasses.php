<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Klasse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\KlasseRepository")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set klassenaam
     *
     * @param string $klassenaam
     * @return Klasse
     */
    public function setKlassenaam($klassenaam)
    {
        $this->klassenaam = $klassenaam;

        return $this;
    }

    /**
     * Get klassenaam
     *
     * @return string 
     */
    public function getKlassenaam()
    {
        return $this->klassenaam;
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
}
