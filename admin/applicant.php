<?php
session_start();
  if(!isset($_SESSION['login']['ID'])){
    header('location: functions/logout.php');
  }
  include '../db/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> FALP - Applicants</title>
	<?php
    include 'src/head.php';
  ?>
</head>
<body id="page-top">
<?php
  include 'modals/message.php';
?>
  <!-- Page Wrapper -->
<div id="wrapper">
  <?php include 'src/side-nav.php';?>
  <div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
    <div id="content">
  <?php include 'src/top-nav.php'; ?>
<!-- Begin Page Content -->
      <div class="container-fluid"> 
<!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 home">
            <h1 class="h3 mb-0" id="home">APPLICANTS</h1>
        </div>
        <section id="post-hiring">
          <div class="content-message">
            <div class="col-lg-10 mb-4">
              <div class="card shadow mb-4 mt-4">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold label-headers">Applicants List</h6>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                   		<form action="#" method="get" class="form-inline">
                     		<div class="form-group">
                          <div class="row">
                            <div class="col-lg-12">
                              <select name="job" class="form-control" style="width:200px;">
                                <option> Select Posted Job</option> 
                                <?php 
                                  $selectjob = "SELECT DISTINCT(job_title) FROM `falp_jobs`";
                                  $jobs = $db->getQuery($selectjob);
                                  foreach ($jobs as $i => $job) {
                                    echo '<option>'.$job[0].'</option>'; 
                                  }
                                  ?>
                              </select>
                              <button type="submit" name="search" class="btn-primary btn" style="width:100px;">Search</button>
                            </div> <!-- form col -->
                          </div> <!-- form row -->
                        </div> <!-- form-group -->
                      </form>
                  </div> <!-- row -->
                </div>
                <br>
                <div class="row">  
                  <div class="col-lg-12">
                    <table class="table table-sm table-bordered table-responsive" style="color:black;">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Contact Number</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th nowrap="">Message</th>
                          <th>Resume</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php 
                          if(isset($_GET['job'])){
                            $job_title = $_GET['job'];
                            $selectID = "SELECT ID FROM falp_jobs WHERE job_title = '$job_title'";
                            $job_info = $db->getQuery($selectID);
                            $count = 1;
                            foreach ($job_info as $i => $jobID) {
                              $id = $jobID['ID'];
                              $selectapplicants = "SELECT * FROM falp_applicant WHERE hiring = '$id'";
                              $applicants = $db->getQuery($selectapplicants);
                              if($applicants != NULL){
                              // while($applicants->fetch_array()){
                              foreach ($applicants as $i => $app) {
                                  $id_app = $app['id'];
                                  $name = $app['name'];
                                  $contact = $app['contact_number'];
                                  $email =  $app['email'];
                                  $subject = $app['subject'];
                                  $message =  $app['message'];
                                  $resume =   $app['resume'];

                                  echo '<td>'.$count.'</td>';
                                  echo '<td><div class="tr-60">'.$name.'</div></td>';
                                  echo '<td>'.$contact.'</td>';
                                  echo '<td>'.$email.'</td>';
                                  echo '<td><div class="tr-60">'.$subject.'</div></td>';
                                  echo '<td onclick="display_modal(&quot;'.$id_app.'&quot;)"><div class="tr-60">'.$message.'</div></td>';
                                  echo '<td><div class="tr-60"><a href="../resume/'.$resume.'" target="_blank">'.$resume.'</div></a></td>
                                </tr>';
                                $count++;
                              }
                            }
                          }
                          }
                        ?>
                          <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        </tr>
                      </tbody>
                    </table>
                    </div> <!-- col-lg-12 -->
                  </div> <!-- row -->
                      </div> <!-- card-body -->
                    </div> <!-- message -->
                  </div>  <!-- col -->
                </div> <!-- row -->
              </div> <!-- container --> 
            </section> <!-- message -->
        </div>  <!-- container-fluid -->
      </div> <!-- content -->
    </div> <!-- content-wrapper -->
</div> <!-- wrapper -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 <?php
    include 'src/script.php';
  ?>
  <script>
    $(document).ready(function(){
    });
    function display_modal(x){
       $("#message").modal();
        display_message(x);
      }
    function display_message(x){
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      var response = this.responseText;
      //alert(response);
     document.getElementById('display_message').innerHTML=response;
    }
  };
  xhttp.open("GET", "AJAX/display_data.php?operation=display_message&&id="+x, true);
  xhttp.send();
}
function close_modal(){
    $('#message').modal('toggle');
    clear_modal();
 }
 </script>

</body>

</html>
