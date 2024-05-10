<!DOCTYPE html>
<html>
<head>
    <title>NutriFit</title>
    <link rel="stylesheet" href="user account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Header-login.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="image/icon1.png">
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
        <a href="#">Diet Planning</a>
        <a href="BMIcal.php">BMI Calculator</a>
        <a href="scheduling.php">Health Checkup</a>
        <a href="aboutus.php">About Us</a>
        <a href="contact-us.php">Contact</a>
        <a href="SignIn.php">Logout</a>
      </nav>
    </header>
    <!--Header Ends Here-->
   
    <div class="content">
    <div class="box1">
    <form method="POST" action="useraccount1.php" >
                <div class="welcome">
                <h4 class="heading">My details</h4>
            
            <div class="input">
                <a class="name">Username*</a>
                <input type="text" name="username" class="input-field" placeholder="Enter your username" required="Confirm">  
            </div>

            <div class="input">
                <a class="name">Description*</a>
                <input type="text" name="description" class="input-field" placeholder="Enter your description" required="Confirm">

            <div class="input">
                <a class="name">Email*</a>
                <input type="email" name="email" class="input-field" placeholder="Enter your email" required="Confirm">

            <div class="input">
                <a class="name">Gender*</a>
                <select id="gender" name="gender" class="input-field">
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

            <div class="input">
                <a class="name">Date of birth*</a>
                <input type="date" name="dob" class="input-field" placeholder="Select MM/DD/YY" required="Confirm">
            </div>  
            <div class="input">
                <a class="name">Address*</a>
                <input type="text" name="address" class="input-field" placeholder="Enter your address" required="Confirm">
            </div>      
    
            
        </div>  

        <div class="box2">
            
            
                    <h4 class="heading">My Health Details</h4>
                
                <div class="input">
                    <a class="health-label">Height*</a>
                    <input type="text" name="height" class="input-field" placeholder="Enter your height" required="Confirm">
                </div>
        
                <div class="input">
                    <a class="health-label">Weight*</a>
                    <input type="text" name="weight" class="input-field" placeholder="Enter your weight" required="Confirm">
                </div>
        
                <div class="input">
                    <a class="health-label">Blood group*</a>
                    <select id="blood group" name="bloodgroup" class="input-field">
                        <option value="" disabled selected>Select your blood group</option>
                        <option value="male">A+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
        
            
            </div>
        </div>

        <div class="input" >
            <input type="submit" class="submit-field" value="Submit">
        </div></div>


    </form>

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