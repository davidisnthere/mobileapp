<?php
header('Content-Type: application/json');
include "db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$desic = $_POST['desic'];

$stmt = $db->prepare("UPDATE smart_posts SET title = ?, desic = ? WHERE id = ?");
$result =  $stmt->execute([$title, $desic, $id]);

echo json_encode([
'success' => $result
]);