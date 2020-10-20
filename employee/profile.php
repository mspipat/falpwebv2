<?php
session_start();
  if(!isset($_SESSION['login']['ID'])){
    header('location: functions/logout.php');
  }
  include '../db/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> EMPLOYEE - HOME </title>
  <?php
     include 'src/head.php';
     include 'src/link.php';
  ?>
</head>
<body class="winter-neva-gradient">
<?php
     include 'src/top-nav.php';
  ?>
 <section>
 	<div class="container-fluid">
 		<div class="row">
      <div class="col-lg-12">
        <div class="card rounded" id="profile" style="color: #01579b;">
            <div class="card-title">
              <h4>MY PROFILE</h4>
            </div>
            <div class="card-body" style="margin-top: -50px;">
              <?php
              $id = $_SESSION['login']['ID'];
              $select = "SELECT * FROM falp_emp_account WHERE ID = '$id'";
              $user_info = $db->getQuery($select);
              foreach ($user_info as $i => $c) {
                $id_number = $c['emp_id'];
              }
                $searchrecord = "SELECT * FROM falp_emp_information WHERE emp_id = '$id_number'";
                 $user_info = $db->getQuery($searchrecord);
                  foreach ($user_info as $i => $ds) {
                    $name = $ds['emp_name'];
                    $add = $ds['emp_add'];
                    $bday = $ds['emp_bday'];
                    $contact = $ds['emp_contact'];
                    $date_hired = $ds['date_deployed'];
                    $position = $ds['emp_position'];
                    $dept = $ds['emp_department'];
            ?>
            <table class="table table-sm table-bordered">
            <tbody>
              <tr>
                <?php 
                echo '<td rowspan="8" style="width: 100px;"><img src="img/emp_pict/'.$id_number.'.jpg" width="250" height="300"></img></td>';
                ?>
              </tr>
              <tr><td id="info"><i class="fas fa-user"></i> <?php echo  $name?></td></tr>
              <tr> <td id="info"><i class="fas fa-map-marked"></i> <?php echo  $add ?></td></tr>
              <tr> <td id="info"><i class="fas fa-birthday-cake"></i> <?php echo  $db->dateParse($bday,'word')?></td></tr>
              <!-- <tr> <td id="info"><i class="fas fa-phone-square"></i> <?php echo  $contact?></td></tr> -->
              <tr> <td id="info"><i class="fas fa-id-badge"></i> <?php echo  $id_number?></td></tr>
              <tr> <td id="info"><i class="fas fa-arrow-circle-right"></i> <?php echo  $position?></td></tr>
              <tr> <td id="info"><i class="fas fa-calendar-alt"></i> <?php echo  $db->dateParse($date_hired, 'word')?></td></tr>
              <tr> <td id="info"><i class="fas fa-sitemap"></i> <?php echo  $dept?></td></tr>
            </tbody>
            </table>
            <?php
                 }
              ?>
            </div>
        </div>
      </div>
    </div>
 	</div>
 </section>
</body>
</html>