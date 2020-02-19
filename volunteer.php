
<?php

  session_start();
  $link = mysqli_connect("localhost","id9303517_prak", "samint@87","id9303517_prakdb",21);

    if (mysqli_connect_error()) {
        
        die("there was an error");
    }
    
    
      if($_POST)
      {
   $query= "INSERT INTO volunteer (fname, lname, phone, email, address, city, state, code, message) VALUES ('".mysqli_real_escape_string($link, $_POST['fname'])."', '".mysqli_real_escape_string($link, $_POST['lname'])."',  '".mysqli_real_escape_string($link, $_POST['phone'])."',  '".mysqli_real_escape_string($link, $_POST['email'])."',  '".mysqli_real_escape_string($link, $_POST['address'])."',  '".mysqli_real_escape_string($link, $_POST['city'])."', '".mysqli_real_escape_string($link, $_POST['state'])."',  '".mysqli_real_escape_string($link, $_POST['code'])."', '".mysqli_real_escape_string($link, $_POST['message'])."')";
                    mysqli_query($link, $query);
            

      }

  include("header.php");

?>

    <section class="home-slider-loop-false  inner-page owl-carousel">
      <!-- <div class="slider-item" style="background-image: url('img/slider-1.jpg');"> -->
      <div class="slider-item" style="background:#2e6399;">

        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12">
              <h1 class="headbig">Join Us</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section-big mb60">
      <div class="container history text-center">
          <div>
            <h2>Join us as Volunteer</h2><hr>
          </div>
        <!-- </div> -->
      </div>
      </section>
        
      <section class="mb60">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form id="volunteer "action="volunteer.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="tel" id="phone" name="phone" class="form-control" pattern="[1-9]{1}[0-9]{9}" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="abc@xyz.com" required>
                </div>
              </div>
              <div class="row">
              <div class="col-md-12 form-group">
                  <label for="address">Address</label>
                  <input type="text" id="address" name="address" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="city">City</label>
                  <input type="text" id="city" name="city" class="form-control "  required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" class="form-control " required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="code">Postal Code</label>
                  <input type="tel" id="code" name="code" class="form-control " required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Volunteer Notes</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="4" placeholder="Want to mention something..."></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input id="volsub" type="submit" value="Join" class="btn btn-primary submit">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


<?php

  include("footer.php");

?>