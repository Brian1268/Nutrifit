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
  <link rel="stylesheet" href="CSS/footer.css">
</head>

<body>

  

  <section class="registration" id="registration">
    <h3 class="heading">Update User Accounts</h3>
    <div class="container">
      <div class="form">
        <div class="title">
          <p>Sign Up Form</p>
        </div>
        <form class="formcont" action="Adminaccupdate.php" method="post">
        <input type="number" id="ID" name="ID" placeholder="ID (required)" required="confirm">
          <input type="text" id="FullName" name="FullName" placeholder="Full Name" required="confirm">
          <input type="email" id="Email" name="Email" placeholder="Email" required="confirm">
          <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" required="confirm">
          <input type="password" id="pws" name="Password" placeholder="Password" required="confirm">
          <input type="password" id="cpws" name="ConfirmPassword" placeholder="Confirm password" required="confirm">
          <input type="submit" value="update" onclick="match_password()">
          <label><a href="terms.php"><b>Terms of Use</b></a></label>
            

        
        </form>
      </div>
      <div class="image">
        <img src="image/img7.svg" alt="">
      </div>
    </div>
  </section>

  <script src="JS/confirm.js"></script>

   <!--Footer Starts Here-->
   <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <img src="Assets/Web-Logo.png" alt="">
            </div>
            <ul class="footer-list">
                <li>
                    <h3>Navigation Links</h3>
                </li>
                <li>
                    <a href="aboutus.php" class="footer-link">About Us</a>
                </li>
                <li>
                    <a href="contact-us.php" class="footer-link">Contact Us</a>
                </li>
                <li>
                    <a href="" class="footer-link">Support Us</a>
                </li>
                <li>
                    <a href="feedbackform.php" class="footer-link">Give Feedback</a>
                </li>
            </ul>
            <ul class="footer-list">
                <li>
                    <h3>Services</h3>
                </li>
                <li>
                    <a href="Recipies.php" class="footer-link">Diet Plans</a>
                </li>
                <li>
                    <a href="scheduling.php" class="footer-link">Health Checkups</a>
                </li>
                <li>
                    <a href="Recipies And Blogs.php" class="footer-link">Recipies And Blogs</a>
                </li>
                <li>
                    <br>
                </li>
            </ul>          
            <div>
              <h3>Socials</h3>
              <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="#" class="footer-link" id="twitter">
                        <i class="fa-brands fa fa-twitter"></i>
                    </a>
                    <a>
                        <br><br><br>
                    </a>
              </div>
            </div>
        </div>
        <div id="footer_copyright">
            &#169
            2024 all rights reserved
        </div>
    </footer>
    <!--Footer Ends Here-->

  

</body>

</html>