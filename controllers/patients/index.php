<?php 

$config = require base_path('config.php');
$db = new Database($config['database']);

$patients = $db->query('SELECT * FROM patients where user_id = 3')->all();

require view('patients/index.view.php', [
    'title' => 'Patients',
    'patients' => $patients
]);