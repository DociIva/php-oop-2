<?php
/**
 * USER CLASS
 * Classe padre
 */

class User {
    // Proprietà
    protected $name;
    protected $lastName;
    protected $age;
    protected $sale;
    protected $levelPremium;

    // Costruttore
    public function __construct($_name, $_lastName, $_age) {
        $this->name = $_name;
        $this->lastName = $_lastName;
        $this->age= $_age;
    }
    
    // Metodi
    public function getFullName() {
        return $this->name . ' ' .$this->lastName;
    }

    protected function calcSconto() {
        return $this->sale = $this->age > 40 ? 30 : 0;
    }

    public function getSale() {
      // Invocazione della funzione
      $this->calcSconto();

      return $this->sale;
    }
    public function getAge() {
        return $this->age;
    }
}
