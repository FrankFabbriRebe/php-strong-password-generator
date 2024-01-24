<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generatore</title>

    <?php
    require_once __DIR__ . "/partials/functions.php";
    ?>

</head>

<body>

    <!-- form -->
    <form>
        <label for="number">Enter the length of the password:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Generate Password">
    </form>

    <span>
        <?php echo generatePsw($userNumber) ?>
    </span>

</body>

</html>