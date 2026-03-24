<?php

require_once "conexion.php";
require_once "devuelveJson.php";

$nombre = $_POST["nombre"] ?? "";
$genero = $_POST["genero"] ?? "";
$descripcion = $_POST["descripcion"] ?? "";
$imagen = $_POST["imagen"] ?? "";

// VALIDACIÓN
if ($nombre === "" || $genero === "") {
 http_response_code(400);
 devuelveJson(["error" => "Datos incompletos"]);
}

// 🔥 SI NO PONEN IMAGEN → DEFAULT
if ($imagen === "") {
 $imagen = "img/default.jpg";
}

// INSERTAR
$stmt = $conexion->prepare(
 "INSERT INTO juegos (nombre, genero, imagen, descripcion) VALUES (?, ?, ?, ?)"
);

$stmt->execute([$nombre, $genero, $imagen, $descripcion]);

devuelveJson(["mensaje" => "Guardado"]);