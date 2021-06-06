<?php 
/**
 * User Class
 */

class Product {
    private $age;

    // Metodi
    public function setAge($_age) {
        if(is_numeric($_age) && $_age > 0 && $_age < 120 ) {
            $this->age = $_age;
        }elseif( !is_numeric($_age) ) {
            throw new Exception($_age . ' non è un numero. ');
        }else {
            throw new Exception($_age . ' non è un numero valido. ');
        }
    }
    public function getAge() {
        return $this->age;
    }
}

// Istanza User
$user1 = new Product();


try {
   // $user1->setAge('Pippo');
   // $user1->setAge(200);
    $user1->setAge(37);

    echo $user1->getAge();
} catch(Exception $e) {
    echo 'Eccezione: '. $e->getMessage();
}