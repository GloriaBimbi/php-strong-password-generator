<?php

require  __DIR__ . "./functions.php";

//array di dati che mi servono per la creazione delle password
// $min_letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
// $mai_letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
// $simbols = [ '!', '#', '$', '%', '&', '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', ']', '^', '_', '`', '{', '|', '}', '~' ];
// $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$password_simbols = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '!', '#', '$', '%', '&', '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', ']', '^', '_', '`', '{', '|', '}', '~', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$password = '';


//creo una variabile che passa true se l'array GET non è vuoto; altrimenti passa false
$length_set = isset($_GET['password_length']) ? true : false;

//controllo che il form sia stato inviato
if($length_set){
    $password_length = (int) $_GET['password_length'];
    $generated_password = create_password($password_length, $password_simbols, $password);
} else {
    $generated_password = '...';
};

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
        <form method="get" class="row">
            <label for="password_length" class="col-12 mb-2">Scegli il numero di caratteri della tua password:</label>
            <input type="number" id="password_length" name="password_length" min="8" max="20" class="col-9  me-3" placeholder="Scegli tra 8 e 20 caratteri" autofocus>
            <button class="btn btn-success col-2">Genera</button>
        </form>
        <div class="result mt-5">
            <label for="password" class="me-3">La tua password di <?= $password_length ?> caratteri è:</label>
            <input type="text" id="password" value="<?= $generated_password ?>" />
        </div>
    </div>
</body>
</html>