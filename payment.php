<?php
    require 'conn.php';

    $name      = $_POST["name"];
    $email     = $_POST["email"];
    $address   = $_POST["address"];
    $city      = $_POST["city"];
    $country   = $_POST["country"];
    $postalcode= $_POST["postalcode"];
    $cardname  = $_POST["cardname"];
    $cardnumber= $_POST["cardnumber"];
    $expmonth  = $_POST["expmonth"];
    $expyear   = $_POST["expyear"];
    $cvv       = $_POST["cvv"];

    $sql ="INSERT into payment (Name,Email,Address,City,Country,Postalcode,Nameoncard,Cardnumber,Expirymonth,Expiryyear,CVV) values ('$name','$email','$address','$city','$country','$postalcode','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";

    if($conn->query($sql)){
        echo "Payment Details inserted successfully";
    }
    else{
        echo "Error".$conn->error;
    }

    $conn->close();

?>



