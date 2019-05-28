<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "gameplanning";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>" . "Successfully connected to Database" . "</h3>";
    connectionsucceses();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    connectionfailed();
}



function connectionsucceses(){ 
    echo ''?>
    <div><div class="alert alert-success" role="alert">
    Successfully connected to Database
</div></div>
<?php
}


function connectionfailed(){ 
    echo ''?>
    <div><div class="alert alert-danger" role="alert">
    Failed connecting to Database
</div></div>
<?php
}





