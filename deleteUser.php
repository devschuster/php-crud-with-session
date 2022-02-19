<?php

session_start();

$id =  filter_input(INPUT_GET, 'id');

unset($_SESSION['users'][$id]);

header('location: ./')

?>