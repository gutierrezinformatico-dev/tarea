<?php

require_once "conexion.php";
require_once "devuelveJson.php";

$stmt = $conexion->query("SELECT * FROM juegos");

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

devuelveJson($resultado);