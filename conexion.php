<?php

$conexion = new PDO(
 "mysql:host=localhost;dbname=videojuegos",
 "root",
 ""
);

$conexion->setAttribute(
 PDO::ATTR_ERRMODE,
 PDO::ERRMODE_EXCEPTION
);