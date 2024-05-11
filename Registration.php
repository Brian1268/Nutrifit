<?php
session_start();
include("conn.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //post
    $FullName = $_POST['FullName'];
    $phone_num = $_POST['PhoneNumber'];
    $password = $_POST['Password'];
    $email = $_POST['Email'];

    if (!empty($FullName) && !empty($email) && !empty($password)) {
        $query = "INSERT INTO registration (FullName, Email, PhoneNumber, Password) VALUES ('$FullName', '$email', '$phone_num', '$password')";
        if (mysqli_query($conn, $query)) {
            // Successful insertion, redirect to login page
            header("Location:SignIn.php");
            exit;
        } else {
            // Error in query execution
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Empty fields
        echo "Please enter valid info";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create An Account</title>
  <link rel="stylesheet" href="CSS/Registration.css">
</head>

<body>

  

  <section class="registration" id="registration">
    <h3 class="heading">Create An Account</h3>
    <div class="container">
      <div class="form">
        <div class="title">
          <p>Sign Up Form</p>
        </div>
        <form method="post">
          <input type="text" id="FullName" name="FullName" placeholder="Full Name" required="confirm">
          <input type="email" id="Email" name="Email" placeholder="Email" required="confirm">
          <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" required="confirm">
          <input type="password" id="pws" name="Password" placeholder="Password" required="confirm">
          <input type="password" id="cpws" name="ConfirmPassword" placeholder="Confirm password" required="confirm">
          <input type="submit" value="Sign UP" onclick="match_password()">
          <a class="title" href="SignIn.php">Already have an account? <b>Sign in</b></a>
          <label><a href="terms.php"><b>Terms of Use</b></a></label>
            

        
        </form>
      </div>
      <div class="image">
        <img src="image/img7.svg" alt="">
      </div>
    </div>
  </section>

  <script src="JS/confirm.js"></script>

  

</body>

</html>