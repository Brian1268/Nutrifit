<?php

          require 'main.php';

          $ID= $_POST["ID"];
          $FullName=$_POST["FullName"];
          $Email=$_POST["Email"];
          $PhoneNumber=$_POST["PhoneNumber"];
          $Password=$_POST["Password"];

          //delete query 
          $sql = "UPDATE registration
            SET FullName = '$FullName',
            Email = '$Email',
            PhoneNumber = '$PhoneNumber',
            Password = '$Password'
            WHERE ID = $ID";

          if($conn->query($sql))
          {
              echo '<script>alert("successful!");</script>';
              echo ' <script>location.href="Adminaccount.php"</script>';
              echo ' <script>location.reload()</script>';
          }

          else
          {
              echo 'No user related to entered ID';
             
          }
          $con->close();
    ?>