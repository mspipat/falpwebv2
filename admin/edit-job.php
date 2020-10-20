<?php
  session_start();
  if(!isset($_SESSION['login']['ID'])){
    header('location: functions/logout.php');
  }
?>

<?php
  include '../db/config.php';
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM falp_jobs WHERE ID = '".$_GET['id']."' ";
    $job = $db->getQueryOne($query);
    // print_r($job);

    $jobtitle = $job['job_title'];   
    $ref = $job['prf_no'];  
    $desc  = $job['details'];  
    $qualifications = $job['qualifications'];   
    $jobfunction = $job['job_function'];  
    $department = $job['dept']; 
    $posteddate = $job['date_posted']; 
    $status = $job['status']; 
    $vacancy = $job['vacancy']; 

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include 'src/head.php';
  ?>
  <title>FALP - Admin</title>

</head>

<body class="bg">

  <div class="">
    <div class="container-fluid">
        
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0" id="home">Update job</h1>
      </div>
      
      <div class="row">
        <div id="home">
        <div class="col-lg-12 mb-4">
        
          <?php
            if(isset($_GET['success'])){
          ?>
            <div class="col-lg-12 mb-4">
            <div class="text-center">
              <div class="alert alert-success">
                <strong>Success!</strong> Job has been updated.
              </div>
              <!-- <a href="add-j" class="btn btn-primary"><i class="fa fa-plus"></i> Post another job</a> -->
              <a href="javascript:void(0)" onclick="window.close()" class="btn btn-secondary"><i class="fa fa-times"></i> Close</a>
            </div>
            </div>
          <?php
            }else{

          ?>
        
          <form action="functions/save.php" method="post">

            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Job Title</label>
                  <input type="hidden" name="id" value="<?php echo $id?>">
                  <input type="text" name="job_title" class="form-control" value=<?php echo $jobtitle?> required>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>PRF No.</label>
                  <input type="text" name="prf_no" class="form-control" value=<?php echo $ref?> required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Job Description</label>
              <textarea name="details" class="form-control" id="editor" rows="3" required=""> <?php echo $desc?></textarea>
            </div>

            <div class="form-group">
              <label>Qualifications</label>
              <textarea name="qualifications" class="form-control" id="editor1" rows="3" required=""> <?php echo $qualifications?></textarea>
            </div>

            <div class="form-group">
               <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">
              <label>Job Type</label>
              <select name="job_function" class="form-control">
                <?php
                  echo '<option selected>' .$jobfunction. '</option>';
                  $query = "SELECT * FROM falp_job_functions ORDER BY function ASC";
                  $jf = $db->getQuery($query);
                  print_r($jf);
                  if($jf){
                    foreach ($jf as $i => $j) {
                      echo '<option>'.$j['function'].'</option>';
                    }
                  }
                ?>

              </select>
            </div>
           <!--  <div class="row"> -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Department</label>
                  <select name="dept" class="form-control" value="<?php echo $department?>" required>
                    <?php
                    echo '<option selected>' .$department. '</option>';
                      $query = "SELECT * FROM falp_dept ORDER BY dept ASC";
                      $jf = $db->getQuery($query);
                      print_r($jf);
                      if($jf){
                        foreach ($jf as $i => $j) {
                          echo '<option>'.$j['dept'].'</option>';
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>
              </div>
            </div>

              <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label> No. of Vacancies</label>
                  <input type="number" name="num_vacancy" class="form-control" value=<?php echo $vacancy;?> required>
                </div>
                </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
               <div class="form-group">
                  <label>Status</label>
                  <select name="status" class="form-control" value="<?php echo $status?>" required>
                  <option> Open </option>
                   <option> Closed </option>
                 </select>
            </div>
            </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                  <label>Date Posted : <?php echo $pdate = $db->dateParse($posteddate,'word')?> </label> <br>
                   <label>Date Updated</label>
                  <input name="date_posted" class="form-control" value="DATE TODAY" readonly> 
                </div>
              </div>


            <button class="btn btn-block btn-lg btn-primary" name="updateJob">UPDATE</button>
            <a href="javascript:void(0)" onclick="window.close()" class="btn btn-secondary btn-block"><i class="fa fa-times"></i> CLOSE</a>
          </form>
          
          <?php
            }
          ?>
        </div>
        
      </div>
        </div>
    </div>
  </div>
  <?php
    include 'src/script.php';
  ?>
  <script>
    $(document).ready(function(){

    });
  </script>

</body>

</html>
