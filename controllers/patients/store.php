<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if(!Validator::string($_POST['name'], 1, 255)) {
    $errors['name'] = 'Name must be between 1 and 255 characters long';
}

if(!Validator::number($_POST['age'], 1, )) {
    $errors['age'] = 'Age must be a valid number between 1 and 300';
}

if(!empty($errors)) {
    return view('patients/create.view.php', [
        'title' => 'Create Patients',
        'errors' => $errors
    ]);
}



if(empty($errors)) {
    $db->query('INSERT INTO patients (name, age, user_id) VALUES(:body, :age, :user_id)', [
        'body' => $_POST['name'],
        'age' => $_POST['age'],
        'user_id' => 3,
    ]);

    header('location: /patients');
    die();
} 