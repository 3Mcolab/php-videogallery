<?php
session_start();
//Connect to MySQL Database
$conn=mysqli_connect('localhost','root','','gitvideogallery');

//Get the data from URL
$email=$_POST['email'];
$password=$_POST['password'];

//Select the database
$db_check="SELECT *FROM user WHERE email='$email' && password='$password' ";
//Execute Query
$db_result=mysqli_query($conn,$db_check);
$result_dbi=mysqli_num_rows($db_result);
if($result_dbi==1)
{
  echo "Login Successful";
  $_SESSION['email']=$email;
  header('location:index.php');
}
else{
  echo"Password did not match or user is not registered";
  header('location:login.php');

}

 ?>
