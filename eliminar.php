<?php

require_once "conexion.php";
require_once "devuelveJson.php";

$id = $_GET["id"] ?? 0;

$stmt = $conexion->prepare(
 "DELETE FROM juegos WHERE id = ?"
);

$stmt->execute([$id]);

devuelveJson(["mensaje" => "Eliminado"]);