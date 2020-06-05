<?php include 'header.php';?>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">Login</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>My Account / Login</h1>
            <div class="form">
                <form class="" action="login_url.php" method="POST">
                    <div class="row">
                        <div class="col-md-5">
                          <label for="email">Email:</label>
                          <input type="email" name="email" value="" placeholder="Enter Email">
                        </div>
                        <div class="col-md-5">
                          <label for="password">Password:</label>
                          <input type="password" name="password" value="" placeholder="Enter Password">
                        </div>
                        <div class="col-lg-8 col-md-12">

                            <button type="submit" class="btn black">Login</button>
                            <h5>not Registered? <a href="register.php">REgister here</a></h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
