<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 3;

// find the corresponding note
$patient = $db->query('select * from patients where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// authorize that the current user can edit the note
authorize($patient['user_id'] === $currentUserId);

// validate the form
$errors = [];

if(!Validator::string($_POST['name'], 1, 255)) {
    $errors['name'] = 'Name must be between 1 and 255 characters long';
}

if(!Validator::number($_POST['age'], 1, )) {
    $errors['age'] = 'Age must be a valid number between 1 and 300';
}

// if no validation errors, update the record in the notes database table.
if (count($errors)) {
    return view('patients/edit.view.php', [
        'title' => 'Edit Note',
        'errors' => $errors,
        'patient' => $patient
    ]);
}

$db->query('update patients set name = :name, age = :age where id = :id', [
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'age' => $_POST['age']
]);

// redirect the user
header('location: /patients');
die();