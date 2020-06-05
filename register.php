<?php include 'header.php';?>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">Register</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>My Account / REgister</h1>
            <div class="form">
                <form class="" action="useregistration.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="email">Email:</label>
                            <input type="text" name="email" value="" placeholder="subodh.paudel@atic.edu.au" required>
                        </div>
                        <div class="col-md-6">
                          <label for="password">Password:</label>
                            <input type="password" name="password" value="" required>
                        </div>
                        <div class="col-md-6">
                          <label for="firstname">Firstname:</label>
                          <input type="text" name="firstname" value="" placeholder="Subodh" required>
                        </div>
                        <div class="col-md-6">
                          <label for="lastname">Lastname:</label>
                          <input type="text" name="lastname" value="" placeholder="Paudel" required>
                        </div>
                        <div class="col-md-4">
                          <label for="address">Address</label>
                          <input type="text" id="address" name="address" value="">
                        </div>
                        <div class="col-md-4">
                          <label for="suburb">Suburb:</label>
                          <input type="text" id="suburb" name="suburb" value="">
                        </div>
                        <div class="col-md-4">
                          <label for="zipcode">Zipcode:</label>
                          <input type="text" id="zipcode" name="zipcode" value="">
                        </div>
                        <div class="col-md-6">
                          <label for="gender">Gender:</label>
                          <select name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <button type="submit" class="btn black">Register</button>
                            <h5>Already Registered? <a href="login.php">Login here</a></h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
  <?php include 'footer.php';?>
