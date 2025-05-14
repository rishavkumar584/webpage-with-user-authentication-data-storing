
<?php
session_start();

 include 'databaseconnect.php';

 

 if(isset($_POST['login']))
 {
 	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="SELECT * FROM user WHERE username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	$count=mysqli_num_rows($result);
	
	if($count > 0)
	{			
		  $_SESSION["username"] = $_POST['username'];

			header('Location: http://localhost/Company/session_page.php');


	 	     }
	else
	{
		echo '

		<!DOCTYPE html>
		<html>
		<head><meta charset="utf-8">
				<title>Incorrect Login Credentials.net</title>
				<style>
.button {
  background-color: #3385ff;
  border: none;
  color: white;
  padding: 1% 2%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 85%;
  margin: 1% 1%;
  cursor: pointer;
  border-radius: 7px;
}
</style>


		<body><center><br><br><font face="Booman Old Style" size="4" color="red"><b>Incorrect Username or Password!!</b>
		</font><br><br>
		      <form action="Tata_Login_Page.html" method="POST">
		      <input type="submit" class="button" name="retry" value="Retry">
		      </form>
		      <br><font face="Bookman Old Style" size="3"><p><b>NOTE:</b> &nbsp If not registered once, go click on retry & go back to login page click register & register first then try to login</p></font>
		</center>
		</body>
		</html>';
		
	}
}

	   
 if(isset($_POST['register']))
{
  
echo'

<!DOCTYPE html>
<html>
<head><title>Register_Page.net</title>

<style>
.card {
  box-shadow: 0 0 25px 1px rgba(0,0,0,0.2);
  transition: 2s;
  width: 100%;
}
.card {
  box: 10px 10px 10px rgba(1,1,1,1);
  transition: 1s;
  width: 70%;
  height: 80%;
}

.card:hover {
  box-shadow: 0px 0px 25px 10px rgba(0,0,0,0.2);
}

.container {
  padding: 10px 10px;
}
</style>

<style> 
input[type=text] {
  width: 70%;
  padding: 14px 5px;
  margin: 1% 1%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}

input[type=password] {
  width: 70%;
  padding: 14px 5px;
  margin: 1% 1%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}


input[type=password]:focus {
  border: 3px solid #555;
}

input[type=text]:focus {
  border: 3px solid #555;
}

input[type=number] {
  width: 70%;
  padding: 14px 5px;
  margin: 1% 1%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=number]:focus {
  border: 3px solid #555;
}

input[type=date] {
  width: 70%;
  padding: 14px 5px;
  margin: 1% 1%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=date]:focus {
  border: 3px solid #555;
}

input[type=email] {
  width: 70%;
  padding: 14px 5px;
  margin: 1% 1%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=email]:focus {
  border: 3px solid #555;
}



</style>




<style>
.button {
  background-color: #3385ff;
  border: none;
  color: white;
  padding: 2% 10%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 1% 4%;
  cursor: pointer;
  border-radius: 7px;
}
</style>


<style>
img {
  border-radius: 50%;
}
</style>

<style>
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}
</style>







</head>

<body>

   <center>
    <table width="80%" height="550px">
      <tr>
        <td align="center">
    <font face="Bookman Old Style" size="5">TATA Associates</font>
    <br><br>
    </td>
  </tr>
      <tr>
  
<td align="center">
  <div class="card">
 <div class="container">

<table border="0" width="100%" height="50%">
<tr>
<td colspan="2">
<center><br>
<img src="User_Image.jpg" width="20%" height="80px">
<br><br><br><br>
</td>
</tr>
<tr>
<td align="center">

<form action="Process_register.php" method="post">
  
  <font face="Bookman Old Style" size="2">Name: </td><td></font><input type="text" name="Name" placeholder="Full name"></td>
  </tr>
  <tr>
  <td align="center">
  <font face="Bookman Old Style" size="2">Date of Birth:</font></td><td><input type="date" name="DOB"></td></tr>
  <tr>
  <td align="center">
  <font face="Bookman Old Style" size="2">Contact No:</td><td> </font> <input type="text" name="Phone" placeholder="Without using STD code"></td>
  </tr>
  <tr>
  <td align="center">
  <font face="Bookman Old Style" size="2">Gender: </font></td><td><input type="radio" value="Male" name="Gender">Male &nbsp
      <input type="radio" value="Female" name="Gender">Female &nbsp <input type="radio" value="Trans" name="Gender">Trans
      </td>
      </tr>
      <tr>
  <td align="center"><font face="Bookman Old Style" size="2">Blood Group: </font></td><td><input type="text" name="BdGrp"></td>
  </tr>
  <tr>
  <tr>
  <td align="center"><font face="Bookman Old Style" size="2">Marital Status:</font></td>
  <td>

  <select name="Marital">
  <option value="Blank">Select</option>
  <option value="Single">Single</option>
  <option value="Married">Married</option>
  <option value="Divorced">Divorced</option>
  <option value="Widow">Widow</option>
  </select>
</td></tr>
 
  <tr>
  <td align="center">
  <font face="Bookman Old Style" size="2">Email ID:</font></td><td><input type="email" name="username" placeholder="Email"></td></tr>
  <tr>
  <td align="center"><font face="Bookman Old Style" size="2">Password:</font></td><td><input type="password" name="password" placeholder="Choose a Password"></td>
  </tr>
  <tr>
<td align="center">
<font face="Bookman Old Style" size="2">Confirm Password: </font></td><td><input type="password" name="password" placeholder="Rewrite Password"></td></tr>

 
 <tr>
 <td align="center" colspan="2"> <br><br><input type="reset" class="button" name="reset" value="Back">

 <input type="reset" class="button" name="reset" value="Clear All"></td>
 <tr>
 <td colspan="2" align="center"><input type="submit" class="button" name="next" value="Next"></form>

</div>
</div>
</form>
</td>
</tr>
</table>

</center>
</body>
</html>';


if(isset($_POST['retry']))
{
  header('Location: http://localhost/Company/Tata_Login_Page.html');
 }
}

?>