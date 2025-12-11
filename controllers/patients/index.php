<?php 

$config = require 'config.php';
$db = new Database($config['database']);

$title = 'Patients';

$patients = $db->query('SELECT * FROM patients where user_id = 3')->all();

require 'views/patients/index.view.php';