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
          <div class="card-title">
          </div>
          <div class="card-body">
          </div>
        </div>
      </div>
    </div>
 	</div>
 </section>
</body>
</html>