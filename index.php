<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$db = new Database();
$user = $db->query("select * from users where id = 1")->fetch(PDO::FETCH_ASSOC);;

dd($user['name']);