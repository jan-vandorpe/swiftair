<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="rijksregister", type="string", length=255)
     */
    private $rijksregister;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="geboortedatum", type="date")
     */
    private $geboortedatum;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=255)
     */
    private $adres;
   
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
     * Set passagiernaam
     *
     * @param string $passagiernaam
     * @return Passagiers
     */
    public function setPassagiernaam($passagiernaam)
    {
        $this->passagiernaam = $passagiernaam;

        return $this;
    }

    /**
     * Get passagiernaam
     *
     * @return string 
     */
    public function getPassagiernaam()
    {
        return $this->passagiernaam;
    }

    /**
     * Set passagiervoornaam
     *
     * @param string $passagiervoornaam
     * @return Passagiers
     */
    public function setPassagiervoornaam($passagiervoornaam)
    {
        $this->passagiervoornaam = $passagiervoornaam;

        return $this;
    }

    /**
     * Get passagiervoornaam
     *
     * @return string 
     */
    public function getPassagiervoornaam()
    {
        return $this->passagiervoornaam;
    }

    /**
     * Set passagierleeftijd
     *
     * @param integer $passagierleeftijd
     * @return Passagiers
     */
    public function setPassagierleeftijd($passagierleeftijd)
    {
        $this->passagierleeftijd = $passagierleeftijd;

        return $this;
    }

    /**
     * Get passagierleeftijd
     *
     * @return integer 
     */
    public function getPassagierleeftijd()
    {
        return $this->passagierleeftijd;
    }

    /**
     * Set passagieradres
     *
     * @param string $passagieradres
     * @return Passagiers
     */
    public function setPassagieradres($passagieradres)
    {
        $this->passagieradres = $passagieradres;

        return $this;
    }

    /**
     * Get passagieradres
     *
     * @return string 
     */
    public function getPassagieradres()
    {
        return $this->passagieradres;
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

    /**
     * Set bagage
     *
     * @param integer $bagage
     * @return Passagiers
     */
    public function setBagage($bagage)
    {
        $this->bagage = $bagage;

        return $this;
    }

    /**
     * Get bagage
     *
     * @return integer 
     */
    public function getBagage()
    {
        return $this->bagage;
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
}
