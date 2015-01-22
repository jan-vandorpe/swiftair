<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Klanten
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\KlantenRepository")
 */
class Klanten
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
     * @var string
     *
     * @ORM\Column(name="voornaam", type="string", length=255)
     */
    private $voornaam;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=255)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoon", type="string", length=50)
     */
    private $telefoon;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="kredietkaart", type="string", length=255)
     */
    private $kredietkaart;

    /**
     * @ORM/OneToMany(targetEntity="Bestellingen", mappedBy="klanten")
     */
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->bestellingen = new ArrayCollection();
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
     * @return Klanten
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
     * Set voornaam
     *
     * @param string $voornaam
     * @return Klanten
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;

        return $this;
    }

    /**
     * Get voornaam
     *
     * @return string 
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * Set adres
     *
     * @param string $adres
     * @return Klanten
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string 
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set telefoon
     *
     * @param string $telefoon
     * @return Klanten
     */
    public function setTelefoon($telefoon)
    {
        $this->telefoon = $telefoon;

        return $this;
    }

    /**
     * Get telefoon
     *
     * @return string 
     */
    public function getTelefoon()
    {
        return $this->telefoon;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Klanten
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set kredietkaart
     *
     * @param string $kredietkaart
     * @return Klanten
     */
    public function setKredietkaart($kredietkaart)
    {
        $this->kredietkaart = $kredietkaart;

        return $this;
    }

    /**
     * Get kredietkaart
     *
     * @return string 
     */
    public function getKredietkaart()
    {
        return $this->kredietkaart;
    }
    
    public function __toString() {
        return $this->naam;
    }
}
