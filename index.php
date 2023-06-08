<?php

require 'flight/Flight.php';

Flight::register('db','PDO',array("mysql:host=localhost;dbname=api",'root','2001'));

Flight::route('/', function () {
    echo '<h1>Hola es mi Primera Api!</h1>';
    echo '<h2>!Api Para el Proyecto de Sistema de taxi con geolocalizacion con metodo de pago a traves de paypal !</h2>';
});

Flight::route('GET /obtener', function () {
    $sql='  SELECT * FROM usuarios';
    $sentencia = Flight::db()->prepare($sql);
    $sentencia->execute();
    $datos = $sentencia->fetchAll();
    Flight::json($datos);
});

Flight::start();
