<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vluchten
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\VluchtenRepository")
 */
class Vluchten
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
     * @ORM\Column(name="vertrekhavenid", type="integer")
     */
    private $vertrekhavenid;

    /**
     * @var integer
     *
     * @ORM\Column(name="aankomsthavenid", type="integer")
     */
    private $aankomsthavenid;

    /**
     * @var integer
     *
     * @ORM\Column(name="vliegtuigid", type="integer")
     */
    private $vliegtuigid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vertrekdatum", type="date")
     */
    private $vertrekdatum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aankomstdatum", type="date")
     */
    private $aankomstdatum;


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
     * Set vertrekhavenid
     *
     * @param integer $vertrekhavenid
     * @return Vluchten
     */
    public function setVertrekhavenid($vertrekhavenid)
    {
        $this->vertrekhavenid = $vertrekhavenid;

        return $this;
    }

    /**
     * Get vertrekhavenid
     *
     * @return integer 
     */
    public function getVertrekhavenid()
    {
        return $this->vertrekhavenid;
    }

    /**
     * Set aankomsthavenid
     *
     * @param integer $aankomsthavenid
     * @return Vluchten
     */
    public function setAankomsthavenid($aankomsthavenid)
    {
        $this->aankomsthavenid = $aankomsthavenid;

        return $this;
    }

    /**
     * Get aankomsthavenid
     *
     * @return integer 
     */
    public function getAankomsthavenid()
    {
        return $this->aankomsthavenid;
    }

    /**
     * Set vliegtuigid
     *
     * @param integer $vliegtuigid
     * @return Vluchten
     */
    public function setVliegtuigid($vliegtuigid)
    {
        $this->vliegtuigid = $vliegtuigid;

        return $this;
    }

    /**
     * Get vliegtuigid
     *
     * @return integer 
     */
    public function getVliegtuigid()
    {
        return $this->vliegtuigid;
    }

    /**
     * Set vertrekdatum
     *
     * @param \DateTime $vertrekdatum
     * @return Vluchten
     */
    public function setVertrekdatum($vertrekdatum)
    {
        $this->vertrekdatum = $vertrekdatum;

        return $this;
    }

    /**
     * Get vertrekdatum
     *
     * @return \DateTime 
     */
    public function getVertrekdatum()
    {
        return $this->vertrekdatum;
    }

    /**
     * Set aankomstdatum
     *
     * @param \DateTime $aankomstdatum
     * @return Vluchten
     */
    public function setAankomstdatum($aankomstdatum)
    {
        $this->aankomstdatum = $aankomstdatum;

        return $this;
    }

    /**
     * Get aankomstdatum
     *
     * @return \DateTime 
     */
    public function getAankomstdatum()
    {
        return $this->aankomstdatum;
    }
}
