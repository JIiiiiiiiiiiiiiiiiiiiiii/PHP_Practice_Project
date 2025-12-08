<?php 

$config = require 'config.php';
$db = new Database($config['database']);

$title = 'Patient';
$current_user = 3;

$patient = $db->query('SELECT * FROM patients where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($patient['user_id'] === $current_user);

require 'views/patient.view.php'; 