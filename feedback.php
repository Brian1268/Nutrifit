<?php
    require 'conn.php';


    $username = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comments = $_POST["comments"];

    

    
    
    
    $sql = "insert into feedback (Username,Email,Subject,Comments) values ('$username','$email','$subject','$comments')";
    

        if($conn->query($sql)){
            echo "Feedback inserted successfully";
        }
        else{
            echo "Error".$conn->error;
        }

    $conn->close();

?>