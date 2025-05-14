<?php

session_start();


include 'databaseconnect.php';
    
    if(empty($_SESSION["username"]))
    {
    	echo "Invalid Login Made ";
    	echo "Session Expired";
    }
   
    
else{
	$Email = $_SESSION["username"];
	$query="SELECT * FROM user WHERE username='$Email'";
	$result=mysqli_query($con,$query);
	$count=mysqli_num_rows($result);

	if($count > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			

echo'
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Session Page.net</title>
</head>

<body>


   <center>
	<font face="Bookman Old Style" size="6">TATA Associates</font>
	 <br><br>

    <table border="3" width="80%" height="500rem">
		
		<tr><td>
      
         <form action="Profile.php" target="display_center">
			

			<input type="submit" name="profile" value="Profile"></form>
			</td>
			<td  bgcolor="" width="80%" rowspan="9">
				
			<iframe src="Profile.php" width="100%" height="500rem" name="display_center"></iframe>
            
			</td>

			</tr>
		<tr><td><a href="#Account_statements">Accounts Statments</a></td></tr>
		<tr><td>

		<a href="Left_table_bar.php" name="profile">Something Here</a></td>
			</td></tr>
		
		<tr><td><a href="#Memebership_details">Membership Details</a></td></tr>				
		<tr><td><a href="#Attendace_details">Attendance Details</a></td></tr>
		<tr><td><a href="#Apply_leave">Apply for leave</a></td></tr>
		<tr><td><a href="#Manager_details">Manager Details</a></td></tr>
		<tr><td><a href="#Lodge_complaint">Lodge Complaint</a></td></tr>
		<tr><td><a href="Logout.php">Logout</a></td></tr>
				
	</table>
		
			     
</body>
</html>';
}
}
else{
	echo "User not registered";
	echo "Unable to fetch data";
	echo "Please Login again";
}
}
?>