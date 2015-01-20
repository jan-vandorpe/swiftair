<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\ManyToOne(targetEntity="Klanten", inversedBy="bestellingen")
     * @ORM\JoinColumn(name="klantid", referencedColumnName="id")
     */
    protected $klantid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="date")
     */
    private $datum;

    /**
     * @ORM/OneToMany(targetEntity="Tickets", mappedBy="bestellingen")
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

    /**
     * Set klantid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Klanten $klantid
     * @return Bestellingen
     */
    public function setKlantid(\SCRUM\SwiftairBundle\Entity\Klanten $klantid = null)
    {
        $this->klantid = $klantid;

        return $this;
    }

    /**
     * Get klantid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Klanten 
     */
    public function getKlantid()
    {
        return $this->klantid;
    }
}
