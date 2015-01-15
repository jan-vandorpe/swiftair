<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passagiers
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SCRUM\SwiftairBundle\Entity\PassagiersRepository")
 */
class Passagiers
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
     * @var string
     *
     * @ORM\Column(name="passagiernaam", type="string", length=255)
     */
    private $passagiernaam;

    /**
     * @var string
     *
     * @ORM\Column(name="passagiervoornaam", type="string", length=255)
     */
    private $passagiervoornaam;

    /**
     * @var integer
     *
     * @ORM\Column(name="passagierleeftijd", type="integer")
     */
    private $passagierleeftijd;

    /**
     * @var string
     *
     * @ORM\Column(name="passagieradres", type="string", length=255)
     */
    private $passagieradres;


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
     * Set passagiernaam
     *
     * @param string $passagiernaam
     * @return Passagiers
     */
    public function setPassagiernaam($passagiernaam)
    {
        $this->passagiernaam = $passagiernaam;

        return $this;
    }

    /**
     * Get passagiernaam
     *
     * @return string 
     */
    public function getPassagiernaam()
    {
        return $this->passagiernaam;
    }

    /**
     * Set passagiervoornaam
     *
     * @param string $passagiervoornaam
     * @return Passagiers
     */
    public function setPassagiervoornaam($passagiervoornaam)
    {
        $this->passagiervoornaam = $passagiervoornaam;

        return $this;
    }

    /**
     * Get passagiervoornaam
     *
     * @return string 
     */
    public function getPassagiervoornaam()
    {
        return $this->passagiervoornaam;
    }

    /**
     * Set passagierleeftijd
     *
     * @param integer $passagierleeftijd
     * @return Passagiers
     */
    public function setPassagierleeftijd($passagierleeftijd)
    {
        $this->passagierleeftijd = $passagierleeftijd;

        return $this;
    }

    /**
     * Get passagierleeftijd
     *
     * @return integer 
     */
    public function getPassagierleeftijd()
    {
        return $this->passagierleeftijd;
    }

    /**
     * Set passagieradres
     *
     * @param string $passagieradres
     * @return Passagiers
     */
    public function setPassagieradres($passagieradres)
    {
        $this->passagieradres = $passagieradres;

        return $this;
    }

    /**
     * Get passagieradres
     *
     * @return string 
     */
    public function getPassagieradres()
    {
        return $this->passagieradres;
    }
}
