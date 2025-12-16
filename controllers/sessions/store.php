<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];
$name;

$errors = [];

if(!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if(!Validator::string($password)) {
    $errors['password'] = 'Please enter a valid password';
}

if(!empty($errors)) {
    return view('sessions/create.view.php',[
        'errors' => $errors,
    ]);
}

$user = $db->query('select * from users where email = :email', [
    'email' => $email,
    'name' => $name
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email,
            'name' => $name
        ]);

        header('location: /');
        exit();
    }
}

// Either the user does not exist or the password is incorrect — show errors
return view('sessions/create.view.php', [
    'errors' => [
        'email' => 'No existing account found for email.'
    ],
]);