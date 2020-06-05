<?php include 'header.php'; ?>
<?php
if(!isset($_SESSION['email'])){
  header('location:login.php');
}
?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.php">Home</a>
        <span class="breadcrumb-item active">Profile</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <?php
            $db_check="SELECT *FROM user WHERE email='$email'";
            $db_result=mysqli_query($conn,$db_check);

            if($db_result==true){
                while($data_query=mysqli_fetch_assoc($db_result))
                {
                    $firstname= $data_query['firstname'];
                    $lastname= $data_query['lastname'];
                    $fullname = $firstname.' '.$lastname;
                    $address = $data_query['address'];
                    $suburb = $data_query['suburb'];
                    $zipcode = $data_query['zipcode'];
                    $count="SELECT *FROM videos WHERE user_id=(SELECT id from user WHERE email='$email')";
                    $count_dbi=mysqli_query($conn,$count);
                    if($count_dbi== true){
                        $video_upload = mysqli_num_rows($count_dbi);
        ?>
       <h1><?php echo"$fullname"; ?></h1>

        <div class="row">
            <div class="col-md-6">
                <img>
            </div>
            <div class="col-md-6 slider-content">
                <span>Email:</span>
                <p><?php echo$email; ?></p>
                <ul >
                    <li>
                        <span class="name">Address</span><span class="clm">:</span>
                        <span class="price"><?php echo$address; ?><?php echo$suburb; ?><?php echo$zipcode; ?></span>
                    </li>
                    <li>
                        <span class="name">Videos Upload</span><span class="clm">:</span>
                        <span class="price"><?php echo$video_upload; ?></span>
                    </li>
                    <a href="view_product.php" > <button class="col-md-5 btn btn-lg btn-primary ">My Videos</button></a>
                </ul>
            </div>
        </div>
                <?php
                    }
                }
            }
        ?>
    </div>
</section>
<?php include 'footer.php';?>
