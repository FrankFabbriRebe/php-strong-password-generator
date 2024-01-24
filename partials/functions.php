<?php

$userNumber = $_GET["number"];
// echo "User number is: $userNumber";

// function to generate random psw
function generatePsw($userNumber)
{

    // list of characters available
    $charactersAvailable = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';

    $randomPsw = '';

    for ($i = 0; $i < $userNumber; $i++) {
        $randomPsw .= $charactersAvailable[rand(0, strlen($charactersAvailable) - 1)];
    }

    return $randomPsw;

}



?>