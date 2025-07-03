<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-Type: text/plain; charset=UTF-8");

$hand = $_POST["hand"] ?? "";
if ($hand === "") {
    echo "missing hand";
    exit;
}

require_once("funcs.php");
$pdo = db_conn();

$sql = "INSERT INTO 07_janken (hand) VALUES (:hand)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":hand", $hand, PDO::PARAM_STR);

$status = $stmt->execute();

if ($status === false) {
    $error = $stmt->errorInfo();
    echo "DB Error: " . $error[2];
} else {
    echo "OK";
}
