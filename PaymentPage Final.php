<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <link rel="stylesheet" href="CSS/Payment-Page-Final.css">
  <link rel="stylesheet" href="CSS/Header-login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/footer.css">
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
          <a href="scheduling.php">Health Checkup</a>
          <a href="aboutus.php">About Us</a>
          <a href="feedbackform.php">Feedback</a>
          <a href="PaymentPage Final.php">Pay</a>
          <a href="Adminlogin.php">Logout</a>
      </nav>
    </header>
    <!--Header Ends Here-->


  <div class="container-sy">

    <form method="post" action="payment.php">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" name="name" placeholder="John Smith">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" name="address" placeholder="Address">
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" name="city" placeholder="Colombo">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Country :</span>
                        <input type="text" name="country" placeholder="Sri Lanka">
                    </div>
                    <div class="inputBox">
                        <span>Postal Code :</span>
                        <input type="text" name="postalcode" placeholder="10350">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Payment</h3>

                <div class="inputBox">
                    <span>cards Accepted :</span>
                    <img src="Assets/card_img.png" alt="card-types">
                </div>
                <div class="inputBox">
                    <span>Name On Card :</span>
                    <input type="text" name="cardname" placeholder="John Smith">
                </div>
                <div class="inputBox">
                    <span>Credit Card Number :</span>
                    <input type="number" name="cardnumber" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Exp Month :</span>
                    <input type="text" name="expmonth" placeholder="January">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp year :</span>
                        <input type="number" name="expyear" placeholder="2029">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="000">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Proceed to Checkout" class="submit-btn">

    </form>
  </div>  

  <section class="FAQ" id="FAQ">

    <h2 class="FQ" >Frequently Asked Questions</h2><br>
  <div class="container-FQ">
    
    <div class="col">
      <h3>Do you accept credit cards?</h3>
    
      <p class="qanswer">Yes, we accept credit cards for payment. We strive to make the payment process as convenient as possible for our users, and credit cards are one of the payment methods we accept.</p><br>

      <h3>How will I be billed?</h3>
      <p class="qanswer">You will be billed automatically using the credit card information you provide upon sign-up. Our billing system is secure and streamlined, ensuring that your payments are processed efficiently.
      </p><br>

      <h3>Can I cancel at any time?</h3>
      <p class="qanswer">Yes, you can cancel your subscription at any time. We believe in providing flexibility to our users, so if you decide our service isn't the right fit for you, you can easily cancel your subscription with no hassle.
      </p><br>
    </div>

   <div class="col">
      <h3>How long does the trial last?</h3>
      <p class="qanswer">Our trial period typically lasts 7 days, during which you can explore our platform and experience the benefits of our services firsthand. At the end of the trial period, your subscription will automatically transition to a paid plan unless you choose to cancel.
      </p><br>

      <h3>Are you for real?</h3>
      <p class="qanswer">Yes, we are a legitimate service dedicated to helping our users achieve their health and wellness goals. Our platform is backed by a team of professionals dedicated to providing high-quality resources and support to our users. If you have any concerns or questions about our authenticity, please don't hesitate to reach out to us.
      </p>
    </div>
  </div>
  </section>

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