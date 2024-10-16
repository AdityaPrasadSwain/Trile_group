<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM moon";
$data= mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo $result['fname']." ".$result['lname']." ".$result['email']." ".$result['address']." ".$result['city']." ".$result['state']." ".$result['zip'];


// echo $total;

if($total != 0){
    // echo "<br>table hase record";
}
else{
    echo "table is empty";
}
?>