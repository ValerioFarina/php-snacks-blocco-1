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

    // we create a variable $is_email_valid, and we set it equal to the value of the expression
    // "strpos($email, '.') !== false && strpos($email, '@') !== false"
    // in this way, $is_eamil_valid contains the value true if and only if
    // $email contains both the character "." and the character "@"
    $is_email_valid = strpos($email, '.') !== false && strpos($email, '@') !== false;

    // we create a variable $is_age_valid, and we set it equal to the value returned by is_numeric($age)
    // in this way, if $age is a number or a numeric string, then $is_age_valid is true
    // otherwise, $is_age_valid is false
    $is_age_valid = is_numeric($age);

    // we check whether $is_name_valid, $is_email_valid and $is_age_valid are all true
    if ($is_name_valid && $is_email_valid && $is_age_valid) {
        // if they are all true, we print "Accesso riuscito"
        echo "Accesso riuscito";
    } else {
        // otherwise, we print "Accesso negato"
        echo "Accesso negato";
    }

?>
