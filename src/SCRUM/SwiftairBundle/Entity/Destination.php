<?php

namespace SCRUM\SwiftairBundle\Entity;

class Destination {

    protected $vertrek;
    protected $bestemming;
    protected $klasse;
    protected $aantal;
    
    public function getVertrek() {
        return $this->vertrek;
    }

    public function setVertrek($vertrek) {
        return $this->vertrek = $vertrek;
    }

    public function getBestemming() {
        return $this->bestemming;
    }

    public function setBestemming($bestemming) {
        return $this->bestemming = $bestemming;
    }
    
    public function getKlasse() {
        return $this->klasse;
    }

    public function setKlasse($klasse) {
        return $this->klasse = $klasse;
    }
    
    public function getAantal() {
        return $this->aantal;
    }

    public function setAantal($aantal) {
        return $this->aantal = $aantal;
    }
}
