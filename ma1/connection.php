<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename ="firstform";

$conn = mysqli_connect($servername,$username,$password,$databasename);

if ($conn) {
    echo "connection Ok........";
}
else{
    echo "connection failed.......";
}
?>