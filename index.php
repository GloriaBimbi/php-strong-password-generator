<?php

require_once  __DIR__ . "./partials/functions.php";
require_once  __DIR__ . "./partials/init.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-5">Password Generator</h1>
        <div class="card">
            <div class="card-body">
                <form method="get" class="row">
                    <label for="password_length" class="col-12 mb-2 form-label">Scegli il numero di caratteri della tua password:</label>
                    <input type="number" id="password_length" name="password_length" min="8" max="20" class="col-9  me-3" placeholder="Scegli tra 8 e 20 caratteri" autofocus>
                    <button class="btn btn-success col-2">Genera</button>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>