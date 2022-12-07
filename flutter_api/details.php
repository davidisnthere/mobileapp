<?php
header('Content-Type: application/json');
include "db.php";

$id = $_POST['id'];

$stmt = $db->prepare("SELECT title, desic FROM smart_posts WHERE id = ?");
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
'result' => $result
]);