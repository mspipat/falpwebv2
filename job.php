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
.btn-file {
	position: relative;
	overflow: hidden;
}
.btn-file input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	min-width: 100%;
	min-height: 100%;
	font-size: 100px;
	text-align: right;
	filter: alpha(opacity=0);
	opacity: 0;
	outline: none;   
	cursor: inherit;
	display: block;
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
 <?php
  include 'src/nav.php';
?>
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
			$id_jobs = $_GET['id'];
            $query = "SELECT * FROM falp_jobs WHERE ID='$id_jobs' ORDER BY date_posted DESC";
            $jobs = $db->getQuery($query);
            if ($jobs) {
              foreach ($jobs as $i => $jo) {
                if($jo['status'] == 'Open'){ 
          ?>
            <div class="col-lg-12" style="color: black;">
				<div class="wow fadeInUp mx-md-n5">
					<div class="card text-left mt-2 mb-0 pl-0 mx-0">
						<div class="card-body row">
							<div class="col-lg-7">
								<div class="card-title mx-0 ">
									<h5 id="job_title"><?php echo $jo['job_title']; ?> </h5> 
								</div>
								<br>
								<strong>Job Description: </strong>
								<input type="hidden" id="all_details_hidden_<?php echo $jo['ID'];?>">
								<p class="card-text" id="all_details_<?php echo $jo['ID'];?>"><?php echo $jo['details']; ?>
									<script>
										var x = "<?php echo $jo['ID'];?>";
										hide_text(x);
									</script>
								</p> 
								<div class="animated fadeIn" id="qualifications_<?php echo $jo['ID'];?>">
								  <strong>Qualifications: </strong> <?php echo $jo['qualifications']; ?> <br>
								  <strong>Other Information:</strong> <br>
								  <strong>Job Type: </strong><?php echo $jo['job_function']; ?> <br> 
								  <strong>No. of Vacancy: </strong> <?php echo $jo['vacancy']; ?> <br> 
								  <strong>Status: </strong><?php echo $jo['status']; ?> <br> 
								</div><br>
							</div>
							<div class="col-lg-5">
							  <div class="card-title mx-0">
								<h5 id="job_title">Apply Now</h5> 
							  </div>
							 <form action="admin/functions/save.php" method="post" id="form">
								<div class="form-group">
								  <input type="text" class="form-control"  name="sender" id="sender" placeholder="Your Name" required>
								</div>
								<div class="form-group">
								   <input type="number" class="form-control"  name="sender_number" id="sender_number" placeholder="Your Contact Number" required>
								</div>
								<div class="form-group">
								   <input type="email" class="form-control"  name="sender_email" id="sender_email" placeholder="Your Email" required>
								</div>
								<div class="form-group">
								   <input type="text" class="form-control" name="subject" id="subject"  placeholder="Subject" required>
								</div>
								<div class="form-group">
								   <textarea name="msg" id="msg" class="form-control" rows="4" placeholder="Message" required></textarea>
								</div>
								<div class="text-center"><label class="text-center" id="output"></label></div>
								<div class="text-center">
								  <form method="post" action="upload/upload_resume.php" enctype="multipart/form-data">
								    <button class="btn btn-primary btn-file">
									  <input type="hidden" id="uploaded_resume">
									  <span id="loading_indicator"> Upload Resume </span><input type="file" id="resume" name="resume" onchange="upload()" accept="application/pdf">
								    </button>
								  </form>
								  <button type="button" id="sendApplication" name="sendApplication" onclick="submitapplication()" class="btn btn-primary" disabled>Submit</button>
								</div>
							  </form>
							</div>
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
  <br></br>
  <?php
    include 'src/footer.php';
  ?>
  <?php
    include 'src/script.php';
  ?>
   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>
<!-- For upload Resume -->
<script type="text/javascript">
    function upload(){
        var form_data = new FormData();
		document.getElementById('loading_indicator').innerHTML='Uploading...';
        var ins = document.getElementById('resume').files.length;
		for (var x = 0; x < ins; x++) {
            form_data.append("resume[]", document.getElementById('resume').files[x]);
        }
        $.ajax({
            url: 'upload/upload_resume.php?', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
			success: function (response){
				document.getElementById('uploaded_resume').value=response;
				document.getElementById('loading_indicator').innerHTML='Upload Resume';
				document.getElementById('output').innerHTML='Resume Uploaded';
				document.getElementById('sendApplication').disabled=false;
            //$('#id_uploaded_image').val(response); // display success response from the PHP script
            },
            error: function (response) {
            //$('#msg').html(response); // display error response from the PHP script
            }
        });
	}
</script>
<script>
function submitapplication(){
	var sender = document.getElementById('sender').value;
	var sender_number = document.getElementById('sender_number').value;
	var sender_email = document.getElementById('sender_email').value;
	var subject = document.getElementById('subject').value;
	var uploaded_resume = document.getElementById('uploaded_resume').value;
	var hiring = "<?php echo $_GET['id'];?>";
	var msg = document.getElementById('msg').value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			var response = this.responseText;
			document.getElementById('output').innerHTML=response;
      document.getElementById('sender').value = '';
      document.getElementById('sender_number').value = '';
      document.getElementById('sender_email').value = '';
      document.getElementById('subject').value = '';
      document.getElementById('msg').value = '';
      document.getElementById('resume').value = '';
		}
	};
	xhttp.open("GET", "send_application.php?operation=send_application&&sender="+sender+"&&sender_number="+sender_number+"&&sender_email="+sender_email+"&&subject="+subject+"&&uploaded_resume="+uploaded_resume+"&&msg="+msg+"&&hiring="+hiring, true);
	xhttp.send();
}
</script>
</html>