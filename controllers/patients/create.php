<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$title = 'Create Patient';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if(!Validator::string($_POST['name'], 1, 255)) {
        $errors['name'] = 'Name must be between 1 and 255 characters long';
    }

    if(!Validator::number($_POST['age'], 1, )) {
        $errors['age'] = 'Age must be a valid number between 1 and 300';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO patients (name, age, user_id) VALUES(:body, :age, :user_id)', [
            'body' => $_POST['name'],
            'age' => $_POST['age'],
            'user_id' => 3,
        ]);
    } 
}
    


require 'views/patients/create.view.php';