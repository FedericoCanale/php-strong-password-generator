<?php

session_start();

$password = $_SESSION['password'] ?? '';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato - Strong Password Generator</title>
</head>

<body>
    <h1>La tua password:</h1>

    <?php if ($password) : ?>
        <p><?php echo $password; ?></p>
    <?php else : ?>
        <p>Nessuna password generata.</p>
    <?php endif; ?>

    <a href="index.php">Genera un'altra password</a>
</body>

</html>
