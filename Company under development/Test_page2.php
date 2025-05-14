<?php

session_start();
$_SESSION['username'] = $_POST['username'];
  
$_SESSION['password'] = $_POST['password'];
  
$_SESSION['age'] = $_POST['age'];

echo "Username is";
echo username;
echo "Password is";
echo password;
           
?>