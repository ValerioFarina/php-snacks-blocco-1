<?php
    // Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
    // 1. name sia più lungo di 3 caratteri,
    // 2. mail contenga un punto e una chiocciola
    // 3. age sia un numero.
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


    // we get the name, the email and the age
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    echo 'name: ' . $name . "<br>";
    echo 'email: ' . $email . "<br>";
    echo 'age: ' . $age;
?>
