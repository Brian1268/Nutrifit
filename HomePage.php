<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="CSS/HomePage.css">
    <link rel="stylesheet" href="CSS/Header-login.css">
    <link rel="stylesheet" href="CSS/footer.css">
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
        <a href="Diet-Plans.php">Diet Planning</a>
        <a href="BMIcal.php">BMI Calculator</a>
        <a href="aboutus.php">About Us</a>
        <a href="feedbackform.php">Feedback</a>
        <a href="SignIn.php">Logout</a>
      </nav>
    </header>
    <!--Header Ends Here-->
    <!--Home Stars Here-->
    <section class="home" id="home">
      <div class="content">
        <h3>Welcome to Nutrifit</h3>
      </div>
    </section>
    <!--Home Ends Here-->
    <!--About Starts Here-->
    <section class="about" id="about">
      <h1 class="heading">Nutrifit</h1>
      <div class="row">
        <div class="content">
          <h3>Our Mission</h3>
          <p>Our mission is to provide you with the resources, and support you need to make positive changes in your life. Whether you're looking to lose weight, improve your fitness, or simply lead a healthier lifestyle, we're here to help every step of the way.</p>
        </div>
        <div class="image">
          <img src="Assets/Eating healthy food-pana.png" alt=" ">
        </div>
      </div>
    </section>
    <!--About Ends Here-->
    
    <!--Services Start Here-->
      <section class="services" id="services">

        <h1 class="heading">Our Services</h1>
        
        <div class="box-container">

          <div class="box">

            <div class="icon">
              <img src="Assets/diet.png" alt="">
            </div>

            <div class="content">
              <h3>Diet Plans</h3>
              <h5>For subcribed Users Only</h5>
              <div class="line"></div>
                <ul>
                  <li><i class="fas fa-check"></i>Tailored by certified nutritionists</li>
                  <li><i class="fas fa-check"></i>Individual health goals and dietary needs</li>
                  <li><i class="fas fa-check"></i>Customized to fit lifestyle and preferences</li>
                  <br>
                </ul>
                <a href="#" class="btn">View</a>
            </div>
            
          </div>

          <div class="box">

            <div class="icon">
              <img src="Assets/appointment.png" alt="">
            </div>

            <div class="content">
              <h3>Health Checkups</h3>
              <div class="line"></div>
                <ul>
                  <li><i class="fas fa-check"></i>Free Appointment For Premium Members</li>
                  <li><i class="fas fa-check"></i>Appointments with certified nutritionists</li>
                  <li><i class="fas fa-check"></i>Provides personalized guidance and support</li>
                  <br><br><br>
                </ul>
                <a href="scheduling.php" class="btn">View</a>
            </div>
          </div>

          <div class="box">

            <div class="icon">
              <img src="Assets/recipe-book.png" alt="">
            </div>

            <div class="content">
              <h3>Recipies And Blogs</h3>
              <div class="line"></div>
                <ul>
                  <li><i class="fas fa-check"></i>A collection of nutritious and delicious recipes</li>
                  <li><i class="fas fa-check"></i>Provides meal ideas for different dietary needs</li>
                  <li><i class="fas fa-check"></i>Helps users maintain a healthy and balanced diet</li>
                  <li><i class="fas fa-check"></i>Blog Post and Other Educaitonal Content</li>
                  <br>
                </ul>
                <a href="Recipies And Blogs.php" class="btn">View</a>
            </div>
          </div>
        </div>
      </section>
    <!--Services Ends Here-->

    <!--Pricing Plans Starts Here-->
    <section class="pricing" id="pricing">

      <h1 class="heading">Pricing Plans</h1>

      <div class="box-container">

        <div class="box">
          <h3 class="title">Basic</h3>
          <div class="price">
            <span class="amount">FREE</span>
          </div>
          <ul>
            <li>Pre-Made Diet Plans</li>
            <li>Limited Support</li>
            <li>Acess to Blog Posts and recipes</li>
            <br><br><br>
          </ul>
        <a href="" class="btn">Buy Now</a>
        </div>

        <div class="box active">
          <h3 class="title">Premium</h3>
          <div class="price">
            <span class="currency">Rs </span>
            <span class="amount">2500</span>
            <span class="duration"> /Month</span>
          </div>
          <ul>
            <li>Custom-Made Diet Plans</li>
            <li>Priority Support</li>
            <li>Acess to Blog Posts and Recipies</li>
            <li>Personal Nutritionist</li>
            <li>Monthly Health Checkups</li>
          </ul>
        <a href="PaymentPage Final.php" class="btn">Buy Now</a>
        </div>
      </div>
    </section>
    <!--Pricing Plans Ends Here-->

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