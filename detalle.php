<?php

require_once "conexion.php";
require_once "devuelveJson.php";

$id = $_GET["id"] ?? 0;

$stmt = $conexion->prepare(
 "SELECT * FROM juegos WHERE id = ?"
);

$stmt->execute([$id]);

$juego = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$juego) {
 http_response_code(404);
 devuelveJson(["error" => "No encontrado"]);
}

devuelveJson($juego);
