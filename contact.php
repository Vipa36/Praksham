   
<?php  

   session_start();
  $link = mysqli_connect("localhost","id9303517_prak", "samint@87","id9303517_prakdb",21);

    if (mysqli_connect_error()) {
        
        die("there was an error");
    }
    
        if($_POST)
     {
   $query= "INSERT INTO contact(name, phone, email, message) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['phone'])."', '".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['message'])."')";
                    mysqli_query($link, $query);
            
     }
    

  include("header.php");

?>
    
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background:#2e6399;">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12">
              <h1 class="headbig">Contact Us</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section-big mb60">
      <div class="container history text-center">
          <div>
            <h2>Get In Touch</h2><hr>
          </div>
        <!-- </div> -->
      </div>
      </section>
        
      <section class="mb60">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form id="contact" action="contact.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8" required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input id="consub" type="submit" value="Send Message" class="btn btn-primary submit">
                </div>
              </div>
            </form>
          </div>
          
          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>C-21, Sarita Vihar, New Delhi-110076</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+91 8816961616</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>info@praksham.org</span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>



<?php

  include("footer.php");

?>