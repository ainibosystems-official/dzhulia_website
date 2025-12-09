<?php
include __DIR__ . "/../../includes/config.php";

header("Content-Type: application/json");

$stmt = $pdo->query("SELECT * FROM workshops ORDER BY date ASC");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
