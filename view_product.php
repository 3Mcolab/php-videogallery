<?php include 'header.php'; ?>
<?php
if(!isset($_SESSION['email'])){
  header('location:login.php');
}
$email=$_SESSION['email'];
 ?>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">Welecome <?php echo $_SESSION['email'] ?></span>
            <span class="breadcrumb-item active">List of Videos Available</span>
            <a href="upload_product.php"><button><font color="red">Add Video</font></button></a>
        </div>
    </div>
    <div class="container">
      <table class ="col-md-12">
        <tr>
          <th>Name</th>
          <th>Category</th>
          <th>Description</th>
          <th>Publish Date</th>
          <th>Video URL</th>
          <th>Actions</th>
        </tr>
        <?php
        //Connect to the database

        $conn=mysqli_connect('localhost:3306','root','','gitvideogallery');


        $db_check="SELECT *FROM videos WHERE user_id=(SELECT id from user WHERE email='$email')";
        $db_result=mysqli_query($conn,$db_check);
        if($db_result==true){
          while($data_query=mysqli_fetch_assoc($db_result))
          {
            $id=$data_query['id'];
            $name=$data_query['name'];
            $category = $data_query['category'];
            $description = $data_query['description'];
            $publish_date=$data_query['publish_date'];
            $video_url=$data_query['video_url'];
            ?>
            <tr>
              <td><?php echo$name;  ?></td>
              <td><?php echo$category; ?></td>
              <td><?php echo$description; ?></td>
              <td><?php echo$publish_date; ?></td>
              <td><iframe width="200" height="150" src="https://www.youtube.com/embed/<?php echo$video_url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </td>
              <td>
                <a href="update_product.php?id=<?php echo$id; ?>"><button class=" btn-success" type="button">UPDATE</button> </a>
                <a href="delete_product.php?id=<?php echo$id; ?>"><button class="btn-danger" type="button">DELETE</button> </a>
              </td>
            </tr>
            <?php


          }
        }

        ?>


      </table>
    </div>
    <?php include 'footer.php';?>
