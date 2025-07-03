<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-Type: application/json; charset=UTF-8");
require_once("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT COUNT(*) AS cnt FROM 07_janken");
$stmt->execute();
$count = (int)$stmt->fetch()["cnt"];

echo json_encode(["count" => $count]);
