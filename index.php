
<?php


  session_start();
  $link = mysqli_connect("localhost","id9303517_prak", "samint@87","id9303517_prakdb",21);

    if (mysqli_connect_error()) {
        
        die("there was an error");
    }
    
        if($_POST)
      {
   $query= "INSERT INTO subscribe (subscriber) VALUES ('".mysqli_real_escape_string($link, $_POST['subscriber'])."')";
                  mysqli_query($link, $query);

      }

    

  include("header.php");

?>

    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Save trees, Save yourself</h1>
              <p class="mb-5">By growing and safeguarding the trees, you are saving yourself from the wrath of the nature. Only they can reverse the process of climate change.</p>
              <p><a href="pledge.php" class="btn btn-white btn-outline-white">Pledge</a></p>
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Gift a green life</h1>
              <p class="mb-5">Give your loved ones a precious gift.<br>Gift them trees</p>
              <p><a href="gift.php" class="btn btn-white btn-outline-white">Gift a Tree</a></p>
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('img/slider-3.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Billion lives depends on them</h1>
              <p class="mb-5">They are the source of food and habitat not only for you but billion other lives living on this planet.So, never cut a tree and not let others do.<br>Help us in our initiative</p>
              <p><a href="donate.php" class="btn btn-white btn-outline-white">Donate</a><a href="volunteer.php" class="btn btn-link btn-white blup">Join Us</a></p>
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- END slider -->

   <!-- Title/About -->
    <section class="section">
    	  <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-center">
    			<h1>Praksham</h1>
    			<p>The name Praksham is derived from the sanksrit phrase <span>Prakriti Sanrakshanam</span> which means <span>Nature Conservation</span>. The aim of the organisation is to save nature from the adversities of human activities. But the irony is that we humans are not saving nature, we are saving ourselves from the wrath of it. The only way to protect ourselves is to protect <span>Trees</span>. We are dedicated to save the selfless life which give it's all for the service of other creatures. Trees are source of food and livelihood for us and more importantly our saviors.Praksham is dedicated to the protection of trees so that humans could live some more years on this planet.</p>
    			<a href="about.php" class="btn btn-white">Learn More</a>
    		  </div>
    	  </div>
    	</div>
    </section>
    <!-- title ends here -->

    <!-- Why Trees section -->
     <section class="section">
        <div class="container">
        	<h1>Why Trees?</h1>
            <div class="row mu20">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div>
                        <h3>Trees- Earth's Lungs</h3>
                        <p>Trees purifies the air and increases the oxygen content in the environment which is vital source of our living. They provide food, shelter, useful products and helps in natural processes. Their importance is so immense, it can't be defined in words</p>
                        <a href="whytrees.php" class="btn btn-white">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="video-promo-details">
                        <div class="video-promo-content">
                            <span data-video-id="XVUAgcSCP_U" class="video-area-popup"><i class="fa fa-play"></i></span>
                        </div>
                        <img src="img/videoimg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Trees section ends here -->

<!-- Quotes Section -->
<section class="section quotes">
	<i class="fa fa-quote-left fa-3x" aria-hidden="true"></i>
	<div class="owl-carousel owl-theme">
	    <div class="item"><p class="quote">I never saw a discontented tree. They grip the ground as though they liked it, and though fast rooted they travel about as far as we do.</p><p class="envname">John Muir</p></div>
	    <div class="item"><p class="quote">If you really think the environment is less important than the economy try holding your breath while you count your money.</p><p class="envname">Guy R. McPherson</p></div>
	    <div class="item"><p class="quote">An understanding of the natural world and what's in it is a source of not only a great curiosity but great fulfillment.</p><p class="envname">David Attenborough</p></div>
	    <div class="item"><p class="quote">We share this planet, our home, with millions of species. Justice and sustainability both demand that we do not use more resources than we need.</p><p class="envname">Vandana Shiva</p></div>
    </div>
</section>
<!-- Quotes end here -->
    

<!-- NUMBERS -->
  <div id="numbers" class="section">
    <h1>Our Impact</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-tree fa-2x"></i>
            <h3>50K+</h3>
            <span>Trees Planted</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-handshake-o fa-2x"></i>
            <h3>1520</h3>
            <span>Volunteers</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-money fa-2x"></i>
            <h3>785030</h3>
            <span>Donated</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-certificate fa-2x"></i>
            <h3>10238</h3>
            <span>People Trained</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /NUMBERS ends here-->


<!-- Recent Stories -->
     <section class="section resto">
        <div class="container">
          <h1>Recent Stories</h1>
            <div class="row mu20">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div>
                        <img src="img/brazil.jpg">
                        <h5>Amazon forest fires pushing climate change ‘beyond human control’</h5>
                        <p>Leading Amazon scientist highlights ‘grave problems’ in Brazil’s management of the world’s most important forest as climate-driven fires eat it away</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div>
                        <img src="img/defor.jpg">
                        <h5>Mass deforestation leaves only 38% tropical forests wildlife-friendly, animal holocaust draws closer</h5>
                        <p>Vulnerable species will go extinct as a result of deforestation and climate change. Between 1970 and 2014, 16,704 populations representing 4,005 wildlife species, declined by 60 percent. The sixth mass extinction may occur in around 2100.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div>
                        <img src="img/etiho.jpg">
                        <h5>Ethiopia plants 350m trees in a day to help tackle climate crisis</h5>
                        <p>National ‘green legacy’ initiative aims to reduce environmental degradation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Subscribe for newsletter -->
  <section class="subscribe">
    <div class="container">
        <div class="row flex-v-center">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <h2>Subscribe for newsletter</h2>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" id="sthank">
                <form action="index.php" id="mc-form" class="subscriber-form" method="post">
                  <label class="mt10" for="subscriber"></label>
                  <input type="email" id="subscriber" name="subscriber" placeholder="abc@xyz.com" required>
                  <button type="submit" class="plus-btn"><i class="fa fa-envelope"></i></button>
                </form>
            </div>
        </div>
    </div>
  </section>
<!-- Subscribe ends here -->



<?php

  include("footer.php");

?>