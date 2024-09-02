<?php
require "./base.php";
$data = [
    'id' => $_GET['id'],
    'name' => $_POST['name'],
    'address' => $_POST['address'],
    'gender' => $_POST['gender'],
    'age' => $_POST['age'],
    'course' => $_POST['course'],
];
$sql = "UPDATE studentss SET name=:name, address=:address, gender=:gender, age=:age, course=:course WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute($data);
header("Location: index.php");