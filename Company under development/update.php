<?php
session_start();
$Email = $_SESSION["username"];

include 'databaseconnect.php';


 if(isset($_POST['update_name'])){


        $Name = $_POST['new_name'];
        $query = "UPDATE user 
                  SET Name = '$Name'
                  WHERE username = '$Email'";
        $edit_query = mysqli_query($con, $query);
        header('Location: http://localhost/Company/session_page.php');
       

      }

      if(isset($_POST['update_gender'])){
      
        $Gender = $_POST['new_gender'];

        $query = "UPDATE user 
                  SET Gender = '$Gender'
                  WHERE username = '$Email'";
        $edit_query = mysqli_query($con, $query);
        header('Location: http://localhost/Company/session_page.php');


      }

      if(isset($_POST['update_dob'])){
      
        $DOB = $_POST['new_dob'];

        $query = "UPDATE user 
                  SET DOB = '$DOB'
                  WHERE username = '$Email'";
        $edit_query = mysqli_query($con, $query);
        header('Location: http://localhost/Company/session_page.php');


      }

 if(isset($_POST['update_bg'])){
      
        $Bg = $_POST['new_bg'];

        $query = "UPDATE user 
                  SET BdGrp = '$Bg'
                  WHERE username = '$Email'";
        $edit_query = mysqli_query($con, $query);
        header('Location: http://localhost/Company/session_page.php');


      }

       if(isset($_POST['update_ms'])){
      
        $Ms = $_POST['new_ms'];

        $query = "UPDATE user 
                  SET Marital = '$Ms'
                  WHERE username = '$Email'";
        $edit_query = mysqli_query($con, $query);
        header('Location: http://localhost/Company/session_page.php');


      }



           if(isset($_POST['update_pn'])){
      
        $Pn = $_POST['new_pn'];

        $query = "UPDATE user 
                  SET Phone = '$Pn'
                  WHERE username = '$Email'";
        $edit_query = mysqli_query($con, $query);
        header('Location: http://localhost/Company/session_page.php');


      }
      
      
      
         

?>