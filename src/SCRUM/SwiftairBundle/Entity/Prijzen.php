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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set klasseid
     *
     * @param integer $klasseid
     * @return Prijzen
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
}
