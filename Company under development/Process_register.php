<?php

session_start();

include 'databaseconnect.php';

if(isset($_POST['next']))
{
	
  if(empty($_POST['username']) && empty($_POST['password']))

  {
    echo "Please fill in the fields";

}
  else
{	
    $username=$_POST['username'];
	$password=$_POST['password'];
    $DOB=$_POST['DOB'];
    $Name=$_POST['Name'];
    $Phone=$_POST['Phone'];
    $BdGrp =$_POST['BdGrp'];
    $Gender=$_POST['Gender'];
    $Marital=$_POST['Marital'];

    
    
       $sql="insert into user(username,password,Name,DOB,Gender,Phone,BdGrp,Marital)
	   values('$username','$password','$Name','$DOB','$Gender','$Phone','$BdGrp','$Marital')";

    if (mysqli_query($con,$sql))
    {
         $_SESSION["username"] = $_POST['username'];
        header('Location: http://localhost/Company/form.php');
       }

       else 
        {   
            echo"Error Connecting to database";
               }
}
}
?>
