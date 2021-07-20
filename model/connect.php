<?php
require_once 'config.php';
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Não foi possível conectar ao banco de dados $dbname :" . $pe->getMessage());
}