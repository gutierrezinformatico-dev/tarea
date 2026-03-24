<?php

function devuelveJson($resultado)
{
 header("Content-Type: application/json");
 echo json_encode($resultado);
 exit();
}