<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-Type: application/json; charset=UTF-8");
require_once("funcs.php");
$pdo = db_conn();

$hands = ["guu", "choki", "paa"];
$result = [];
$total = 0;

foreach ($hands as $h) {
    $stmt = $pdo->prepare("SELECT COUNT(*) AS cnt FROM 07_janken WHERE hand = :hand");
    $stmt->bindValue(":hand", $h, PDO::PARAM_STR);
    $stmt->execute();
    $cnt = (int)$stmt->fetch()["cnt"];
    $result[$h] = $cnt;
    $total += $cnt;
}

foreach ($result as $key => $val) {
    $result[$key] = $total > 0 ? round($val / $total * 100, 1) : 0;
}

echo json_encode($result);
