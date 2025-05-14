<?php
 session_start();
 session_destroy();

echo'
<!DOCTYPE html>
<html>
<head><title>Logged Out Successfully</title></head>
<body>
<center>
<br><br><br><br>
<font face="Bookman Old Style" size="4">
You have been Logged Out Successfully</font>
<br><br>

<br>
<form action="Tata_homepage.html" method="post">
<input type="submit" value="Go to Homepage">
</center>
</body>
</html>';
?>