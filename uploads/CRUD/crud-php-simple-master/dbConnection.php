<?php
$databaseHost = 'localhost:127.0.0.1';

$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = '';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
