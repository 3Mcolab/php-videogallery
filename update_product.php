<?php include 'header.php'; ?>
<?php
if(!isset($_SESSION['email'])){
  header('location:login.php');
}
 ?>
<div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">Welecome <?php echo $_SESSION['email'] ?></span>
            <span class="breadcrumb-item active">Update Video</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>Update Video</h1>
            <div class="form">
              <?php
              //Getting the values from url
              $id=$_GET['id'];
              $conn=mysqli_connect('localhost:3306','root','','gitvideogallery');
              $db_check="SELECT *FROM videos WHERE id=".$id;
              $db_result=mysqli_query($conn,$db_check);
              if($db_result==true){
                $data_query=mysqli_fetch_assoc($db_result);
                $name=$data_query['name'];
                $description=$data_query['description'];
                $category = $data_query['category'];
                $publish_date=$data_query['publish_date'];
                $video_url=$data_query['video_url'];
            }
               ?>
                <form class="" action="videoUpload.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="<?php echo$id; ?>">
                            <label for="name">Vidoe Name:</label>
                            <input type="text" name="name" value="<?php echo$name; ?>" required>
                            <label for="video_url">Video URL</label>
                            <input type="text" name="video_url"value="<?php echo$video_url; ?>" >
                            <label for="category">Category</label>
                            <input type="text" name="category"value="<?php echo$category; ?>" >
                            <label for="description">Description</label>
                            <input type="text" name="description"value="<?php echo$description; ?>" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12">
                            <input type="hidden" name="id" value="<?php echo$id; ?>">
                            <button type="submit" class="btn black">Update Video</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
