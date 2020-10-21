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
</head>
<body>
 <?php
  include 'src/nav.php';
?>
  <section id="hero" style="background-image: url('img/building/LEFT SIDE VIEW 1.JPG')">
    <div class="hero-container mt-5">
        <h1>FURUKAWA AUTOMOTIVE SYSTEMS </h1>
        <h1> LIMA PHILIPPINES INC.</h1>
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
            <h3> Furukawa Automotive Systems Lima Phil., Inc.</h3>
              <p class="text-justify">Furukawa Automotive Systems LIMA Philippines Inc. is an affiliate of Furukawa Automotive Systems under Furukawa Electric Group. FALP was certified by SEC on Jan. 16, 2012. Furukawa Automotive Systems started in 2007 as an organization that was the key driver in the pursuit of the automotive components- related businesses of the Furukawa Electric Group, in both name and fact, through a merger with the Automotive Products Division of Furukawa Electric Co., Ltd. The company manufactures automotive wire harnesses. With a basic policy of customers first and offering quality and services that are able to win customer’s trust and satisfaction, the company offers optimum solutions drawing on the abundant and diverse materials capabilities of the Group and with a mobility and footwork not found with large enterprises.</p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-building"></i></div>
              <h4 class="title"><a href="">Corporate Vision</a></h4>
              <p class="description"> To be acknowledged Worldwide as the Number One Manufacturer of Wiring Harness especially by Car Manufacturers.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-building-o"></i></div>
              <h4 class="title"><a href="">Corporate Mission</a></h4>
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
            <img class="img-fluid mt-2 rounded" style="box-shadow: 3px 3px #b1bace;" src="img/furukawa-building.jpg">
            <img class="img-fluid mt-2 rounded" style="box-shadow: 3px 3px #b1bace;" src="img/building/Front.jpg">
            <img class="img-fluid mt-2 rounded" style="box-shadow: 3px 3px #b1bace;" src="img/building/Annez.jpg">
          </div>
          
        </div>

      </div>
    </section><!-- #about --> 
  <!--==========================
      EVENTS
    ============================-->
    <section id="events">
      <div class="container">
          <div class="section-header">
            <h3 class="section-title mt-3">Events</h3>
            <p class="section-description"> We have lot of events here! </p>
          </div><center>
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
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" height="400" src="img/events/0.jpg" alt="olympic">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;">8th QCC Cycle 1 2019 Winners</h5>
                </div>
              </div> <!-- 0 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/1.jpg" alt="qcc">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> QCC Training-April 2019</h5>
                </div>
              </div>  <!-- 1 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/olympic/olympic-2.jpg" alt="olympic">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5 style="text-shadow: 2px 1px black;">FALP OLYMPIC 2019</h5>
                </div>
              </div>  <!-- 2 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/team/batch1-st.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> TEAM BUILDING 2019 <br> 2019 Staff Team Building Acitvity Batch 1</h5>
                </div>
              </div>  <!-- 3 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/team/batch2-st.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> TEAM BUILDING 2019 <br> 2019 Staff Team Building Acitvity Batch 2</h5>
                </div>
              </div>  <!-- 4 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/team/batch3-st.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> TEAM BUILDING 2019 <br> 2019 Staff Team Building Acitvity Batch 3</h5>   
                </div>
              </div>  <!-- 5 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/team/batch4-st.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> TEAM BUILDING 2019 <br> 2019 Staff Team BUilding Acitvity Batch 4</h5>
                </div>
              </div>  <!-- 6 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/team/batch5-st.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> TEAM BUILDING 2019 <br> 2019 Staff Team Building Acitvity Batch 5</h5>       
                </div>
              </div>  <!-- 7 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/team/batch6-st.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                <h5 style="text-shadow: 2px 1px black;"> TEAM BUILDING 2019 <br> 2019 Staff Team Building Acitvity Batch 6</h5>    
                </div>
              </div>  <!-- 8 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/team/am1.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> TEAM BUILDING 2019 <br> 2019 Assistant Managers</h5>    
                </div>
              </div>  <!-- 9 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/team/am2.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> TEAM BUILDING 2019 <br> 2019 Assistant Managers</h5>       
                </div>
              </div>  <!-- 10 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/xmas_partyX.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> CHRISTMAS PARTY 2018 <br> Dance Contest Winners</h5>   
                </div>
              </div>  <!-- 11 -->
              <div class="carousel-item">
                <img class="d-block w-100" height="400" src="img/events/12.jpg" alt="team">
                <div class="carousel-caption d-none d-md-block text-white">
                  <h5 style="text-shadow: 2px 1px black;"> Our Managers! <br> Managers team building at Gratchi's Getaway, Tagaytay</h5>       
                </div>
              </div>  <!-- 12 -->
            </div>
          </div>
        </div><br>
      </div>
    </section>

    <!-- ==========================
    Hiring
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">WE ARE HIRING!
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
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">
          <iframe src="https://www.google.com.ph/maps/place/Furukawa+Automotive+Systems+Lima+Phil.+Inc/@14.0053886,121.1741141,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd69f54ef6320f:0x4eaeab07663055c!8m2!3d14.0053834!4d121.1763028" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- <img src="img/map.JPG" style="width:100%;" class="img-fluid mb-5"></img> -->
          <div class="col-lg-4 col-md-4">
            <div class="info mt-4">
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

          <div class="col-lg-5 col-md-8 mt-4">
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
                <div class="text-center">
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
