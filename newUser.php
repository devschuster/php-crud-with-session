<?php

session_start();

$newUser = filter_input_array(INPUT_POST)['user'];
$_SESSION['users'][] = $newUser;

header('location: ./')

?>
