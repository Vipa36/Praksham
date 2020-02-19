   
<?php  

   session_start();
  $link = mysqli_connect("localhost","id9303517_prak", "samint@87","id9303517_prakdb",21);

    if (mysqli_connect_error()) {
        
        die("there was an error");
    }
    
        if($_POST)
     {
   $query= "INSERT INTO pledge(fname, lname, email, city, country) VALUES ('".mysqli_real_escape_string($link, $_POST['fname'])."', '".mysqli_real_escape_string($link, $_POST['lname'])."', '".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['city'])."', '".mysqli_real_escape_string($link, $_POST['country'])."')";
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
              <h1 class="headbig">take a Pledge</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section-big mb60">
      <div class="container history text-center">
          <div>
            <h2>Pledge for enviroment</h2>
            <p>Nature gives us everything we need. It treats us like our mother. It never complains. It is our responsiblilty to protect the nature from ourselves. We are killing mother Earth's millions of children everyday. So take a pledge.</p>
            <hr>
          </div>
      </div>

    </section>

    <section class="mu100 mb60">
      <div class="container">
      <div class="row">
      <div class="col-lg-6">
          <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>  I will never cut any tree or harm it.</li>
              <li class="list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>  I will plant at least 100 trees a year</li>
              <li class="list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>  I will not use plastic products.</li>
              <li class="list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>  I will encourage others to plant trees.</li>
              <li class="list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>  I will help 3 nature based organisation by donating, campaigning or volunteering</li>
              <li class="list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>  I will gift trees to my relatives, friends on occassions.</li>
            </ul>
          </div>
      </div>

        <div class="col-lg-6 mt25">
          <form id="pledge" action="pledge.php" method="post">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input id="plesub" type="submit" value="Pledge" class="btn btn-primary submit">
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