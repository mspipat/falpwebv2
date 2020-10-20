<?php
  session_start();
  if(!isset($_SESSION['login']['ID'])){
    header('location: functions/logout.php');
  }
?>

<?php
  include '../db/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include 'src/head.php';
  ?>
  <title>FALP - Admin</title>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
      include 'src/side-nav.php';
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php
          include 'src/top-nav.php';
        ?>

         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 home">
            <h1 class="h3 mb-0" id="home">HIRING</h1>
          </div>
          <section id="page-headers">
            <div class="content-message">
            <div class="col-lg-10 mb-4">
              <?php
                if(isset($_GET['success'])){
              ?>
                  <div class="alert alert-success">
                    <strong>Success!</strong> Changes saved.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                  </div>
              <?php
                }
              ?>
              <form action="functions/save.php" method="post">
                <?php
                  $query = "SELECT * FROM falp_hiring WHERE name = 'tag_line' ";
                  $tag_line = $db->getQueryOne($query)['details'];
                ?>
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold label-headers">Hiring Page Label</h6>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <textarea id="textarea-ph" name="tag_line" class="form-control" rows="2" style="color: black;"><?php echo $tag_line; ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                  $query = "SELECT * FROM falp_hiring WHERE name = 'page_title' ";
                  $page_title = $db->getQueryOne($query)['details'];
                ?>
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold label-headers">Hiring Page Title</h6>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <textarea  id="textarea-ph" name="page_title" class="form-control" rows="3" style="color: black;"><?php echo $page_title; ?></textarea>
                        </div>
                      </div>
                    </div>
                  
                  <div class="row">
                  <div class="col-lg-4"></div>
                   <button class="btn btn-primary col-lg-4" name="saveHiring">SAVE</button>
                </div>
              </div>
              </form>
              </div>
          </section>
          <section id="post-hiring">
             <div class="content-message">
               <div class="col-lg-10 mb-4">
            <div class="card shadow mb-4 mt-4">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold label-headers">Job Posts</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                         <a href="javascript:void(0)" class="btn btn-primary mb-2 btn-add"><i class="fa fa-plus"></i> Post a job</a>

                        <table class="table table-bordered table-sm table-jobs" style="color:#000;">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th nowrap>PRF No.</th>
                              <th>Job Title</th>
                              <th>Details</th>
                              <th>Qualifications</th>
                              <th nowrap>Job Type</th>
                              <th>Department</th>
                              <th>Vacancy</th>
                              <th nowrap>Date Posted</th>
                              <th>Status</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody id="update_hiring">
                            <?php
                              $query = "SELECT * FROM falp_jobs ORDER BY date_posted ASC";
                              $jobs = $db->getQuery($query);

                              if ($jobs) {
                                foreach ($jobs as $i => $jo) {
                                  echo '<tr data-id="'.$jo['ID'].'">';
                                  echo '<td nowrap>'.($i+1).'</td>';
                                  echo '<td>'.($jo['prf_no']).'</td>';
                                  echo '<td nowrap>'.($jo['job_title']).'</td>';
                                  echo '<td>
                                    <div class="tr-60">
                                      '.($jo['details']).'
                                    </div>
                                  </td>';
                                  echo '<td>
                                    <div class="tr-60">
                                      '.($jo['qualifications']).'
                                    </div>
                                  </td>';
                                  echo '<td nowrap>'.($jo['job_function']).'</td>';
                                  echo '<td nowrap>'.($jo['dept']).'</td>';
                                  echo '<td nowrap>'.($jo['vacancy']).'</td>';
                                  echo '<td nowrap>'.$db->dateParse($jo['date_posted'], 'word').'</td>';
                                  echo '<td nowrap>'.($jo['status']).'</td>';
                                  echo '<td nowrap class="px-3 text-center"><a href="javascript:void(0)" class="btn btn-primary btn-edit"><i class="fa fa-edit"></i> Update</a></td>';
                                  echo '</tr>';
                                }
                              }
                            ?>
                          </tbody>
                        </table>
                      </div>
            </section>
            <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 <?php
    include 'src/script.php';
  ?>
  <script>
    $(document).ready(function(){

    });
     $(document).on('click', '.btn-add', function(){
        PopupCenter('add-job.php','falp',800,600);
      });

  $(document).on('click', '.btn-edit', function(){
        var id = $(this).closest('tr').data('id');
        PopupCenter('edit-job.php?id='+id,'falp',800,600);
      }); 

  setInterval(update_hiring, 2000);
  
  function update_hiring(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        var response = this.responseText;
        // alert(response);
        document.getElementById('update_hiring').innerHTML = response;
      }
    }
    xhttp.open("GET", "../rt/notification.php?operation=update_hiring", true);
    xhttp.send();
  } 
  </script>

</body>

</html>
            