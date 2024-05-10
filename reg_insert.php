<?php

 require 'conn.php';

$FullName = $_POST['FullName'];
$Email =  $_POST['Email'];
$PhoneNumber =  $_POST['PhoneNumber'];
$Password =  $_POST['Password']; 

$sql="INSERT INTO registration Values('$FullName', '$Email',' $PhoneNumber', '$Password')";

if($conn -> query($sql)){
    echo "insert sucssesful";
}else{
    echo "Error".$conn -> error;
}

$conn -> close();

?>