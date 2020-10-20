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
  <title> EMPLOYEE - NEWS </title>
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
      <?php
        $select_news = "SELECT * FROM falp_emp_news ORDER BY news_posted AND news_status DESC";
        $list_news = $db->getQuery($select_news);
        foreach ($list_news as $i => $news) {
          $title = $news['news_title'];
          $date = $news['news_posted'];
          $file = $news['news_file'];
      echo '<div class="card news view overlay zoom">
              <h4 class="news_title">'.$title.'</h4>
                <div class="card-body">
                <img src="img/news/'.$file.'">
                  <h4 class="footer-date text-right"><i class="fas fa-clock"></i>'.$date.'</h4>
                </div>
            </div>';
        }
      ?>
      </div> <!-- card-body -->
    </div> <!-- card -->
      </div> <!-- col-lg-12 -->
    </div> <!-- row -->
 	</div> <!-- container-fluid -->
 </section>
</body>
</html>