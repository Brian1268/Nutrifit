
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="CSS/AdminHome.css">
    <link rel="stylesheet" href="CSS/Header-login.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <!--Header Starts Here-->
    <header class="header1">

      <div class="logo-J">
        <a href="">
          <img src="Assets/Web-Logo.png" alt="logo">
        </a>
      </div>

      <nav class="navbar--">
        
        <a href="Adminlogin.php">Logout</a>
        
      </nav>
    </header>
    <!--Header Ends Here-->
    <!--Home Stars Here-->
    
    <section class="home" id="home">
      <div class="content">
      <h2 class="Adsash">System Admin-Dashboard</h2>
        <h3>Welcome to Nutrifit</h3>
      </div>
    </section>
    <!--Home Ends Here-->
    <!--About Starts Here-->
    <section class="about" id="about">
      <h1 class="heading">Sysyem Admin Tasks</h1>
      <div class="row">
        <div class="content">
          <a href="Adminaccount.php"><h3>Read/Edit User Accounts</h3></a>
          <a href="#"><h3>Read/Edit Feedback</h3></a>
          <a href="#"><h3>Read/Edit Contact Details</h3></a>
          <a href="#"><h3>Read/Edit .......</h3></a>
        </div>
        <div class="image">
          <img src="image/admintasks3.svg" alt=" ">
        </div>
      </div>
    </section>
    <!--About Ends Here-->
      
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
              <br>
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