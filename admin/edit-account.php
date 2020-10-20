<?php
  session_start();
  if(!isset($_SESSION['login']['ID'])){
    header('location: functions/logout.php');
  }
  include '../db/config.php';

    $query = "SELECT * FROM falp_account";
    $account = $db->getQueryOne($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include 'src/head.php';
  ?>
  <title>FALP - Account Settings</title>
<style>
label {
  color: black;
}
</style>
</head>
<body>

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
            <h1 class="h3 mb-0" id="home">ACCOUNT</h1>
          </div>
          <section id="accounts">
    <div class="container">
      <div class="row">
          <div class="col-lg-8">
            <div class="account mb-2 pl-0">
              <div class="card-title account-header">
                <h5 class="font-weight-bold"> Update Password </h5>
              </div>
              <div class="content-message">
                <?php
            if(isset($_GET['success'])){
              $success = $_GET['success'];
              if($success == "true") {
          ?>
            <div class="text-center col-lg-7" style="margin-left: 160px;">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Account has been updated.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          <?php
            }else{
          ?>
          <div class="text-center col-lg-9" style="margin-left: 95px;">
              <div class="alert alert-danger alert-dismissible fade show" role="alert"">
                <strong>Wrong Password!</strong> Input correct old password.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          </div>
          <?php
                }
              }
          ?>
          <form action="functions/save.php" method="get">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Name </label>
                  <input type="hidden" name="id" value="<?php echo $id?>">
                  <input type="text" name="accountname" class="form-control" value="<?php echo $account['name']; ?>">
                </div>
              </div>
              <div class="col-lg-3"></div>
          </div>
          <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-sm-6 col-lg-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Username:</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $account['username']; ?>">
                </div>
              </div>
            </div>
          <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Old Password: </label>
                  <input type="password" name="oldpassword" class="form-control" placeholder=""  value="">
                  <label>New Password: </label>
                  <input type="password" name="newpassword" class="form-control" placeholder=""  value="">
                </div>
              </div>
          </div>
          <div class="col-lg-3"></div>
          <div class="col-lg-3">
            <button class="btn btn-block btn-primary btn-update" name="updateAcc">UPDATE</button>
            <br>
          </div>
            </div>
          </form>
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