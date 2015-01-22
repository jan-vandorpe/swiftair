<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prijzen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\PrijzenRepository")
 */
class Prijzen
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
     * @ORM\ManyToOne(targetEntity="Klasses", inversedBy="prijzen")
     * @ORM\JoinColumn(name="klasseid", referencedColumnName="id")
     */
    protected $klasseid;

    /**
     * @ORM\ManyToOne(targetEntity="Vluchten", inversedBy="prijzen")
     * @ORM\JoinColumn(name="vluchtid", referencedColumnName="id")
     */
    protected $vluchtid;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="prijs", type="integer")
     */
    private $prijs;

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
     * Set prijs
     *
     * @param integer $prijs
     * @return Prijzen
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;

        return $this;
    }

    /**
     * Get prijs
     *
     * @return integer 
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * Set klasseid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Klasses $klasseid
     * @return Prijzen
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

    /**
     * Set vluchtid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Vluchten $vluchtid
     * @return Prijzen
     */
    public function setVluchtid(\SCRUM\SwiftairBundle\Entity\Vluchten $vluchtid = null)
    {
        $this->vluchtid = $vluchtid;

        return $this;
    }

    /**
     * Get vluchtid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Vluchten 
     */
    public function getVluchtid()
    {
        return $this->vluchtid;
    }
}
