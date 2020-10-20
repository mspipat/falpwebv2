<?php
	include '../../db/config.php';

	if(isset($_POST['saveContact'])){
		$address_title = $_POST['address_title'];
		$address_icon = $_POST['address_icon'];
		$address_details = $_POST['address_details'];

		$email_title = $_POST['email_title'];
		$email_icon = $_POST['email_icon'];
		$email_details = $_POST['email_details'];

		$telephone_title = $_POST['telephone_title'];
		$telephone_icon = $_POST['telephone_icon'];
		$telephone_details = $_POST['telephone_details'];

		$social_title = $_POST['social_title'];
		$social_icon = $_POST['social_icon'];
		$social_details = $_POST['social_details'];

		$p = array(
			"title" => $address_title,
			"icon" => $address_icon,
			"details" => $address_details,
			"name" =>'address'
		);

		$db->updateContact($p);

		$p = array(
			"title" => $email_title,
			"icon" => $email_icon,
			"details" => $email_details,
			"name" =>'email'
		);

		$db->updateContact($p);

		$p = array(
			"title" => $telephone_title,
			"icon" => $telephone_icon,
			"details" => $telephone_details,
			"name" =>'telephone'
		);

		$db->updateContact($p);

		$p = array(
			"title" => $social_title,
			"icon" => $social_icon,
			"details" => $social_details,
			"name" =>'social'
		);

		$db->updateContact($p);

		header("location: ../contact.php?success=true");


	}else if(isset($_POST['saveHiring'])){
		$page_title = $_POST['page_title'];
		$page_title = str_replace(PHP_EOL, "<br>", $page_title);
		$tag_line = $_POST['tag_line'];
		$tag_line = str_replace(PHP_EOL, "<br>", $tag_line);
		$p = array(
			"name" => 'page_title',
			"details" => $page_title
		);

		$db->updateHiring($p);

		$p = array(
			"name" => 'tag_line',
			"details" => $tag_line
		);
		
		$db->updateHiring($p);

		header("location: ../hiring.php?success=true");
		
	}else if(isset($_POST['saveJob'])){
		$job_title = $_POST['job_title'];
		$details = $_POST['details'];
		$details = str_replace(PHP_EOL, "<br>", $details);
		$qualifications = $_POST['qualifications'];
		$qualifications = str_replace(PHP_EOL, "<br>", $qualifications);
		$job_function = $_POST['job_function'];
		$dept = $_POST['dept'];
		$ref = $_POST['prf_no'];
		$status = "Open";
		$vacancy = $_POST['num_vacancy'];

		$p = array(
			"job_title" => $job_title,
			"details" => $details,
			"qualifications" => $qualifications,
			"job_function" => $job_function,
			"dept" => $dept,
			"ref" => $ref,
			"status" => $status,
			"vacancy" => $vacancy

		);

		if($db->addJob($p)){
			header("location: ../add-job.php?success=true");
		}

	}else if(isset($_POST['updateJob'])){
		$id = $_POST['id'];
		$job_title = $_POST['job_title'];
		$details = $_POST['details'];
		$qualifications = $_POST['qualifications'];
		$job_function = $_POST['job_function'];
		$dept = $_POST['dept'];
		$ref = $_POST['prf_no'];
		$status = $_POST['status'];
		$vacancy = $_POST['num_vacancy'];
		$p = array(
			"id" => $id,
			"job_title" => $job_title,
			"details" => $details,
			"qualifications" => $qualifications,
			"job_function" => $job_function,
			"dept" => $dept,
			"ref" => $ref,
			"status" => $status,
			"vacancy" => $vacancy
		);
		if($db->updateJob($p)){
			header("location: ../edit-job.php?success=true");
		}

	}else if(isset($_POST['sendMessage'])){
		$sender = $_POST['sender']; 
		$sender_email = $_POST['sender_email'];
		$subject = $_POST['subject'];
		$message = $_POST['msg'];
		echo $message;
		$p = array(
			"sender" => $sender,
			"sender_email" => $sender_email,
			"subject" => $subject,
			"message" => $message

		);
		if($db->sendMessage($p)){
			header("location: ../../index.php?success=true#form");
		}
	}
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM falp_message WHERE ID = $id";
		if($db->execQuery($query)){
			header("location: ../index.php?success=true");
		}
	}
	if(isset($_GET['updateAcc'])){
		$accountname = $_GET['accountname']; 
		$username = $_GET['username'];
		$oldpassword = $_GET['oldpassword'];
		$newpassword = $_GET['newpassword'];

		$query = "SELECT * FROM falp_account WHERE ID = '1'";
		$account = $db->getQueryOne($query);
		$password = $account['password'];
		// echo $password;
		// echo '<br>';
		// print_r($account);
		if($oldpassword == $password){
			$query1 = "UPDATE falp_account SET name = '$accountname', username = '$username', password = '$newpassword' WHERE ID = '1'";
			if($db->execQuery($query1)){
			header("location: ../edit-account.php?success=true");
			}
		}else{
			header("location: ../edit-account.php?success=false");
		}
	}
