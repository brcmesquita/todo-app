<?php

$hostname = "localhost";

$username = "root";
$password = "";

$database = "todo";

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

// Handle this in some other way
if(!isset($_SESSION['user_id'])) {
  die('You are not signed in.');
}