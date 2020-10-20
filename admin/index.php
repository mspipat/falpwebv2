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
            <h1 class="h3 mb-0" id="home">HOME</h1>
          </div>
  <section id="messages">
    <div class="container">
      <div class="row">
        <?php 
        $query = "SELECT * FROM falp_message ORDER BY date_sent DESC";
        $message = $db->getQuery($query);

         if ($message) {
              foreach ($message as $i => $c) {
                $date_rec1 = $db->dateParse($c['date_sent'], 'word');
                $time_rec = $db->dateParse($c['date_sent'], 'time12');
                $date_rec = $date_rec1 . " " . $time_rec;

        ?>

          <div class="col-lg-6">
            <div class="message mb-2 pl-0">
              <div class="card-title pb-0 message-header">
                <h5 class="font-weight-bold mb-0"> 
                  <?php echo $c['subject']; ?> 
                    <span class="small" style="position: absolute; left: 490px;">
                      <a href="#<?php echo $c['ID']; ?>" class="delete1"> <i class="fa fa-times btn-m" aria-hidden="true" id="delete" data-izimodal-open="#modal" data-izimodal-transitionin="fadeInDown" class="btn btn-primary lm-1 rounded-4 pull-right" data-toggle="modal" data-target="#myModal"></i></a>
                    </span>
                </h5> 

                <p class="sender-mail"> <?php echo $c['sender_email']; ?> <span class="date_rec"> <?php echo $date_rec; ?> </span> </p>
                
              </div>
              <div class="card-body content-message" style="overflow-y: scroll;">
                <p> <?php echo $c['message']; ?> </p>
              </div> 
              <div class="sender-name card-footer pb-0" style="height: 50px;">
                <p class="font-italic font-weight-bold text-right sender"> <?php echo $c['sender']; ?> </p>
                <input type="hidden" name="id" class="id" value="<?php echo $c['ID']; ?>">
              </div>
            </div>
          </div>
          <?php
              }
            }
          ?>
      
     </div>   
    </div>
  </section>
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

   $('.delete1').click(function(){
    var id = $(this).attr('href');
    id = id.replace('#','');
      Swal.fire({
        title: 'Are you sure you want to delete?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
     window.location.href = 'functions/save.php?id='+id;
  }
})

});
</script>

<script src="../plugins/sweetalert.js"> </script>
<!-- <script src="../jquery/jquery-3.2.1.js"></script> -->
<script src="../plugins/iziModal/js/iziModal.js"> </script>
<script src="../plugins/iziModal/js/iziModal.min.js"> </script>

</body>

</html>
