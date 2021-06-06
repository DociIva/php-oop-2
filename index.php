<?php
// Inclusione dei file
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ .'/classes/Employee.php';
//require_once __DIR__ . '/classes/Exception.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP 2</title>
</head>
<body>   
   
    <header>
        <h1>OOP con ereditarietà con lo sconto </h1>
    </header>

    <main>
        <section>
            <h2>Utente : </h2>
            <?php // Istanza utente
                $user1 = new User('Riccardo', 'Verdi', 66);
            ?>
            <h2><?php echo $user1->getFullName(); ?></h2>
            <h3><?php echo $user1->getAge(); ?></h3>
        </section>

        <section>
            <h2>Cuccia : </h2>
            <?php // Istanza employee
                $employ1 = new Employee('Ferplast','Baita da Esterno ', 55);
            ?>
            <h2><?php echo $employ1->getFullName(); ?></h2>
            <h2><?php echo $employ1->getPrezzo(); ?></h2>

            <div>Cuccia con lo sconto : <?php echo $employ1->getSale(); ?>%</div>
        </section>
    </main>
    
</body>
</html>