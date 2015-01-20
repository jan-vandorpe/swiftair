<?php

namespace SCRUM\SwiftairBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Booking {
    protected $id;
    protected $klanten;
    protected $passagiers;
    
    public function __construct() {
        $this->passagiers = new ArrayCollection();
        $this->klanten = new ArrayCollection();
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getKlanten() {
        return $this->klanten;
    }
    
    public function getPassagiers() {
        return $this->passagiers;
    }
}

