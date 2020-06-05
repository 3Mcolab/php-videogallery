
<?php
session_start();
header('location:login.php');
//Connect to MySQL Database
$conn=mysqli_connect('localhost:3306','root','','gitvideogallery');

//Get the data from URL
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$suburb=$_POST['suburb'];
$zipcode=$_POST['zipcode'];
$gender=$_POST['gender'];

//echo "$firstname $lastname $email $password $username $address $suburb $zipcode $gender";
//Select the database
$db_check="SELECT *FROM user WHERE email='$email' ";
//Execute Query
$db_result=mysqli_query($conn,$db_check);
$result_dbi=mysqli_num_rows($db_result);
if($result_dbi==1)
{
  echo "User email address is already registered";
}
else{
  $sql="INSERT INTO user(firstname,lastname,email,password,gender,suburb,address,zipcode)
              VALUES('$firstname','$lastname','$email','$password','$gender','$suburb',
                    '$address','$zipcode')";
  mysqli_query($conn,$sql);
  echo "User Registration Successful";
}

 ?>
