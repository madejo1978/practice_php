<?php 
session_start();

// unset($_SESSION['name']);

session_destroy();

print_r($_SESSION);
?>