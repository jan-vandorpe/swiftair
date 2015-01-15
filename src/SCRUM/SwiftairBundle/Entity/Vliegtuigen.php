<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vliegtuignaam
     *
     * @param string $vliegtuignaam
     * @return Vliegtuigen
     */
    public function setVliegtuignaam($vliegtuignaam)
    {
        $this->vliegtuignaam = $vliegtuignaam;

        return $this;
    }

    /**
     * Get vliegtuignaam
     *
     * @return string 
     */
    public function getVliegtuignaam()
    {
        return $this->vliegtuignaam;
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
}
