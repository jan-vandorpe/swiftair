<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="klantnaam", type="string", length=255)
     */
    private $klantnaam;

    /**
     * @var string
     *
     * @ORM\Column(name="klantvoornaam", type="string", length=255)
     */
    private $klantvoornaam;

    /**
     * @var string
     *
     * @ORM\Column(name="klantadres", type="string", length=255)
     */
    private $klantadres;

    /**
     * @var string
     *
     * @ORM\Column(name="klanttelefoon", type="string", length=50)
     */
    private $klanttelefoon;

    /**
     * @var string
     *
     * @ORM\Column(name="klantemail", type="string", length=255)
     */
    private $klantemail;


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
     * Set klantnaam
     *
     * @param string $klantnaam
     * @return Klanten
     */
    public function setKlantnaam($klantnaam)
    {
        $this->klantnaam = $klantnaam;

        return $this;
    }

    /**
     * Get klantnaam
     *
     * @return string 
     */
    public function getKlantnaam()
    {
        return $this->klantnaam;
    }

    /**
     * Set klantvoornaam
     *
     * @param string $klantvoornaam
     * @return Klanten
     */
    public function setKlantvoornaam($klantvoornaam)
    {
        $this->klantvoornaam = $klantvoornaam;

        return $this;
    }

    /**
     * Get klantvoornaam
     *
     * @return string 
     */
    public function getKlantvoornaam()
    {
        return $this->klantvoornaam;
    }

    /**
     * Set klantadres
     *
     * @param string $klantadres
     * @return Klanten
     */
    public function setKlantadres($klantadres)
    {
        $this->klantadres = $klantadres;

        return $this;
    }

    /**
     * Get klantadres
     *
     * @return string 
     */
    public function getKlantadres()
    {
        return $this->klantadres;
    }

    /**
     * Set klanttelefoon
     *
     * @param string $klanttelefoon
     * @return Klanten
     */
    public function setKlanttelefoon($klanttelefoon)
    {
        $this->klanttelefoon = $klanttelefoon;

        return $this;
    }

    /**
     * Get klanttelefoon
     *
     * @return string 
     */
    public function getKlanttelefoon()
    {
        return $this->klanttelefoon;
    }

    /**
     * Set klantemail
     *
     * @param string $klantemail
     * @return Klanten
     */
    public function setKlantemail($klantemail)
    {
        $this->klantemail = $klantemail;

        return $this;
    }

    /**
     * Get klantemail
     *
     * @return string 
     */
    public function getKlantemail()
    {
        return $this->klantemail;
    }
}
