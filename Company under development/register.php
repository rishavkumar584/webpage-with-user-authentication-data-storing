<?php

 if(isset($_POST['register']))
{
echo'<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register User</title>


<style>
.card {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: 0s;
  width: 50%;
}
.card {
  box: 10px 10px 0 rgba(1,1,1,1);
  transition: 0s;
  width: 60%;
  height: 60%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 10px 10px;
}
</style>


<style> 
input[type=text] {
  width: 90%;
  padding: 14px 5px;
  margin: 0px 0;
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
  width: 90%;
  padding: 14px 5px;
  margin: 0px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=password]:focus {
  border: 3px solid #555;
}
</style>


<style>
.button {
  background-color: #3385ff;
  border: none;
  color: white;
  padding: 10px 125px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 7px;
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
	<center><br>
		REGISTER USER
		<br>
		<form action="Process_register.php" method="post">
  <input type="text" name="username" placeholder="Phone number,username, or email">
 <br><br><input type="password" name="password" placeholder="Password">
<br><br>
 <input type="submit" name="register" value="Register">
</form>

<td width="50%" height="70%">
<div class="card">
 <div class="container">
<center>
<img src="HEADING 2.jpg" width=200px height=50px />
<br></br>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
</center>
</body>
</html>';

}

else{
	echo"Invalid Submission Done Please Retry";
}
?>
