<?php
session_start();
$users = $_SESSION['users'];
$dateAndTime = date('m-d-Y h:i:s a', time()); 
?>