<?php

//funzone per la generazione casuale di una lettera e la sua aggiunta in $password fino a che la sua lunghezza non corrisponde a quella selezionata dall'utente
function create_password($length, $password_string, $array_of_simbols){
    while (strlen($password_string) <= $length - 1){
        $random_number = rand(1, count($array_of_simbols) - 1);
        $password_string .= $array_of_simbols[$random_number];
    }
    return $password_string;
};

// //funzione per generare un carattere casuale in un sarray di caratteri
// function generate_character ($array_of_character){
//     $random_number = rand(1, count($array_of_character) - 1);
//     $password_string .= $array_of_character[$random_number];
// };


// //funzone per la generazione casuale di una lettera e la sua aggiunta in $password fino a che la sua lunghezza non corrisponde a quella selezionata dall'utente
// function create_password($length, $password_string, $array_of_min_letters, $array_of_mai_letters, $array_of_simbols, $array_of_numbers){
//     while (strlen($password_string) <= $length - 1){
//         var_dump('ciao');
//         generate_character ($array_of_min_letters);
//         generate_character ($array_of_mai_letters);
//         generate_character ($array_of_simbols);
//         generate_character ($array_of_numbers);
//         var_dump(generate_character ($array_of_min_letters));
// var_dump(generate_character ($array_of_mai_letters));
// var_dump(generate_character ($array_of_simbols));
// var_dump(generate_character ($array_of_numbers));
//     }
//     return $password_string;
// }

?>