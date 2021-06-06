<?php
require_once __DIR__ . '/User.php';
/**
 * Employee Class
 * Classe Figlia Employee
 */
class Employee extends User {
    // Propietà

    protected $prezzo;
    
    
      
    // Costruttore
    public function __construct($_name, $_lastName, $_age, $_prezzo = '85$')  {
        parent::__construct($_name, $_lastName, $_age, $_prezzo, );
        
        $this->prezzo = $_prezzo;
        
    }

    // Metodi
    public function getPrezzo() {
        return $this->prezzo; 
    }

}
 