
<?php
include 'controller/mysqlcon.php';

$query = $conn->prepare('SELECT * FROM games');
$query->execute();
$result = $query->fetchAll();


foreach ($result as $row) {
    include 'gamesdata.php'; 
     
}
?>