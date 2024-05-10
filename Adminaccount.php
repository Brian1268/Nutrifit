<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="CSS/Adminaccount.css">
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');</style>
        <title>Admin | Manage User Acc</title>   
</head>

<body>

    <div class="navigation">

        <div class="logo--">
          <a href="#">
            <img class="LOGO" src="image/Web-Logo.png">
          </a>
        </div>
  
        <nav class="navbar--">
        <a href="Diet-Plans.php">Diet Planning</a>
        <a href="BMIcal.php">BMI Calculator</a>
        <a href="scheduling.php">Health Checkup</a>
          <a href="aboutus.php">About Us</a>
          <a href="feedbackform.php">Feedback</a>
          <a href="Adminlogin.php">Logout</a>
      
          
        </nav>
    </div>
  <div class="manage">
    <h3 class="title">Manage User Account</h3>
    <form class="delete" action="Adminaccdelete.php" method="POST">
    <div class="input2">
                <input type="number" class="input-field" placeholder="Enter ID to delete" name="ID" required="Confirm">
                <input type="submit" class="submit-field-delete" value="DELETE">
      </div>
        </form>  
    <form class="Update" action="" method="POST">
    <div class="input2">
        <div class="input2" >
            <a href="editregdetails.php" ><input type="button" class="submit-field-update" value="Update"></a>
          
    </div>
    </div>
    </form>
    </div>
    <div class="content">
    <div class="form1">
        <div class="line">
           <b> <a>User Profiles |</a></b></label><br><br></div>
                    <?php

        require 'conn.php';

        $sql="SELECT ID,FullName,Email,PhoneNumber,Password FROM registration";

        $result=$conn->query($sql);

          if ($result->num_rows > 0) {
          echo "<table border='1'>";
          echo "<tr>";
          echo "<th>ID</th>";
          echo "<th>Full Name</th>";
          echo "<th>Email</th>";
          echo "<th>Phone Number</th>";
          echo "<th>Password</th>";
          echo "</tr>";
      
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>"."<td>".$row["FullName"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["PhoneNumber"]."</td>"."<td>".$row["Password"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row["ID"]."</td>"."<td>".$row["FullName"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["PhoneNumber"]."</td>"."<td>".$row["Password"]."</td>";
              echo "</tr>";
          }
          echo "</table>";
          while($row=$result->fetch_assoc())
          {
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>"."<td>".$row["FullName"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["PhoneNumber"]."</td>"."<td>".$row["Password"]."</td>";
            echo "</tr>";
          }
          echo "</table>";
        }
        else {
          echo "No Reselts";
        }

        $conn->close();
        ?>
        </div>
    
          <img class="updateimg" src="image/img13.svg">
        </div>


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