<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generatore</title>
</head>

<body>

    <!-- form -->
    <form>
        <label for="number">Enter the length of the password:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Generate Password">
    </form>

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

    echo generatePsw($userNumber);


    ?>

</body>

</html>