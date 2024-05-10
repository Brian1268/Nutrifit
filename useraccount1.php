<?php
    require 'conn.php';

    $username   = $_POST['username'];
    $description= $_POST['description'];
    $email      = $_POST['email'];
    $gender     = $_POST['gender'];
    $dob        = $_POST['dob'];
    $address    = $_POST['address'];

    $height     = $_POST['height'];
    $weight     = $_POST['weight'];
    $bloodGroup = $_POST['bloodgroup'];

    $sql ="insert into useraccount (Username,Description,Email,Gender,DOB,Address,Height,Weight,Bloodgroup) values ('$username','$description','$email','$gender','$dob','$address','$height','$weight','$bloodGroup')";

    if($conn->query($sql)){
        echo "User Account Details Entered Successfully";
    }
    else{
        echo "Error".$conn->error;
    }

    $conn->close();

?>

