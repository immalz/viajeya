<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'viajeya';


    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
      } catch (PDOException $e) {
        die('La conexion falló: ' . $e->getMessage());
      }
?>