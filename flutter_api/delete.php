<?php
header('Content-Type: application/json');
include "db.php";

$id = $_POST['id'];
$stmt = $db->prepare("DELETE FROM smart_posts WHERE id = ?");
$result = $stmt->execute([$id]);

echo json_encode([
'id' => $id,
'success' => $result
]);