<?php 

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$current_user = 3;


$patient = $db->query('SELECT * FROM patients where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($patient['user_id'] === $current_user);

$db->query('delete from patients where id = :id', [
    'id' => $_GET['id']
]);

header('location: /patients');
exit();