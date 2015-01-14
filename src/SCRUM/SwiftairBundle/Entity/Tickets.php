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
     * @var integer
     *
     * @ORM\Column(name="bestellingsid", type="integer")
     */
    private $bestellingsid;

    /**
     * @var integer
     *
     * @ORM\Column(name="passagierid", type="integer")
     */
    private $passagierid;

    /**
     * @var integer
     *
     * @ORM\Column(name="vluchtid", type="integer")
     */
    private $vluchtid;

    /**
     * @var integer
     *
     * @ORM\Column(name="klasseid", type="integer")
     */
    private $klasseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="prijs", type="integer")
     */
    private $prijs;

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
     * Set bestellingsid
     *
     * @param integer $bestellingsid
     * @return Tickets
     */
    public function setBestellingsid($bestellingsid)
    {
        $this->bestellingsid = $bestellingsid;

        return $this;
    }

    /**
     * Get bestellingsid
     *
     * @return integer 
     */
    public function getBestellingsid()
    {
        return $this->bestellingsid;
    }

    /**
     * Set passagierid
     *
     * @param integer $passagierid
     * @return Tickets
     */
    public function setPassagierid($passagierid)
    {
        $this->passagierid = $passagierid;

        return $this;
    }

    /**
     * Get passagierid
     *
     * @return integer 
     */
    public function getPassagierid()
    {
        return $this->passagierid;
    }

    /**
     * Set vluchtid
     *
     * @param integer $vluchtid
     * @return Tickets
     */
    public function setVluchtid($vluchtid)
    {
        $this->vluchtid = $vluchtid;

        return $this;
    }

    /**
     * Get vluchtid
     *
     * @return integer 
     */
    public function getVluchtid()
    {
        return $this->vluchtid;
    }

    /**
     * Set klasseid
     *
     * @param integer $klasseid
     * @return Tickets
     */
    public function setKlasseid($klasseid)
    {
        $this->klasseid = $klasseid;

        return $this;
    }

    /**
     * Get klasseid
     *
     * @return integer 
     */
    public function getKlasseid()
    {
        return $this->klasseid;
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
}
