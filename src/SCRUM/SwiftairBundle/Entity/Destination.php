<?php

namespace SCRUM\SwiftairBundle\Entity;

class Destination {

    protected $vertrek;
    protected $bestemming;

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
}
