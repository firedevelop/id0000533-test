<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=cms", "admin", "YV8VjbJjm9KwNVmS");
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>