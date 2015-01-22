<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capaciteit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\CapaciteitenRepository")
 */
class Capaciteiten
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
     * @ORM\ManyToOne(targetEntity="Vliegtuigen", inversedBy="capaciteiten")
     * @ORM\JoinColumn(name="vliegtuigid", referencedColumnName="id")
     */
    protected $vliegtuigid;

    /**
     * @ORM\ManyToOne(targetEntity="Klasses", inversedBy="capaciteiten")
     * @ORM\JoinColumn(name="klasseid", referencedColumnName="id")
     */
    protected $klasseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="capaciteit", type="integer")
     */
    private $capaciteit;

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
     * Set capaciteit
     *
     * @param integer $capaciteit
     * @return Capaciteiten
     */
    public function setCapaciteit($capaciteit)
    {
        $this->capaciteit = $capaciteit;

        return $this;
    }

    /**
     * Get capaciteit
     *
     * @return integer 
     */
    public function getCapaciteit()
    {
        return $this->capaciteit;
    }

    /**
     * Set vliegtuigid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Vliegtuigen $vliegtuigid
     * @return Capaciteiten
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
     * Set klasseid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Klasses $klasseid
     * @return Capaciteiten
     */
    public function setKlasseid(\SCRUM\SwiftairBundle\Entity\Klasses $klasseid = null)
    {
        $this->klasseid = $klasseid;

        return $this;
    }

    /**
     * Get klasseid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Klasses 
     */
    public function getKlasseid()
    {
        return $this->klasseid;
    }
}
