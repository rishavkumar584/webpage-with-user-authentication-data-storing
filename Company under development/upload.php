<?php
session_start();
$Email=$_SESSION["username"];


include 'databaseconnect.php';

    
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
        
  if($error === 0){

        if($img_size > 125000)
        {
            
           header("Location: http://localhost/Company/Large%20File.html");
        }

        else{
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png");

       

       if(in_array($img_ex_lc, $allowed_exs))
       {
          $new_img_name = $Email.'.'.$img_ex_lc;
          $img_upload_path = 'uploads/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);


         
          $sql = 
          "UPDATE user
           SET Profile_Image = '$new_img_name'
           WHERE username = '$Email'";
          
          mysqli_query($con,$sql);

          header('Location: http://localhost/Company/Register_successfull.html');
}

else{
    echo "File format not supported";
}
}
}
else{
    echo "Unexpected Error Occured ";
    echo '<br>';
    echo "Image not uploaded";
}

?>