<?php
require_once __DIR__ . '/User.php';
/**
 * Employee Class
 * Classe Figlia Employee
 */
class Employee extends User {
    // Propietà
    private $level;

    // Costruttore
    function __construct($_name, $_lastName, $_age, $_level = 1) {
        parent::__construct($_name, $_lastName, $_age);
        
        $this->level = $_level;
    }
    // Metdoi
    protected function calcSconto() {
        if($this->age > 60) {
            $this->sale = 30;
        }elseif($this->level > 3){
            $this->sale = 20;
        }else {
            $this->sale = 0 ;
        }
    }
}
 