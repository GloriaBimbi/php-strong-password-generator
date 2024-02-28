<?php

//funzone per la generazione casuale di una lettera e la sua aggiunta in $password fino a che la sua lunghezza non corrisponde a quella selezionata dall'utente
function create_password($length, $array_of_simbols, $password_string){
    while (strlen($password_string) <= $length - 1){
        $random_number = rand(1, count($array_of_simbols) - 1);
        $password_string .= $array_of_simbols[$random_number];
    }
    return $password_string;
}

?>