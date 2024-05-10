<?php

    require 'conn.php';

    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "insert into contactus (Name,Email,Subject,Message) values ('$name','$email','$subject','$message')";

    if($conn->query($sql)){
        echo "Contact Details Inserted Successfully";
    }
    else{
        echo "Error".$conn->error;
    }

$conn->close();


    


 ?>