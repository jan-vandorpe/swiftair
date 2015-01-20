<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use SCRUM\SwiftairBundle\Entity\Luchthavens;

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
     * @ORM\ManyToOne(targetEntity="Vliegtuigen", inversedBy="vluchten")
     * @ORM\JoinColumn(name="vliegtuigid", referencedColumnName="id")
     */
    protected $vliegtuigid;
    
    /**
     * @ORM\ManyToOne(targetEntity="Luchthavens", inversedBy="vluchten")
     * @ORM\JoinColumn(name="vertrekhavenid", referencedColumnName="id")
     */
    protected $vertrekhavenid;

    /**
     * @ORM\ManyToOne(targetEntity="Luchthavens", inversedBy="vluchten")
     * @ORM\JoinColumn(name="aankomsthavenid", referencedColumnName="id")
     */
    protected $aankomsthavenid;

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
     * @ORM/OneToMany(targetEntity="Prijzen", mappedBy="vluchten")
     * @ORM/OneToMany(targetEntity="Tickets", mappedBy="vluchten")
     */
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->prijzen = new ArrayCollection();
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

    /**
     * Set vliegtuigid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Vliegtuigen $vliegtuigid
     * @return Vluchten
     */
    public function setVliegtuigid(\SCRUM\SwiftairBundle\Entity\Vliegtuigen $vliegtuigid = null)
    {
        $this->vliegtuigid = $vliegtuigid;

        return $this;
    }

    /**
     * Get vliegtuigid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Vliegtuigen 
     */
    public function getVliegtuigid()
    {
        return $this->vliegtuigid;
    }

    /**
     * Set vertrekhavenid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Luchthavens $vertrekhavenid
     * @return Vluchten
     */
    public function setVertrekhavenid(\SCRUM\SwiftairBundle\Entity\Luchthavens $vertrekhavenid = null)
    {
        $this->vertrekhavenid = $vertrekhavenid;

        return $this;
    }

    /**
     * Get vertrekhavenid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Luchthavens 
     */
    public function getVertrekhavenid()
    {
        return $this->vertrekhavenid;
    }

    /**
     * Set aankomsthavenid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Luchthavens $aankomsthavenid
     * @return Vluchten
     */
    public function setAankomsthavenid(\SCRUM\SwiftairBundle\Entity\Luchthavens $aankomsthavenid = null)
    {
        $this->aankomsthavenid = $aankomsthavenid;

        return $this;
    }

    /**
     * Get aankomsthavenid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Luchthavens 
     */
    public function getAankomsthavenid()
    {
        return $this->aankomsthavenid;
    }
    
    public function __toString() {
        return $this->vertrekhavenid->getNaam() . " => " . $this->aankomsthavenid->getNaam();
    }
}
