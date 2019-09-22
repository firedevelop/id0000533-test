<?php
 
 require 'includes/init.php';

 $conn = require 'includes/db.php';
 
try {
 
    $sql = 'SELECT username,
                    last_name,
                    email
               FROM employees
              WHERE last_name LIKE ?';
 
    $stmt = $conn->prepare($sql);
    $stmt->execute(['%son']);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
 
    while ($r = $stmt->fetch()) {
        echo printf('%s <br/>', $r['last_name']);
    }
} catch (PDOException $pe) {
    die("Could not connect to the database $db_name :" . $pe->getMessage());
}