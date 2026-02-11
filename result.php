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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body p-4 text-center">
                        <h1 class="card-title mb-4">La tua password</h1>

                        <?php if ($password) : ?>
                            <div class="alert alert-success fs-4 text-break fw-bold user-select-all">
                                <?php echo $password; ?>
                            </div>
                        <?php else : ?>
                            <div class="alert alert-warning">Nessuna password generata.</div>
                        <?php endif; ?>

                        <a href="index.php" class="btn btn-primary">Genera un'altra password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
