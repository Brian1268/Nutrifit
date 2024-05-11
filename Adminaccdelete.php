<?php

          require 'main.php';

          $ID= $_POST["ID"];

          //delete query 
          $sql = "DELETE FROM registration WHERE ID = $ID";

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