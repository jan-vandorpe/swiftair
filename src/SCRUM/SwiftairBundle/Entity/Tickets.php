<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\TicketsRepository")
 */
class Tickets
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
     * @ORM\ManyToOne(targetEntity="Bestellingen", inversedBy="tickets")
     * @ORM\JoinColumn(name="bestellingid", referencedColumnName="id")
     */
    protected $bestellingid;

    /**
     * @ORM\ManyToOne(targetEntity="Passagiers", inversedBy="tickets")
     * @ORM\JoinColumn(name="passagierid", referencedColumnName="id")
     */
    protected $passagierid;

    /**
     * @ORM\ManyToOne(targetEntity="Vluchten", inversedBy="tickets")
     * @ORM\JoinColumn(name="vluchtid", referencedColumnName="id")
     */
    protected $vluchtid;

    /**
     * @ORM\ManyToOne(targetEntity="Klasses", inversedBy="tickets")
     * @ORM\JoinColumn(name="klasseid", referencedColumnName="id")
     */
    protected $klasseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="prijs", type="integer")
     */
    private $prijs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bagage", type="boolean")
     */
    private $bagage;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="verzekering", type="boolean")
     */
    private $verzekering;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="annulatie", type="boolean")
     */
    private $annulatie;

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
     * @return Tickets
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
     * Set bagage
     *
     * @param boolean $bagage
     * @return Tickets
     */
    public function setBagage($bagage)
    {
        $this->bagage = $bagage;

        return $this;
    }

    /**
     * Get bagage
     *
     * @return boolean 
     */
    public function getBagage()
    {
        return $this->bagage;
    }

    /**
     * Set verzekering
     *
     * @param boolean $verzekering
     * @return Tickets
     */
    public function setVerzekering($verzekering)
    {
        $this->verzekering = $verzekering;

        return $this;
    }

    /**
     * Get verzekering
     *
     * @return boolean 
     */
    public function getVerzekering()
    {
        return $this->verzekering;
    }

    /**
     * Set annulatie
     *
     * @param boolean $annulatie
     * @return Tickets
     */
    public function setAnnulatie($annulatie)
    {
        $this->annulatie = $annulatie;

        return $this;
    }

    /**
     * Get annulatie
     *
     * @return boolean 
     */
    public function getAnnulatie()
    {
        return $this->annulatie;
    }

    /**
     * Set bestellingid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Bestellingen $bestellingid
     * @return Tickets
     */
    public function setBestellingid(\SCRUM\SwiftairBundle\Entity\Bestellingen $bestellingid = null)
    {
        $this->bestellingid = $bestellingid;

        return $this;
    }

    /**
     * Get bestellingid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Bestellingen 
     */
    public function getBestellingid()
    {
        return $this->bestellingid;
    }

    /**
     * Set passagierid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Passagiers $passagierid
     * @return Tickets
     */
    public function setPassagierid(\SCRUM\SwiftairBundle\Entity\Passagiers $passagierid = null)
    {
        $this->passagierid = $passagierid;

        return $this;
    }

    /**
     * Get passagierid
     *
     * @return \SCRUM\SwiftairBundle\Entity\Passagiers 
     */
    public function getPassagierid()
    {
        return $this->passagierid;
    }

    /**
     * Set vluchtid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Vluchten $vluchtid
     * @return Tickets
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

    /**
     * Set klasseid
     *
     * @param \SCRUM\SwiftairBundle\Entity\Klasses $klasseid
     * @return Tickets
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
