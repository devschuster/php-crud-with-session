<?php

session_start();

$id = filter_input(INPUT_POST, 'id');
$user = filter_input_array(INPUT_POST)['user'];

$_SESSION['users'][$id] = $user;

header('location: ./');


?>