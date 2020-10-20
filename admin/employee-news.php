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
<link rel="stylesheet" href="../plugins/iziModal/css/iziModal.css">
<link rel="stylesheet" href="../plugins/iziModal/css/iziModal.min.css">
<!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> -->
  <?php
    include 'src/head.php';
  ?>
  <title>FALP - News</title>
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
            <h1 class="h3 mb-0" id="home">EMPLOYEE'S PORTAL - NEWS</h1>
          </div>
 <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
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
