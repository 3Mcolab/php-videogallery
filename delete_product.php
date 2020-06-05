<?php
session_start();
$conn=mysqli_connect('localhost:3306','root','','gitvideogallery');
$id=$_GET['id'];
$sql="DELETE FROM videos WHERE id=".$id;
$db_result=mysqli_query($conn,$sql);
if($db_result==true){
  header('location:view_product.php');
}
else{
  echo"No video found in our database! Server Error!!";
}




 ?>
