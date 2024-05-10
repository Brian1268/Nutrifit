<!DOCTYPE html>
<html>
<head>
    <title>NutriFit</title>
    <link rel="stylesheet" href="CSS/contact us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/footer.css">
</head>
<body>
    

   <div class="topic">
        <a><b>Contact Us</b></a>
    </div>  
 <div class="b-row">
        <div class="b-col">
            <img class="body-img" src="image/telephone.png">
            <a>+94 777185342</a>
        </div>
        <div class="b-col1">
            <iframe class="b-col" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.815142875895!2d79.84810437142136!3d6.
             912693418525666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596aaa8742d9%3A0xced655398fd4d621!2sSLIIT%20Metropolitan%20Campus!5e0!3m2!1sen!2slk!4v1713374629077!5m2!1sen!2slk"
             style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="b-col">
            <img class="body-img" src="#">
            <a>nutrifit@gmail.com</a>
        </div>
        <div class="b-col">
            <img class="body-img" src="#">
            <a>Social Links</a>
        </div>
    </div> 

    <br><br>
    <div class="box">
    <form method="POST" action="contactus1.php" id="form">
        <div class="welcome">
            <a class="question"><b>What do you want to know?</b></a><br>
        </div>

            <br>
            
            <input type="text" id="name" class="input-details" name="name" placeholder="Name" required>
            <span style="color:red;" class="error" id="name_error"></span>
            <input type="text" id="email" class="input-details" name="email" placeholder="Email" required >
            <span style="color:red;margin-left:25px"  id="email_error"></span>
            <input type="text" id="subject" class="input-details" name="subject" placeholder="Subject" required>
            <span style="color:red"  id="subject_error"></span>
            <div class="flex">
            <input type="text" id="message" class="input-details" name="message" placeholder="Message" required>
            <span style="color:red"  id="message_error"></span>
            <div class="input" >
                <input type="submit" class="submit-field" value="Submit">
            </div>

    </form>
    </div>
    <br><br>

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