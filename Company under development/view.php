<?php

session_start();
$Email=$_SESSION["username"];
include 'databaseconnect.php';


echo $Email;

$sql = "SELECT * FROM user WHERE Profile_Image='$Email.jpg'";
      $res = mysqli_query($con, $sql);

      if(mysqli_num_rows($res) > 0){
        while($user = mysqli_fetch_assoc($res)){
            ?>

            <div class="alb">
                 <img src="uploads/<?=$user['Profile_Image']?>">
                </div>
<?php } }?>
