<?php
  include 'db/config.php';
  $query = "SELECT * FROM falp_hiring WHERE name = 'page_title' ";
  $page_title = $db->getQueryOne($query)['details'];

  $query = "SELECT * FROM falp_hiring WHERE name = 'tag_line' ";
  $tag_line = $db->getQueryOne($query)['details'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <link rel="stylesheet" type="text/css" href=" admin/css/sb-admin-2.css"> -->
 <?php
  include 'src/head.php';

?>
<style type="text/css">
  .tag_line {
 /* color: #42a5f5;*/
 color: #1565c0;
  font-size: 24px;
 /* text-shadow: 1px 1px #42a5f5;*/
  background-color: #fff; 
  opacity: 0.8;
  /*border: 2px solid;*/
  border-radius: 8px;
}
 #clients .btn-see-more {
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  /*border-radius: 50px;*/
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #fff;
/*color: #fff;*/*/
  color: rgba(3, 169, 244, 0.7);
}
#clients .btn-see-more:hover {
  background: #fff;
  border: 2px solid #448aff;
}
.mx-md-n5{
  margin-right: -0.65rem !important;
  margin-left: -0.65rem !important;
}
</style>
</head>
<script>
	function hide_text(x){
	var all_details_id = x;
	var all_details_id2 = x;
	var all_details_id = "all_details_"+all_details_id;
	var old_details = document.getElementById(all_details_id).innerHTML;
	var count = old_details.length;
	document.getElementById("all_details_hidden_"+all_details_id2).value=old_details;
	if(count >= 300){
		var new_details = old_details.substring(0,200);
		var new_details = new_details + "....";
		document.getElementById(all_details_id).innerHTML = new_details;
	}
	}
</script>
<body class="bg">
<!--  <?php
  // include 'src/nav.php';
