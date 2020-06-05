<?php
  session_start();
  header('location:view_product.php');
  if(!isset($_SESSION['email'])){
    header('location:login.php');
  }else{
    $email=$_SESSION['email'];

    $conn=mysqli_connect('localhost:3306','root','','gitvideogallery');
    //Get the data from URL
    $id=$_POST['id'];
    $name=$_POST['name'];
    $video_url=$_POST['video_url'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    $publish_date=date('Y/m/d');

    $get_user="SELECT * FROM user WHERE email='$email'";

    $user_result=mysqli_query($conn,$get_user);

    if($user_result==true){
      while($data_query=mysqli_fetch_assoc($user_result))
      {
        $user_id=$data_query['id'];
        if(!empty($id)){
          $sql="UPDATE videos SET name='$name', video_url='$video_url',category='$category', description='$description',
          publish_date='$publish_date', user_id='$user_id'
          WHERE id='$user_id'";
          //Execute Query
          $db_result=mysqli_query($conn,$sql);
          if($db_result==true){
            header('location:view_product.php');

          }else{
            echo "Error in Update";
          }
        }else{

          $db_check="SELECT *FROM videos WHERE name='$name' ";

          $db_result=mysqli_query($conn,$db_check);
          $result_dbi=mysqli_num_rows($db_result);
          if($result_dbi==1)
          {
            echo "Video is already created!!";
          }else{
            $sql="INSERT INTO videos(name, category, description, video_url, publish_date, user_id)
                            VALUES('$name','$category','$description', '$video_url', '$publish_date',$user_id)";
              mysqli_query($conn,$sql);
              header('location:view_product.php');
          }
        }
      }
    }
  }

?>
