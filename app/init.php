<?php

// nome ou endereço do servidor
$hostname = "localhost";

// dados de usuário e senha para conectar ao banco de dados
$username = "root";
$password = "";

// nome do banco de dados da aplicação
$database = "todo";

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

// Handle this in some other way
if(!isset($_SESSION['user_id'])) {
  die('You are not signed in.');
}