<?php
require "./base.php";
$data = [
    "id" => $_GET["id"]
];
$sql = "DELETE FROM studentss WHERE id = :id";
$query = $pdo->prepare($sql);
$query->execute($data);
header("Location: index.php");

