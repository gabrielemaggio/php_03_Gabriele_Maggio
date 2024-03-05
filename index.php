<?php


//TRACCIA NUMERO 1

function checkCharacters($password)
{

    if (strlen($password) >= 8) {
        echo 'Benvenuto' . "\n";
        return true;
    } else {
        echo 'Inserisci almeno 8 caratteri ';
        return false;
    }

}

function checkUpperLetter($password)
{

    $checkUpper = false;

    for ($index = 0; $index < strlen($password); $index++) {
        if (ctype_upper($password[$index])) {
            $checkUpper = true;
        }

    }
    if ($checkUpper) {
        return true;
    } else {
        echo 'La password deve contenere almeno una lettera maiuscola!';
        return false;
    }

}

function checkNumber($password)
{

    $checkNum = false;
    for ($index = 0; $index < strlen($password); $index++) {
        if (ctype_digit($password[$index])) {

            $checkNum = true;
        }
    }

    if ($checkNum == true) {
        echo 'La password è corretta' . "\n";
        return true;
    } else {
        echo 'La password deve contenere almeno un carattere numerico!' . "\n";
        return false;
    }
}


function specialCharacter($spec_char)
{

    $checkSpecial = false;

    $carattereSpeciale = ['/', '\\', '^', '£', '$', '%', '&', '*', '(', ')', '#', '~', '@', '?', '-', '=', '_', '¬'];

    for ($index = 0; $index < strlen($spec_char); $index++) {
        if (in_array($spec_char[$index], $carattereSpeciale)) {

            $checkSpecial = true;
        }
    }

    if ($checkSpecial) {
        return true;
    }
    return false;
}


function checkPassword($parola)
{

    if (checkCharacters($parola) && checkUpperLetter($parola) && checkNumber($parola) && specialCharacter($parola)) {
        echo 'La password è accettata!';
        return true;
    } else {
        echo 'Qualcosa è andato storto' . "\n";
    }

    return false;
}
// // ctype_upper()
// // ctype_number()
// // is_numeric()
// // ctype_digit()

do {
    $passwordCorretta= true;
    $passw = readline('Inserisci la tua password: ');


    checkPassword($passw);
    if (checkPassword($passw)) { 
        $passwordCorretta = false;
    }
} while ($passwordCorretta);



//TRACCIA NUMERO 2