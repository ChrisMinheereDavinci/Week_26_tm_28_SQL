<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "gameplanning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}
else{
    echo "test";
}
    $sql = "SELECT id, image, name FROM games";
    $result = $conn->query($sql);





    $sql = "SELECT id, name, image, FROM gameplanning";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. " " . $row["image"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    $conn->close();


?>