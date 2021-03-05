<?php
require_once __DIR__ . '/../database/database.php';
header('Content-Type: application/json');
$jsonDischi = json_encode($dischi);
echo $jsonDischi;
