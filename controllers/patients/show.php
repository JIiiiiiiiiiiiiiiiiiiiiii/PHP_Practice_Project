<?php 

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$current_user = 3;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient = $db->query('SELECT * FROM patients where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($patient['user_id'] === $current_user);

    $db->query('delete from patients where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: /patients');
    exit();
} else {
    $patient = $db->query('SELECT * FROM patients where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($patient['user_id'] === $current_user);
}



require view('patients/show.view.php', [
    'title' => 'Note',
    'patient' => $patient
]);