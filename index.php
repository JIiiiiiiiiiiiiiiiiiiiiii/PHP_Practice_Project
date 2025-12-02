<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    require 'controllers/index.php';
} else if ($uri === '/about') {
    require 'controllers/about.php';
} else if ($uri === '/contact') {
    require 'controllers/contact.php';
} else {
    http_response_code(404);
    echo '404 Not Found';
}