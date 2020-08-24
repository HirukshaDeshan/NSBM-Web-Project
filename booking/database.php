<?php

$serverName = "localhost";
$db_name = "bookinghotel";
$username = "root";
$password = "";

$conn = mysqli_connect($serverName,$db_name,$username,$password);

if(!$conn){
    die("Connection Failed :".mysqli_connect_error());
}
else{
    echo("Connection successfull");
}

?>