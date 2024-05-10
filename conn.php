<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nutrifit";

    //create connection
    $conn = new mysqli("localhost","root","","nutrifit");

    //check connection
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }

?>