<?php
require 'database.php';
echo "<br><br><br>__________________FETCH_NUM__________________ <br>";
$stmt = $conn->query("SELECT * FROM employees");

$rows = $stmt->fetchAll(PDO::FETCH_NUM);

foreach($rows as $row) {

    printf("$row[0] $row[1] $row[2]");
    echo "<br>";
}

echo "<br><br><br>__________________FETCH_OBJ__________________ <br>";
$user = $conn->query("SELECT * from employees")->fetch(PDO::FETCH_OBJ);
foreach($user as $user) {
    printf("$user");
    echo "<br>";
}

echo "<br><br><br>__________________FETCH_ASSOC__________________ <br>";
$user = $conn->query("SELECT * from employees")->fetch(PDO::FETCH_ASSOC);
foreach($user as $user) {
    printf("$user");
    echo "<br>";
}

echo "<br><br><br>__________________FETCH_ASSOC__________________ <br>";
$user = $conn->query("SELECT * from employees")->fetch(PDO::FETCH_BOTH);
foreach($user as $user) {
    printf("$user");
    echo "<br>";
}
?>