<?php include 'header.php';?>
    <section class="slider">
        <div class="container">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slide">
                        <img src="images/slide1.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to infygallery</h3>
                                <h5>Share a video to show your talents</h5>
                                <a href="product.php" class="btn">view talents</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recomended-sec">
      <div class="container">
      <div class="title">
          <h2>Highly recommendes videos</h2>

      </div>
      <div class="recomended-sec">
      <div class="row">
      <?php
          //Connect to the database

          $conn=mysqli_connect('localhost:3306','root','','gitvideogallery');
          $db_check="SELECT * FROM videos ORDER BY publish_date DESC LIMIT 4" ;
          $db_result=mysqli_query($conn,$db_check);
          if($db_result==true){
              while($data_query=mysqli_fetch_assoc($db_result))
              {
                  $id=$data_query['id'];
                  $name=$data_query['name'];
                  $description=$data_query['description'];
                  $category = $data_query['category'];
                  $counts_videos = $data_query['counts_videos'];
                  $video_url=$data_query['video_url'];
              ?>

                  <div class="col-lg-3 col-md-6">
                      <div class="item">
                      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo$video_url; ?>" frameborder="0" allow="accelerometer;encrypted-media; gyroscope; picture-in-picture"></iframe>
                          <h3><?php echo$name;?></h3>
                          <h6><span class="price"><?php echo$counts_videos; ?></span> / <a href="video-single.php?id=<?php echo$id; ?>&&category=<?php echo$category;?>">Views</a></h6>
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

      <div class="btn-sec">
          <a href="product.php" class="btn gray-btn">view all videos</a>
      </div>
  </div>
    </section>

  <?php include 'footer.php';?>
