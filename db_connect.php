<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = mysqli_connect($servername, $username, $password, $dbname) or die("sorry
we failed to connect to database:".mysqli_connect_errno());


?>