?> -->
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/FALP.png" alt="" title="" width="100"></img></a>
        <!-- <h1><a href="#hero">FALP</a></h1> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php#hero">Home</a></li>
          <li><a href="index.php#about">About Us</a></li>
          <li><a href="index.php#call-to-action">Join Our Team</a></li>
          <li><a href="index.php#events">Events</a></li>  
          <li><a href="index.php#contact">Contact Us</a></li>
          <!-- <li><a href="employee/login.php">Employee's Portal</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <section class="header-hiring">
  <div>
  </div>
  </section>

  <section id="clients">
    <div class="container-fluid" style="background-color: transparent;">
      <div class="row">
        <div class="col-lg-12">
          <br>
          <div class="tag_line text-center mb-4 mt-1">
            <b><?php echo $tag_line; ?></b>
          </div>
        </div>
      </div>
      <?php 
      $count = "SELECT COUNT(ID) FROM falp_jobs WHERE status = 'Open'";
      $countjob = $db->getQueryOne($count);
      $countjobs = $countjob[0];
      ?>
      <input type="hidden" id="total" value=<?php echo $countjobs; ?> class="btn btn-sm">
      <div class="container-fluid">
    <div class="row" id="hiringposted">
          <?php
            $query = "SELECT * FROM falp_jobs ORDER BY date_posted DESC";
            $jobs = $db->getQuery($query);
           
            if ($jobs) {
              foreach ($jobs as $i => $jo) {
                if($jo['status'] == 'Open'){ 
          ?>
            <div class="col-lg-4" style="color: black;">
				<div class="wow fadeInUp mx-md-n5">
					<div class="card text-left mt-2 mb-0 pl-0 mx-0">
						<div class="card-title">
							<h5 id="job_title"><?php echo $jo['job_title']; ?> </h5> 
						</div>
						<div class="card-body">
							<strong>Job Description: </strong>
							<input type="hidden" id="all_details_hidden_<?php echo $jo['ID'];?>">
							<p class="card-text" id="all_details_<?php echo $jo['ID'];?>"><?php echo $jo['details']; ?>
								<script>
									var x = "<?php echo $jo['ID'];?>";
									hide_text(x);
								</script>
							</p> 
							<div class="animated fadeIn" id="qualifications_<?php echo $jo['ID'];?>" style="display:none;">
							  <strong>Qualifications: </strong> <?php echo $jo['qualifications']; ?> <br>
							  <strong>Other Information:</strong> <br>
							  <strong>Job Type: </strong><?php echo $jo['job_function']; ?> <br> 
							  <strong>No. of Vacancy: </strong> <?php echo $jo['vacancy']; ?> <br> 
							  <strong>Status: </strong><?php echo $jo['status']; ?> <br> 
							</div><br>
							<div>
								<center><button class="btn btn-see-more" onclick="show_div('<?php echo $jo['ID'];?>')" id="button_show<?php echo $jo['ID'];?>"> See more</button></center>
								<button class="btn btn-see-more float-right" onclick="apply_now('<?php echo $jo['ID'];?>')" style="display:none;" id="button_apply_<?php echo $jo['ID'];?>"> Apply Now</button>
							</div>
						</div>
						<div class="card-footer pb-0  text-right text-muted">
								 <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; <?php echo $db->dateParse($jo['date_posted'], 'word'); ?>
						</div>
					</div>
				</div>
			</div>
          <?php
              }else{

              }
            }
          }
          ?>
    </div>
        </div>
      </div>
  </section>
  <br><br>
  <section id="clients">
    <div class="container-fluid" style="background-color: white;padding-bottom: 5px;">
      <div class="row">
        <div class="col-lg-12">
           <h2 class="title mt-3 ml-5">COMPANY SNAPSHOT</h2>
            <div class="wow fadeInUp ml-5">
           <table style="margin-left: 120px;">
            <tbody>
            <tr>
              <td> Industry:</td>
              <td style="color: #1565c0">Manufacturing/Automotive</td>
              <td style="width:80px;"></td>
              <td>Average Processing Time:</td>
              <td style="color: #1565c0">    2 - 3 days </td>
            </tr>
            <tr>
              <td> Telephone No:</td>
              <td style="color: #1565c0"> (043) - 455 - 9600   </td>
              <td style="width:80px;"></td>
              <td> Spoken Language:</td>
              <td style="color: #1565c0">Filipino/English/Japanese </td>
            </tr>
            <tr>
              <td> Company Size:</td>
              <td style="color: #1565c0"> More than 9,000 employees  </td>
              <td style="width:80px;"></td>
              <td> Benefits:</td>
              <td style="color: #1565c0"> Transportation  - Our company provides shuttle services to different locations.</td>
            </tr>
            <tr>
              <td> Working Hours: </td>
              <td style="color: #1565c0">  16 </td>
              <td style="width:80px;"></td>
              <td> </td>
              <td style="color: #1565c0">  Health Card - Cocolife </td>
            </tr>
             <tr>
              <td> Dress Code: </td>
              <td style="color: #1565c0">   Company Uniform</td>
                <td style="width:80px;"></td>
              <td> </td>
              <td style="color: #1565c0">  Allowances:  Daily Meal Allowance and OT Meal Allowance.</td>
            </tr>
            </tbody>
           </table>
              </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    include 'src/footer.php';
  ?>
  <?php
    include 'src/script.php';
  ?>
   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script>
    $(document).ready(function(){

  //setInterval(update_count, 3000);

  function update_count() {
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        var response = this.responseText;
         var total = document.getElementById('total').value;
         // alert("Response"+response+"Alert"+total);
         if(total != response){
          update_hiring(response);
         }else{
         }
      }
    }
    xhttp.open("GET", "rt/notification.php?operation=update_jobcount", true);
    xhttp.send();
  }


  function update_hiring(x){  
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        var response = this.responseText;
        document.getElementById('total').value=x;
        document.getElementById('hiringposted').innerHTML = response;
      }
    }
    xhttp.open("GET", "rt/notification.php?operation=update_hiringposted", true);
    xhttp.send();
}
    });
  </script>
  <script>
	  function apply_now(x){
		  window.open('job.php?id='+x ,"_blank");
	  }
      function show_div(x){
       var isVisible = document.getElementById('qualifications_'+x).style.display == "inline-block";
       if(isVisible == false){
         document.getElementById('qualifications_'+x).style.display="inline-block";
         document.getElementById('button_show'+x).innerHTML="Hide";
		 var see = document.getElementById('all_details_hidden_'+x).value;
		 document.getElementById('all_details_'+x).innerHTML = see;
		 document.getElementById('button_apply_'+x).style.display="inline-block";
       }else{
          document.getElementById('qualifications_'+x).style.display="none";
          document.getElementById('button_show'+x).innerHTML="See more";
		  var all_details_id = "all_details_"+x;
		  var old_details = document.getElementById(all_details_id).innerHTML;
		  var count = old_details.length;
			if(count >= 300){
			  document.getElementById("all_details_hidden_"+x).value=old_details;
			  var new_details = old_details.substring(0,200);
			  var new_details = new_details + "....";
			  document.getElementById(all_details_id).innerHTML = new_details;
			  document.getElementById('button_apply_'+x).style.display="none";
			}
       }
    }
  </script>
</body>

</html>