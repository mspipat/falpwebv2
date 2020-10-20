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
        <div class="card rounded" id="home">
          <div class="card-body">
           <!--  <h4 class="card-title">Online Services</h4> -->
            <table class="table table-sm">
              <thead>
                <th colspan="6">Online Services</th>
              </thead>
              <tbody>
              <tr>
                <td>
                  <a href="#" class="btn table-menu"><i class="fas fa-calendar-check"></i> Attendance Monitoring</a>
                </td>
                <td>
                  <a href="#" class="btn table-menu"><i class="fas fa-calendar-plus"></i> Overtime Monitoring</a>
                </td>
                <td>
                  <a href="#" class="btn table-menu"><i class="fas fa-suitcase-rolling"></i> Leave Monitoring</a>
                </td>
                <td>
                  <a href="#" class="btn table-menu"><i class="fas fa-file-invoice"></i> Loan Payment History</a>
                </td>
                <td>
                  <a href="#" class="btn table-menu"><i class="fas fa-receipt"></i> Salary Details</a>
                </td>
                <td>
                  <a href="#" class="btn table-menu"><i class="fas fa-calendar-check"></i> 13 <sup> th </sup> Month Details </a>
                </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm">
              <thead>
                <th colspan="3">Government Services</th>
              </thead>
              <tbody>
              <tr>
                <td>  <a href="https://www.sss.gov.ph/" class="btn gov-menu" target="_blank"> <img src="img/sss.jpg"></a>
                  <a href="https://www.pagibigfundservices.com/" class="btn gov-menu" target="_blank"> <img src="img/pagibig.jpg"></a>
                  <a href="https://www.philhealth.gov.ph/" class="btn gov-menu" target="_blank"> <img src="img/philhealth.jpg"></a></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm">
              <thead>
                <th colspan="6">Bank Services</th>
              </thead>
              <tbody>
              <tr>
                <td>  <a href="https://www.rcbc.com/" class="btn bank-menu" target="_blank"> <img src="img/rcbc.png"></a>
                <a href="https://online.bpi.com.ph/portalserver/onlinebanking/sign-in" class="btn bank-menu" target="_blank"> <img src="img/bpi.jpg"></a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              </tbody>
            </table>
            <table class="table table-sm">
              <thead>
                <th colspan="6">Health Services</th>
              </thead>
              <tbody>
              <tr>
                <td>  <a href="https://www.cocolife.com/" class="btn bank-menu" target="_blank"> <img src="img/cocolife.jpg"></a>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
 	</div>
 </section>
</body>
</html>