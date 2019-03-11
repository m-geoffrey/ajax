<?php

// $name = $_POST['name'];
// $message = $_POST['message'];

// if ('POST' === $_SERVER['REQUEST_METHOD']) {
//     // Verification 2 caratères
//     if ((strlen($_POST['name'])) >=2 && (strlen($_POST['message'])) >= 2) {
//         echo "Success";
//     } else {
//         if ((strlen($_POST['name'])) < 2 ) {
//             echo "Erreur sur le champ Name";
//         } else {
//             echo "Erreur sur le champ Message";
//         }
//     }
// }
// echo "<br>";
// var_dump($name);
// echo "<br>";
// var_dump($message);

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    $name = $_POST['name'];
    $message = $_POST['message'];

    $errors = [];

    if (strlen($name) <2) {
        $errors['name'] = 'Erreur name';
        echo 'Erreur name';
    }

    if (strlen($message) <2) {
        $errors['messages'] = 'Erreur message';
        echo 'Erreur message';
    }

    if (empty($errors)) {
        echo "Succès";
    } else {
        print_r($errors);
    }
}

