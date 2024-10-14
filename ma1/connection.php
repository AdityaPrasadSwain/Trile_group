<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename ="firstform";

$conn = mysqli_connect($servername,$username,$password,$databasename);

if ($conn) {
    echo "<center>connection Ok........</center>";
}
else{
    echo "<center>connection failed.......</center>";
}
?>