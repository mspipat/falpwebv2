<?php
  include 'db/config.php';
  $query = "SELECT * FROM falp_hiring WHERE name = 'page_title' ";
  $page_title = $db->getQueryOne($query)['details'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php
  include 'src/head.php';
?>
</head><!--Hey-->
<body>
 <?php
  include 'src/nav.php';
?>
  <section id="hero" style="background-image: url('img/falp-dim.jpg')">
    <div class="hero-container">
        <h1>FURUKAWA AUTOMOTIVE SYSTEMS </h1>
        <h2> LIMA PHILIPPINES INC.</h2>
        <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">About Us</h2>
            <h1> Furukawa Automotive Systems Lima Phil., Inc.</h1>
              <p class="text-justify">Furukawa Automotive Systems LIMA Philippines Inc. is an affiliate of Furukawa Automotive Systems under Furukawa Electric Group. FALP was certified by SEC on Jan. 16, 2012. Furukawa Automotive Systems started in 2007 as an organization that was the key driver in the pursuit of the automotive components- related businesses of the Furukawa Electric Group, in both name and fact, through a merger with the Automotive Products Division of Furukawa Electric Co., Ltd. The company manufactures automotive wire harnesses. With a basic policy of customers first and offering quality and services that are able to win customer’s trust and satisfaction, the company offers optimum solutions drawing on the abundant and diverse materials capabilities of the Group and with a mobility and footwork not found with large enterprises.</p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-building"></i></div>
              <h4 class="title"><a href="">Corporate Vision</a></h4>
              <p class="description"> To be acknowledged Worldwide as the Number One Manufacturer of Wiring Harness especially by Car Manufacturers.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-building-o"></i></div>
              <h4 class="title">Corporate Mission</h4>
              <ul class="description">
              <li> Stabilize Quality & Delivery</li>
              <li> Establish competitiveness through structural reform, by establishing further business expansion </li>
              <li> Establish a Stable Quality Production System </li>
              <li> Provide a thorough Resource Management </li>
              </ul>
            </div>
                     <center> <a href="about.php" class="btn-see-more">See More</a></center>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight">
            <img class="img-fluid" src="img/logo-fas.png">
            <img class="img-fluid pt-3" src="img/furukawa-building.jpg">
         <!--    <img class="img-fluid" src="img/about/map.jpg"> -->
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <!-- <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description"></p>
        </div>
        <div class="row counters">

        <div class="col-lg-4 text-center">
            <span data-toggle="counter-up">6</span>
            <p>Clients</p>
          </div> -->

          <!-- <div class="col-lg-6 text-center">
            <span data-toggle="counter-up">10,000</span>
            <p>Employees</p>
          </div>

          <div class="col-lg-6 text-center">
            <span data-toggle="counter-up">16</span>
            <p>Operation Hours</p>
          </div>

          </div>

        </div>

      </div>
    </section>#facts --> 
  <!--==========================
      EVENTS
    ============================-->
    <section id="events">
      <div class="container">
          <div class="section-header">
          <h3 class="section-title" style="margin-top:7%;">Events</h3>
          <p class="section-description"> We have lot of events here! </p>
        </div>
  <center>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
  <!--   <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="14"></li> -->
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="15"></li> -->
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="17"></li> -->
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" height="500" src="img/events/QCC-8winner.jpg" alt="olympic">
      <div class="carousel-caption d-none d-md-block text-white">
          <h5 style="text-shadow: 2px 1px black;"">8th QCC Cycle 1 2019 Winners</h5>
        </div>
    </div> <!-- 1 -->
    <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/QCC-traningapril.jpeg" alt="qcc">
      <div class="carousel-caption d-none d-md-block text-white">
          <h5 style="text-shadow: 2px 1px black;""> QCC Training-April 2019</h5>
        </div>
    </div>  <!-- 2 -->
  <!--  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/MSA 2.jpg" alt="msa">
      <div class="carousel-caption d-none d-md-block text-white">
          <h5 style="text-shadow: 2px 1px black;""> MSA Training-March 2019</h5>
        </div>
    </div> -->  <!-- 3 -->
   <!--  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/BOSH.png" alt="bosh">
      <div class="carousel-caption d-none d-md-block text-white">
          <h5 style="text-shadow: 2px 1px black;""> Basic Occupational Safety & Health Training-Feb.2019</h5>
        </div>
    </div> -->  <!-- 4 -->
  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/olympic/olympic-2.jpg" alt="olympic">
      <div class="carousel-caption d-none d-md-block text-white">
          <h5 style="text-shadow: 2px 1px black;"">FALP OLYMPIC 2019</h5>
        </div>
    </div>  <!-- 5 -->
  <!-- <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/summer/summer-1.jpg" alt="summer">
      <div class="carousel-caption d-none d-md-block">
           <p style="margin-top: -10px;text-shadow: 2px 1px black;">SUMMER OUTING 2019 <br> Held at Laiya, San Juan, Batangas</p>
        </div>
  </div> -->  <!-- 6 -->
   <!-- <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/summer/summer-2.jpg" alt="summer">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">SUMMER OUTING 2019 <br> Summer Outing 2019 with Vietnamese Visitors</p>
      </div>
  </div> -->  <!-- 7 -->
  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/batch1-st.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">TEAM BUILDING 2019 <br> 2019 Staff Team BUilding Acitvity Batch 1</p>    
        </div>
  </div>  <!-- 8 -->
  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/batch2-st.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">TEAM BUILDING 2019 <br> 2019 Staff Team BUilding Acitvity Batch 2</p>    
        </div>
  </div>  <!-- 9 -->
  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/batch3-st.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">TEAM BUILDING 2019 <br> 2019 Staff Team BUilding Acitvity Batch 3</p>    
        </div>
  </div>  <!-- 10 -->
  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/batch4-st.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">TEAM BUILDING 2019 <br> 2019 Staff Team BUilding Acitvity Batch 4</p>    
        </div>
  </div>  <!-- 11 -->
  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/batch5-st.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">TEAM BUILDING 2019 <br> 2019 Staff Team BUilding Batch 5</p>    
        </div>
  </div>  <!-- 12 -->
  <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/batch6-st.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">TEAM BUILDING 2019 <br> 2019 Staff Team BUilding Batch 6</p>    
        </div>
  </div>  <!-- 13 -->
   <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/am1.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">TEAM BUILDING 2019 <br> 2019 Assistant Managers</p>    
        </div>
  </div>  <!-- 14 -->
   <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/am2.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">TEAM BUILDING 2019 <br> 2019 Assistant Managers</p>    
        </div>
  </div>  <!-- 15 -->

   <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/xmas_partyX.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">CHRISTMAS PARTY 2018 <br> Dance Contest Winners</p>    
        </div>
  </div>  <!-- 16 -->
   <div class="carousel-item">
      <img class="d-block w-100" height="500" src="img/events/team/manager-1.jpg" alt="team">
      <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">Our Managers! <br> Managers team building at Gratchi's Getaway, Tagaytay</p>    
        </div>
  </div>  <!-- 17 -->
   <!-- <div class="carousel-item"> -->
  <!--     <img class="d-block w-100" height="500" src="img/events/team/manager-2.jpg" alt="team"> -->
      <!-- <div class="carousel-caption d-none d-md-block text-white">
      <p style="margin-top: -10px;text-shadow: 2px 1px black;">Our Managers! <br> Managers team building at Gratchi's Getaway, Tagaytay</p>    
        </div> -->
  </div>  <!-- 18 -->
  </div>
    </div>
</div>
<br>
      </div>
    </section>
    <!--==========================
      Products Section
    ============================-->
   <!--  <section id="products">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Our Products</h3>
          <p class="section-description">FAS's wire harnesses and electronic / electric components are creating a brillant future for automobile-based societies.
        </p>
        </div>
        <div class="row">
          <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <img src="img/about/product1.jpg" style="height: 230px; width: 280px;">
              <p class="lr">Wire Harness </p>
            </div>
          </div>
          <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <img src="img/about/product2.jpg" style="height: 230px; width: 280px;">
              <p class="lr">Automotive Aluminum Wire Harness </p>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <img src="img/about/product3.jpg" style="height: 230px; width: 280px;">
              <p class="lr">αTerminal </p>
            </div>
          </div>

          <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <img src="img/about/product4.jpg" style="height: 230px; width: 280px;">
              <p class="lr">Sliding Door Harness </p>
            </div>
          </div>
          <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <img src="img/about/product5.jpg" style="height: 230px; width: 280px;">
               <p class="lr"> Connectors </p>
            </div>
          </div>
          <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <img src="img/about/product6.jpg" style="height: 230px; width: 280px;">
               <p class="lr">Smart Connectors </p> 
            </div>
          </div>
            <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.6s"></div>
          <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <img src="img/about/product7.jpg" style="height: 230px; width: 280px;">
               <p class="lr">Steering Roll Connectors </p>
            </div>
          </div>
        </div>

      </div>
    </section> --><!-- #Products

    ==========================
    Hiring
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">We are Hiring!
            </h3>
            <p class="cta-text"><?php echo  $page_title?></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="hiring.php">Visit Jobs</a>
          </div>
        </div>

      </div>
    </section><!-- #hiring -->
     <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact Us</h3>
          <p class="section-description"> </p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.212869598214!2d121.17411411431411!3d14.00538859514094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd69f54ef6320f%3A0x4eaeab07663055c!2sFurukawa+Automotive+Systems+Lima+Phil.+Inc!5e0!3m2!1sen!2sph!4v1556507960535!5m2!1sen!2sph" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">
        <img src="img/map.JPG" style="width:100%;" class="img-fluid mb-5"></img>

          <div class="col-lg-4 col-md-4">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p class="text-justify">Block 2, Lot 3, Phase 2A, J.P. Rizal Avenue
                <br>Lima Technology Center Lipa City, Batangas,
                <br>4217 Philippines</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p><strong>For Recruitment concerns:</strong> recuitment@falp.com.ph  
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>(043) - 455 - 9600</p>
              </div>
              <div>
              <a href="https://www.facebook.com/FALPRecruitment/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <p> www.facebook.com/FALPRecruitment</p>
            </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
               <?php
            if(isset($_GET['success'])){
          ?>
           <div class="col-lg-12">
            <div class="text-center">
              <div class="alert alert-success">
                <strong>Success!</strong> Your message is sent to us.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
          <?php
            }else{
              }
          ?>    
             <form action="admin/functions/save.php" method="post" id="form">
                <div class="form-group">
                  <input type="text" class="form-control"  name="sender" placeholder="Your Name" required ata-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                </div>
                <div class="form-group">
                   <input type="email" class="form-control"  name="sender_email" placeholder="Your Email" required data-rule="email" data-msg="Please enter a valid email" />
                </div>
                <div class="form-group">
                   <input type="text" class="form-control" name="subject"  placeholder="Subject" required data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                </div>
                <div class="form-group">
                   <textarea name="msg" class="form-control" rows="4" placeholder="Message" required data-rule="required" data-msg="Please write something for us"></textarea>
                </div>
                <div class="text-center btn-sm">
                 <button type="submit" name="sendMessage" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

 <?php
  include 'src/script.php';
?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
 <?php
  include 'src/footer.php';
?>
 
</body>
</html>
