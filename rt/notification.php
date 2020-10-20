<?php 
	include '../db/config.php';
	$operation = $_GET['operation'];

	if($operation == "update_hiring") {
        echo '<tbody id="update_hiring">';
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
        echo '</tbody>';
    }elseif ($operation == "update_jobcount"){
      $count = "SELECT COUNT(ID) FROM falp_jobs WHERE status = 'Open'";
      $countjob = $db->getQueryOne($count);
      $countjobs = $countjob[0];
      echo $countjobs;
    }
    else if($operation == "update_hiringposted") {
    	$query = "SELECT * FROM falp_jobs ORDER BY date_posted DESC";
      $jobs = $db->getQuery($query);

      if ($jobs) {
          foreach ($jobs as $i => $jo) {
            // echo $jo['job_title'];
            if($jo['status'] == 'Open'){ 
             echo '<div class="col-lg-4" style="color: black;">';
             echo '<div class="mx-md-n5">';
             echo '<div class="card text-left mt-2 mb-0 pl-0 mx-0">';
             echo '<div class="card-title">';
             echo '<h5 id="job_title">'.$jo['job_title'].'</h5>'; 
             echo '</div>';
             echo '<div class="card-body">';
             echo '<strong>Job Description: </strong>';
             echo '<p class="card-text">'.$jo['details'].'</p>'; 
             echo '<div class="animated fadeIn" id="qualifications_'.$jo['ID'].'" style="display:none;">';
             echo '<strong>Qualifications: </strong>'.$jo['qualifications'];
             echo '</div><br>';
             echo '<center><button class="btn btn-see-more" onclick="show_div('.$jo['ID'].')" id="button_show'.$jo['ID'].'"> See more</echo button></center>';
             echo '</div>';
             echo '<div class="card-footer pb-0  text-right text-muted">';
             echo '<i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;'.$db->dateParse($jo['date_posted'], 'word');
             echo '</div>';
             echo '</div>';
             echo '</div>';
             echo '</div>';
              }
            }
          }
    }
?>