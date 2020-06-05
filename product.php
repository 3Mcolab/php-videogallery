
<?php include 'header.php';?>
<?php
    $conn=mysqli_connect('localhost:3306','root','','gitvideogallery');
?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.php">Home</a>
        <span class="breadcrumb-item active">Video</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h2>All videos</h2>
        <div class="recomended-sec">
            <div class="row">
            <?php
                $db_check="SELECT * FROM videos ORDER BY publish_date" ;
                $db_dbi=mysqli_query($conn,$db_check);
                if($db_dbi==true){
                    while($data_query=mysqli_fetch_assoc($db_dbi)){
                    $id=$data_query['id'];
                    $name=$data_query['name'];
                    $category = $data_query['category'];
                    $description=$data_query['description'];
                    $counts_videos = $data_query['counts_videos'];
                    $video_url=$data_query['video_url'];
            ?>

                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo$video_url; ?>" frameborder="0" allow="accelerometer;encrypted-media; gyroscope; picture-in-picture"></iframe>
                        <h3><?php echo$name;?></h3>
                        <h6><span class="price"><?php echo$counts_videos; ?></span> / <a href="video-single.php?id=<?php echo$id; ?>&&category=<?php echo$category;?>">View</a></h6>
                        <div class="hover">
                            <a href="product-single.php?id=<?php echo$id; ?>&&category=<?php echo$category;?>"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>

    </div>
</section>
<?php include 'footer.php';?>
