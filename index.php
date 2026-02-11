<?php

session_start();
require_once 'functions.php';

if (isset($_GET['length'])) {
    $length = (int) $_GET['length'];
    $_SESSION['password'] = generatePassword($length);
    header('Location: result.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>
    <h1>Strong Password Generator</h1>

    <form action="" method="GET">
        <label for="length">Lunghezza password:</label>
        <input type="number" name="length" id="length" min="1" required>
        <button type="submit">Genera</button>
    </form>
</body>

</html>