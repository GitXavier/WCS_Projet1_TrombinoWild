<h1>Hello World !</h1>

<?php

$errors =[];

if (!array_key_exists('firstname', $_POST) || $_POST['firstname'] == ''){
    $errors['firstname'] = "Vous n'avez pas renseigné votre prénom";
} if (!array_key_exists('lastname', $_POST) || $_POST['lastname'] == ''){
    $errors['lastname'] = "Vous avez pas renseigné votre nom";
} if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
} if (!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}


session_start();

if (!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['input'] = $_POST;
   header('location: contact.php');
}else {
    $_SESSION['success'] = 1;
    header('location: contact.php');
}


die();

