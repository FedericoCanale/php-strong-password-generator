<?php

session_start();
require_once 'functions.php';

if (isset($_GET['length'])) {
    $length = (int) $_GET['length'];
    $useLower = isset($_GET['lowercase']);
    $useUpper = isset($_GET['uppercase']);
    $useNumbers = isset($_GET['numbers']);
    $useSymbols = isset($_GET['symbols']);
    $_SESSION['password'] = generatePassword($length, $useLower, $useUpper, $useNumbers, $useSymbols);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h1 class="card-title text-center mb-4">Strong Password Generator</h1>

                        <form action="" method="GET">
                            <div class="mb-3">
                                <label for="length" class="form-label">Lunghezza password:</label>
                                <input type="number" name="length" id="length" min="1" required class="form-control">
                            </div>

                            <fieldset class="mb-3">
                                <legend class="fs-6 fw-bold">Caratteri ammessi:</legend>
                                <div class="form-check">
                                    <input type="checkbox" name="lowercase" id="lowercase" checked class="form-check-input">
                                    <label for="lowercase" class="form-check-label">Lettere minuscole</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="uppercase" id="uppercase" checked class="form-check-input">
                                    <label for="uppercase" class="form-check-label">Lettere maiuscole</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="numbers" id="numbers" checked class="form-check-input">
                                    <label for="numbers" class="form-check-label">Numeri</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="symbols" id="symbols" checked class="form-check-input">
                                    <label for="symbols" class="form-check-label">Simboli</label>
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-primary w-100">Genera</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
