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

    // we check whether is_login_valid, applied to $name, $email and $age, returns the value true
    if (is_login_valid($name, $email, $age)) {
        // if it returns the value true, we print "Accesso riuscito"
        echo "Accesso riuscito";
    } else {
        // otherwise, we print "Accesso negato"
        echo "Accesso negato";
    }

    // **************************** my functions ****************************

    // this function checks whether a string representing a name contains more than three characters
    function is_name_valid($name) {
        return strlen($name) > 3;
    }

    // this function checks whether a string representing an email contains
    // both the character "." and the character "@"
    function is_email_valid($email) {
        return strpos($email, '.') !== false && strpos($email, '@') !== false;
    }

    // this function checks whether a value representing the age of a user is an integer greater than 0
    // (or a string corresponding to an integer greater than 0)
    function is_age_valid($age) {
        return (is_int($age) || (string)(int)$age === $age) && (int)$age > 0;
    }

    // this function checks whether is_name_valid, is_email_valid and is_age_valid all return the value true
    function is_login_valid($name, $email, $age) {
        return is_name_valid($name) && is_email_valid($email) && is_age_valid($age);
    }

?>
