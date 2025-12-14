<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/patients', 'controllers/patients/index.php');
$router->get('/patient', 'controllers/patients/show.php');
$router->delete('/patient', 'controllers/patients/destroy.php');

$router->get('/patient/edit', 'controllers/patients/edit.php');
$router->patch('/patient', 'controllers/patients/update.php');

$router->get('/patients/create', 'controllers/patients/create.php');
$router->post('/patients', 'controllers/patients/store.php');