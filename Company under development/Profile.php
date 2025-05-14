<?php
session_start();
$Email = $_SESSION["username"];

include 'databaseconnect.php';

    

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
	<style>
img {
  border-radius: 50%;
}
</style>

<style>
.card {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: 0s;
  width: 50%;
}
.card {
  box: 100px 100px 0 rgba(1,1,1,1);
  transition: 0s;
  width: 100%;
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
  width: 40%;
  padding: 5px 5px;
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
  padding: 10px 5px;
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




<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#myDIVN {
  width: 60%;
  padding: 0% 0;
  text-align: left;
  background-color: white;
  margin-top: 10px;
}
</style>

<style>
#myDIVG {
  width: 60%;
  padding: 0% 0;
  text-align: left;
  background-color: white;
  margin-top: 10px;
}
</style>


<style>
#myDIVD {
  width: 60%;
  padding: 0% 0;
  text-align: left;
  background-color: white;
  margin-top: 10px;
}
</style>

<style>
#myDIVB {
  width: 60%;
  padding: 0% 0;
  text-align: left;
  background-color: white;
  margin-top: 10px;
}
</style>


<style>
#myDIVM {
  width: 60%;
  padding: 0% 0;
  text-align: left;
  background-color: white;
  margin-top: 10px;
}
</style>


<style>
#myDIVP {
  width: 60%;
  padding: 0% 0;
  text-align: left;
  background-color: white;
  margin-top: 10px;
}
</style>




</head>
<body>
	
	<center>
	
   
    <table border="1" width="100%" height="500rem">
		
		<tr>
		<td colspan="2" align="center">
       ';

      

$sql = "SELECT * FROM user WHERE Profile_Image='$Email.jpg'";
      $res = mysqli_query($con, $sql);

      if(mysqli_num_rows($res) > 0){
        while($user = mysqli_fetch_assoc($res)){
            ?>

            <div class="alb">
                 <img width="30%" height="200rem" src="uploads/<?=$user['Profile_Image']?>">
                </div>
<?php } }





       echo'

	
		</td>
		</tr>
		
		<tr>
		<td>
		
		  <font face="Bookman Old Style" size="2">Name: </font>';
          echo '&nbsp';
		  echo $row['Name'];
		  echo' &nbsp <button onclick="myFunctionN()">Edit</button>
		        <div id="myDIVN" style="display:none;">
		        <form action="update.php"  method="post">
            <input type="text" name="new_name" placeholder="Full name">
            &nbsp <input type="submit" name="update_name" value="Change">
            </form></div>';


		  echo'
		</td> <td ><font face="Bookman Old Style" size="2">Gender: </font>';
        echo '&nbsp';
		echo $row['Gender'];

		echo' &nbsp <button onclick="myFunctionG()">Edit</button>
		        <div id="myDIVG" style="display:none;">
		        <form action="update.php"  method="post">
            <input type="text" name="new_gender" placeholder="Male/Female/Trans">
            &nbsp <input type="submit" name="update_gender" value="Change">
            </form></div>';

		echo '</td>
		</tr>

		<tr>
		<td><font face="Bookman Old Style" size="2">Date of birth: </font>';
		echo '&nbsp';
		echo $row['DOB'];

		echo' &nbsp <button onclick="myFunctionD()">Edit</button>
		   <div id="myDIVD" style="display:none;">
		        <form action="update.php"  method="post">
            <input type="text" name="new_dob" placeholder="DD-MM-YYYY">
            &nbsp <input type="submit" name="update_dob" value="Change">
            </form></div>';

		echo '</td>
		<td><font face="Bookman Old Style" size="2">Blood Group: </font>';
		echo '&nbsp';
		echo $row['BdGrp'];

				echo' &nbsp <button onclick="myFunctionB()">Edit</button>
		        <div id="myDIVDB" style="display:none;">
		        <form action="update.php"  method="post">
            <input type="text" name="new_bg" placeholder="Blood Group">
            &nbsp <input type="submit" name="update_bg" value="Change">
            </form></div>';
    	echo '</td>';

    	echo'


		<tr>
		  <td><font face="Bookman Old Style" size="2">Age:</font>';
		echo '&nbsp';
		echo $row['Age'];

		echo '</td>	
		<td><font face="Bookman Old Style" size="2">Marital Status: </font>';
		echo '&nbsp';
		echo $row['Marital'];

			echo' &nbsp <button onclick="myFunctionM()">Edit</button>
		        <div id="myDIVDM" style="display:none;">
		        <form action="update.php"  method="post">
            <input type="text" name="new_ms" placeholder="Martial Status">
            &nbsp <input type="submit" name="update_ms" value="Change">
            </form></div>';

		echo '</td>
		
		
		</tr>';

		echo '</td>
		 </tr>
		 <tr>
		  <td><font face="Bookman Old Style" size="2">Phone No. </font>';
		echo $row['Phone'];

		echo' &nbsp <button onclick="myFunctionP()">Edit</button>
		        <div id="myDIVDP" style="display:none;">
		        <form action="update.php"  method="post">
            <input type="text" name="new_pn" placeholder="Phone No.">
            &nbsp <input type="submit" name="update_pn" value="Change">
            </form></div>';

		echo '</td>
		  <td>Email Address: </font>';
		echo '&nbsp';
		echo $row['username'];

		echo '</td>
		</tr>
		<tr>
		<td align="center" colspan="2">
		<form action="update.php" method="post">
		<input type="submit" name ="update" value="Edit All">
    </form>
    </td>
    </tr>

	</table>
	</center>

	<script>
function myFunctionN() {
  var x = document.getElementById("myDIVN");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<script>
function myFunctionG() {
  var x = document.getElementById("myDIVG");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<script>
function myFunctionD() {
  var x = document.getElementById("myDIVD");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<script>
function myFunctionB() {
  var x = document.getElementById("myDIVDB");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<script>
function myFunctionM() {
  var x = document.getElementById("myDIVDM");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<script>
function myFunctionP() {
  var x = document.getElementById("myDIVDP");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

	</div>
	</div>
	</body>
    </html>';

}
}
?>
			     
