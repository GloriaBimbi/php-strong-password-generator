<?php 

//array di dati che mi servono per la creazione delle password
$min_letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$mai_letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$simbols = [ '!', '#', '$', '%', '&', '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', ']', '^', '_', '`', '{', '|', '}', '~' ];
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$password_simbols = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '!', '#', '$', '%', '&', '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', ']', '^', '_', '`', '{', '|', '}', '~', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$password = '';


//creo una variabile che passa true se l'array GET non è vuoto; altrimenti passa false
$length_set = isset($_GET['password_length']) ? true : false;

//controllo che il form sia stato inviato
if($length_set){
    $password_length = $_GET['password_length'];
    header("Location: ./password.php");
    session_start();
    $_SESSION['password_length'] = (int) $_GET['password_length'];
    $_SESSION['password'] = create_password($password_length, $password, $password_simbols );
} else {
    $generated_password = '...';
};