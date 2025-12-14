<?php 

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$patients = $db->query('SELECT * FROM patients where user_id = 3')->all();

view('patients/index.view.php', [
    'title' => 'Patients',
    'patients' => $patients
]);