<?php

header("Content-Type: application/json");

require_once "../config/database.php";
require_once "../models/Post.php";

$db = new Database();
$conn = $db->connect();

$post = new Post($conn);

$data = $post->getAll();

echo json_encode([
    "status" => true,
    "count" => count($data),
    "data" => $data
]);