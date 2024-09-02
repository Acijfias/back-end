<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

require "./base.php";

$data = [
    'name' => $_POST['name'],
    'address' => $_POST['address'],
    'age' => $_POST['age'],
    'gender' => $_POST['gender'],
    'course' => $_POST['course'],
];

$sql = "INSERT INTO studentss (name, address, age, gender, course) VALUES (:name, :address, :age, :gender, :course)";
$query = $pdo->prepare($sql);
$query->execute($data);

header("Location: index.php");
?>
