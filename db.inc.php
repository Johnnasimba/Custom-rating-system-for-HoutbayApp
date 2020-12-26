<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hbrating";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn) {
    die("connection to the database failed: ".mysqli_connect_error());
}

?>