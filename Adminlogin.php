<?php 

session_start();

	include("conn.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

        $email=$_POST['Email'];
        $password = $_POST['Password'];
    

		if(!empty($email) && !empty($password))
		{

			$query = "select * from  administrators where email = '$email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{

						header("Location:AdminHome.php");
						die;
					}
				}
			}
			
            echo "<script>alert('wrong email or password!')</script>";
		}else
		{
			echo "wrong email or password!";
            header("location:wrong.php");
		}
	}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="CSS/Adminlogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/footer.css">
</head>

<body>

  

  <section class="registration" id="registration">
    <h3 class="heading">Admin Login</h3>
    
    <div class="container">
      <div class="form">
        <div class="title">
          <p>Enter Credentials To Login</p>
        </div>
        <form method="post">
          <input type="email" id="Email" name="Email" placeholder="Email" required>
          <input type="password" id="psw" name="Password" placeholder="Password" required>
          <input type="submit" value="Sign In">
        </form>
      </div>
      <div class="image">
        <img src="image/img10.svg" alt="">
      </div>
    </div>
  </section>

  <script src="main.js"></script>

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