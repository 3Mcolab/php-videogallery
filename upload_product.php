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
            <span class="breadcrumb-item active">Upload Video</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>Upload Video</h1>
            <div class="form">
                <form class="" action="videoUpload.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="">
                            <label for="name">Name of Video:</label>
                            <input type="text" name="name" value="" placeholder="Fantasy World" required>
                            <label for="video_url">Video URL</label>
                            <input type="text" name="video_url"value="" placeholder="FMW5vLCdPks">
                            <label for="description">Description</label>
                            <input type="text" name="description"value="" placeholder="">
                            <label for="category">Category</label>
                            <select name="category">
                              <option value="Classic">Classic</option>
                              <option value="Adventerous">Adventerous</option>
                              <option value="Nature">Nature</option>
                              <option value="Others">Others</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-lg-8 col-md-12">
                            <button type="submit" class="btn black">Upload Video</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php include 'footer.php';?>
