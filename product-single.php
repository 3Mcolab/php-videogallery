<?php include 'header.php';?>

    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">View Video</span>
        </div>
    </div>
    <section class="product-sec">
        <div class="container">

            <?php
        //Connect to the database
        $id=$_GET['id'];
        $conn=mysqli_connect('localhost:3306','root','','gitvideogallery');
        $db_check="SELECT *FROM videos WHERE id='$id'";
        $db_result=mysqli_query($conn,$db_check);
        if($db_result==true){
            while($data_query=mysqli_fetch_assoc($db_result))
            {
              $name=$data_query['name'];
              $video_url=$data_query['video_url'];
              $category = $data_query['category'];
              $description=$data_query['description'];
              $publish_date=$data_query['publish_date'];
              $counts_videos = $data_query['counts_videos'];
              ?>

            <h1><?php echo$name; ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo$video_url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 slider-content">
                    <span>Description:</span>
                    <p><?php echo$description; ?></p>
                    <ul >
                        <li>
                            <span class="name">Category</span><span class="clm">:</span>
                            <span class="price"><?php echo$category; ?></span>
                        </li>
                        <li>
                            <span class="name">Views</span><span class="clm">:</span>
                            <span class="price"><?php echo$counts_videos+1; ?></span>
                        </li>
                    </ul>

                </div>
            </div>
            <?php
            $views_count = $data_query['counts_videos'];
            $views_count= $views_count+1;
            $sql="UPDATE videos SET counts_videos='$views_count'  WHERE id='$id'";
            //Execute Query
            $result=mysqli_query($conn,$sql);
            if($result==true){

            }
            else{
                echo "Error in Update";
            }
          }

        }

        ?>
        </div>


    </section>
    <section class="related-books">
        <div class="container">
        <h2>You may also like these videos</h2>
            <div class="recomended-sec">
                <div class="row">
        <?php
        //Connect to the database
        $id=$_GET['id'];
        $category=$_GET['category'];
        $conn=mysqli_connect('localhost:3306','root','','gitvideogallery');
        $db_check="SELECT *FROM videos WHERE category='$category' AND id!=$id LIMIT 4" ;
        $db_result=mysqli_query($conn,$db_check);
        if($db_result==true){
            while($data_query=mysqli_fetch_assoc($db_result))
            {
              $id=$data_query['id'];
              $name=$data_query['name'];
              $video_url=$data_query['video_url'];
              $category = $data_query['category'];
              $description=$data_query['description'];
              $publish_date=$data_query['publish_date'];
              $counts_videos = $data_query['counts_videos'];
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
        </div></div>
        </div>
    </section>
    <?php include 'footer.php';?>
