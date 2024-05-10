<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="CSS/feedback.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fontawesome.com/icons/star?f=classic&s=solid">
        <link rel="stylesheet" href="https://fontawesome.com/icons/star?f=classic&s=regular">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="CSS/footer.css">
        

        <title>NUTRIFIT</title>   
</head>
<body >
    <header class="header">

        <div class="logo--">
          <a href="#">
            <img src="image/LOGO1.png" alt="logo">
          </a>
        </div>
  
        <nav class="navbar--">
          <a href="Diet-Plans.php">Diet Planning</a>
          <a href="scheduling.php">Health Checkup</a>
          <a href="aboutus.php">About Us</a>
          <a href="feedbackform.php">Feedback</a>
          <a href="PaymentPage Final.php">Pay</a>
          <a href="SignIn.php">Logout</a>
        </nav>
  
      </header>
      <div class="content">
        

<div class="container">
    <h1>Ratings And Reviews</h1>
    <form method="POST" action="feedback.php"  id="form">
        <div class="input">
            <input type="text"  class="input-field" id="name" name="name" placeholder=" Name">
            <span style="color:red"  id="name_error"></span>
        </div>
        
        <br>
        <div class="input">
            <input type="text"  class="input-field" id="email" name="email" placeholder="Email">
            <span style="color:red"  id="email_error"></span>
        </div>
        
        <br>
        <div class="input">
            <input type="text"  class="input-field" id="subject" name="subject" placeholder=" Subject">
            <span style="color:red"   id="subject_error"></span>
        </div>
        

       
        <h1 style="text-align:left";>Comments</h1>    
        <div class="input">
            <textarea rows="10" cols="100"  class="inputfield1" name="comments" placeholder="Share your comments"></textarea>
        </div>
        
    
        
        
        
        
        
        

        <div>
            <h1>Rate us</h1>
            <ul>
                <li><label for="rating_1"><i class="fa-solid fa-star"></i></i></label><input type="radio" name="ratings" id="rating_1" value="1"/></li>
                <li><label for="rating_2"><i class="fa-solid fa-star"></i></label><input type="radio" name="ratings" id="rating_2" value="2"/></li>
                <li><label for="rating_3"><i class="fa-solid fa-star"></i></label><input type="radio" name="ratings" id="rating_3" value="3"/></li>
                <li><label for="rating_4"><i class="fa-solid fa-star"></i></label><input type="radio" name="ratings" id="rating_4" value="4"/></li>
                <li><label for="rating_5"><i class="fa-solid fa-star"></i></label><input type="radio" name="ratings" id="rating_5" value="5"/></li>
            </ul>

            <script>
                $('li').on('click',function(){
                    $('li').removeClass('active');
                    $('li').removeClass('secondary-active');
                    $(this).addClass('active');
                    $(this).prevAll().addClass('secondary-active');
                })
            </script>

            
    
            <div class="input">
                <input type="submit" class="submit" name value="Submit Feedback">
            </div>
        <script src="feedback.js"></script>
        </div>
    </form>
</div>




 














    
    













    
    
    
    
    
    
    
    
    
    
    
     
        

    <div> 
        <img class="bgimg" src="image/pic1.svg" alt="bgimage">  
    </div>



    
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