<?php
include '../../db/config.php';
$operation = $_GET['operation'];
if($operation == 'display_message'){
	$id = $_GET['id'];

	$selectmessage = "SELECT * FROM falp_applicant WHERE id = '$id'";
	$message = $db->getQuery($selectmessage);
	foreach ($message as $i => $mess) {
		$message = $mess['message'];
		echo $message;
	}
}