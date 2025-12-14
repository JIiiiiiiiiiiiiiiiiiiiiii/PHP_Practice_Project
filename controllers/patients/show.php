<?php 

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$current_user = 3;

$patient = $db->query('SELECT * FROM patients where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($patient['user_id'] === $current_user);

view('patients/show.view.php', [
    'title' => 'Note',
    'patient' => $patient
]);