<?php

$api = file_get_contents(
 "https://api.rawg.io/api/games?key=demo"
);

if ($api === false) {
 http_response_code(500);
 echo json_encode(["error" => "Error externo"]);
 exit();
}

header("Content-Type: application/json");
echo $api;