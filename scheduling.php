

<!DOCTYPE html>
<html>
  <head>
    <META CHARSET="UTF-8">
    <title>Welcome to NutriFit</title>
    <link rel="stylesheet" href="CSS/scheduling.css">
    <link rel="stylesheet" href="CSS/Header-login.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  
  <body>
    <header class="header1">

      <div class="logo-J">
        <a href="HomePage.php">
          <img src="Assets/Web-Logo.png" alt="logo">
        </a>
      </div>

      <nav class="navbar--">
        <a href="Recipies.php">Diet Planning</a>
        <a href="scheduling.php">Health Checkup</a>
        <a href="aboutus.php">About Us</a>
        <a href="contact-us.php">Contact</a>
        <a href="SignIn.php">Logout</a>
      </nav>
    </header>
    <br><br>
    <div class="content">
    <img class="picture" src="image/img.svg">
    
        <form class=form1>
        <h3 class="heading">Health checkups</h3>
        <a class="subheading">set your appointment here</a>
        
        <div class="input">
            <a class="name">Full Name*</a>
            <input type="text" name="name" class="input-field" placeholder="Enter your first name and last name" required="Confirm">  
        </div>

        <div class="input">
            <a class="name"> Address*</a>
            <input type="text" name="address" class="input-field" placeholder="Enter your address" required="Confirm" >
        </div>

        <div class="input">
            <a class="name">Phone Number*</a>
            <input type="number" name="phonenumber" class="input-field" placeholder="Please enter your phone number" required="Confirm">
        </div>
        <div class="input">
            <a class="name">Doctor*</a>
            <select  name="doctor" class="input-field">
                <option value="" disabled selected>Click to Select the doctors  </option>
                <option value="doctor1">Dietician/Nutritionist - Dr.DAMMIKA CHANDRAPALA</option>
                <option value="doctor2">Dietician/Nutritionist  - Prof. RANIL SALGADU </option>
                <option value="doctor3">Dietician/Nutrition Physician - Dr(Mrs). EVONE SENANAYAKA </option>
                <option value="doctor4">Dietician - DR. NISANSALA SEWWANDI </option>
            </select>
        </div>
        <div class="input">
            <a class="name">Hospital*</a>
            <select  name="hospital" class="input-field">
                <option value="" disabled selected>Click to Select the Hospital </option>
                <option value="hospital1">Durdans Hospital</option>
                <option value="hospital2">Nawaloka Hospital</option>
                <option value="hospital3">Hemas Hospital </option>
                <option value="hospital4">Lanka Hospital </option>
            </select>
        </div>
      
        <div class="input">
            <a class="name">Date*</a>
            <a class="time">Time*</a><br>
            <input type="date" name="date" class="field2" placeholder="set date (dd/mm/yyyy)" required="Confirm">
            <input type="time" name="time" class="field2" placeholder="" required="Confirm">
        </div>

        <div class="input">
            <a class="name"> Email*</a>
            <input type="email" name="email" class="input-field" placeholder="Enter a valid Email" required="Confirm" >
        </div>

        <div class="input">
            <a class="name"> Remarks*</a><br>
            <textarea class="remark" name="remarks" rows="10" cols="50"></textarea>
        </div>
        <div class="input" >
            <input type="submit" class="submit-field" value="Confirm Appoinment">
        </div>
        </form>
    </div>
  
  
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
    </body>
  
</html>