<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require 'database.php';
 
// Attempt select query execution
try{
    $sql = "SELECT * FROM employees";   
    $result = $conn->query($sql);
    if($result->rowCount() > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($conn);
?>


