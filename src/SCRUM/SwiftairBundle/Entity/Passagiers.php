<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Passagiers
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\PassagiersRepository")
 */
class Passagiers
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
     * @ORM\Column(name="rijksregister", type="string", length=255)
     */
    private $rijksregister;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="geboortedatum", type="date")
     */
    private $geboortedatum;
    
    protected $bagage;
    protected $verzekering;

    /**
     * @ORM/OneToMany(targetEntity="Tickets", mappedBy="passagiers")
     */
    
    /**
     * Constructor
     */
    public function __construct() {
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
     * @return Passagiers
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
     * @return Passagiers
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
     * @return Passagiers
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
     * Set rijksregister
     *
     * @param string $rijksregister
     * @return Passagiers
     */
    public function setRijksregister($rijksregister)
    {
        $this->rijksregister = $rijksregister;

        return $this;
    }

    /**
     * Get rijksregister
     *
     * @return string 
     */
    public function getRijksregister()
    {
        return $this->rijksregister;
    }

    /**
     * Set geboortedatum
     *
     * @param \DateTime $geboortedatum
     * @return Passagiers
     */
    public function setGeboortedatum($geboortedatum)
    {
        $this->geboortedatum = $geboortedatum;

        return $this;
    }

    /**
     * Get geboortedatum
     *
     * @return \DateTime 
     */
    public function getGeboortedatum()
    {
        return $this->geboortedatum;
    }
    
    public function setBagage($bagage) {
        $this->bagage = $bagage;
        return $this;
    }
    
    public function getBagage() {
        return $this->bagage;
    }
    
    public function setVerzekering($verzekering) {
        $this->verzekering = $verzekering;
        return $this;
    }
    
    public function getVerzekering() {
        return $this->verzekering;
    }
}
