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
    echo 'age: ' . $age . "<br>";

    // we create a variable $is_name_valid, and we set it equal to the value of the expression "strlen($name) > 3"
    // in this way, if $name contains more than 3 characters, then $is_name_valid contains the value true,
    // otherwise $is_name_valid contains the value false
    $is_name_valid = strlen($name) > 3;
    if($is_name_valid) {
        echo "The name's length is greater than 3";
    } else {
        echo "The name's length is not greater than 3";
    }

?>
