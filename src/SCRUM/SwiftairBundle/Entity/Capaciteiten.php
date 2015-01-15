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
     * @var integer
     *
     * @ORM\Column(name="klasseid", type="integer")
     */
    private $klasseid;

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
     * Set klasseid
     *
     * @param integer $klasseid
     * @return Capaciteit
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
     * Set capaciteit
     *
     * @param integer $capaciteit
     * @return Capaciteit
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
}
