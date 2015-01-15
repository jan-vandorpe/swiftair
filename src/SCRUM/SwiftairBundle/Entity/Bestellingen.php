<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bestellingen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\BestellingenRepository")
 */
class Bestellingen
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
     * @var integer
     *
     * @ORM\Column(name="klantid", type="integer")
     */
    private $klantid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sdatum", type="date")
     */
    private $datum;


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
     * Set klantid
     *
     * @param integer $klantid
     * @return Bestellingen
     */
    public function setKlantid($klantid)
    {
        $this->klantid = $klantid;

        return $this;
    }

    /**
     * Get klantid
     *
     * @return integer 
     */
    public function getKlantid()
    {
        return $this->klantid;
    }

    /**
     * Set bestellingsdatum
     *
     * @param \DateTime $bestellingsdatum
     * @return Bestellingen
     */
    public function setBestellingsdatum($bestellingsdatum)
    {
        $this->bestellingsdatum = $bestellingsdatum;

        return $this;
    }

    /**
     * Get bestellingsdatum
     *
     * @return \DateTime 
     */
    public function getBestellingsdatum()
    {
        return $this->bestellingsdatum;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     * @return Bestellingen
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime 
     */
    public function getDatum()
    {
        return $this->datum;
    }
}
