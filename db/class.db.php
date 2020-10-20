<?php

class DB
{


 private $db;
 public $base_url;
 public $request_url;
 
function __construct($conn)
{
	$this->db = $conn;
	$this->base_url = 'http://'.$_SERVER['HTTP_HOST'];
	$this->request_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

public function dateParse($date,$format){
	if($date!=''){
		if($date!='0000-00-00 00:00:00'){
			switch ($format) {
				case 'local':
					return date("n\/j\/Y", strtotime($date));
					break;
				case 'ISO_8601':
					return date('c',strtotime($date));
					break;
				case 'common':
					return date('Y-m-d H:i:s',strtotime($date));
					break;
				case 'date':
					return date('Y-m-d',strtotime($date));
					break;
				case 'date2':
					return date('Y\/m\/d',strtotime($date));
					break;
				case 'word':
					return date('F j, Y',strtotime($date));
					break;
				case 'word-trim':
					return date('M j',strtotime($date));
					break;
				case 'time12':
					return date('h:i a',strtotime($date));
					break;
				case 'time24':
					return date('H:i',strtotime($date));
					break;
				default:
					return 'No selected format.';
					break;
			}
		}else{
			return '';
			// return '<i class="text-muted small">N/A</i>';
		}
	}else{
		return '';
	}
}

public function jpConvert($string){
	// $string = mb_convert_encoding($string, 'UTF-8', array('EUC-JP', 'SHIFT-JIS', 'AUTO'));
	// $string = mb_substr($string, 0, 490, "UTF-8");;
	// $string = utf8_encode($string);
	$string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
	// $string = mb_substr($string, 0, 10, 'utf-8');
	return $string;
}

public function getDates($date_start, $date_end){
 	$dates = array();
	$day_interval = ((new DateTime($date_start))->diff((new DateTime($date_end))))->days;
	for ($i=0; $i < $day_interval+1; $i++) {
	  array_push($dates, date('Y-m-d', strtotime($date_start. '+'.$i.' day')));
	}

	return $dates;
}

public function getDateTimeDiff($from, $to){
	$time1 = new DateTime($from);
	$time2 = new DateTime($to);
	$interval = $time1->diff($time2);
	return $interval->format('%i min(s) ago');
}

public function getRelativeTime($ts){

	if(!ctype_digit($ts))
	    $ts = strtotime($ts);

	$diff = time() - $ts;
	if($diff == 0)
	    return 'now';
	elseif($diff > 0)
	{
	    $day_diff = floor($diff / 86400);
	    if($day_diff == 0)
	    {
	        if($diff < 60) return 'just now';
	        if($diff < 120) return '1 minute ago';
	        if($diff < 3600) return floor($diff / 60) . ' minutes ago';
	        if($diff < 7200) return '1 hour ago';
	        if($diff < 86400) return floor($diff / 3600) . ' hours ago';
	    }
	    if($day_diff == 1) return 'Yesterday';
	    if($day_diff < 7) return $day_diff . ' days ago';
	    if($day_diff < 31) return ceil($day_diff / 7) . ' weeks ago';
	    if($day_diff < 60) return 'last month';
	    return date('F Y', $ts);
	}
	else
	{
	    $diff = abs($diff);
	    $day_diff = floor($diff / 86400);
	    if($day_diff == 0)
	    {
	        if($diff < 120) return 'in a minute';
	        if($diff < 3600) return 'in ' . floor($diff / 60) . ' minutes';
	        if($diff < 7200) return 'in an hour';
	        if($diff < 86400) return 'in ' . floor($diff / 3600) . ' hours';
	    }
	    if($day_diff == 1) return 'Tomorrow';
	    if($day_diff < 4) return date('l', $ts);
	    if($day_diff < 7 + (7 - date('w'))) return 'next week';
	    if(ceil($day_diff / 7) < 4) return 'in ' . ceil($day_diff / 7) . ' weeks';
	    if(date('n', $ts) == date('n') + 1) return 'next month';
	    return date('F Y', $ts);
	}
	
}


public function isConnected(){
	$connected = @fsockopen("www.google.com", 80); 
    if ($connected){
        $is_conn = true;
        fclose($connected);
    }else{
        $is_conn = false;
    }
    return $is_conn;
}

public function getQuery($q){
 	try {

	 	$stmt = $this->db->prepare($q);
	 	$stmt->execute();
	 	$result = $stmt->fetchAll();
	 	if($result){
	 		return $result;
	 	}

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function getQueryOne($q){
 	try {

	 	$stmt = $this->db->prepare($q);
	 	$stmt->execute();
	 	$result = $stmt->fetch();
	 	if($result){
	 		return $result;
	 	}

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function execQuery($q){
 	try {

	 	$stmt = $this->db->prepare($q);
	 	$stmt->execute();
	 	return true;

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function addResult($p){
 	try {

	 	$q = "
	 	CALL sp_add_result(
	 		:p_invoice_no,
	 		:p_car_maker,
	 		:p_car_model,
	 		:p_pn,
	 		:p_lot,
	 		:p_qty,
	 		:p_price,
	 		:p_amount
	 	) ";

	 	$stmt = $this->db->prepare($q);
	 	$stmt->bindparam(":p_invoice_no",$p['invoice_no'],PDO::PARAM_STR);
	 	$stmt->bindparam(":p_car_maker",$p['car_maker'],PDO::PARAM_STR);
	 	$stmt->bindparam(":p_car_model",$p['car_model'],PDO::PARAM_STR);
	 	$stmt->bindparam(":p_pn",$p['pn'],PDO::PARAM_STR);
	 	$stmt->bindparam(":p_lot",$p['lot'],PDO::PARAM_STR);
	 	$stmt->bindparam(":p_qty",$p['qty'],PDO::PARAM_STR);
	 	$stmt->bindparam(":p_price",$p['price'],PDO::PARAM_STR);
	 	$stmt->bindparam(":p_amount",$p['amount'],PDO::PARAM_STR);
	 	$stmt->execute();
	 	return true;

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function updateContact($p){
 	try {

	 	$q = "
	 	UPDATE falp_contact a 
		SET a.title = :title,
		a.details = :details,
		a.icon = :icon
		WHERE a.name = :name
		";

	 	$stmt = $this->db->prepare($q);
	 	$stmt->bindparam(":title",$p['title'],PDO::PARAM_STR);
	 	$stmt->bindparam(":details",$p['details'],PDO::PARAM_STR);
	 	$stmt->bindparam(":icon",$p['icon'],PDO::PARAM_STR);
	 	$stmt->bindparam(":name",$p['name'],PDO::PARAM_STR);
	 	$stmt->execute();
	 	return true;

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function updateHiring($p){
 	try {

	 	$q = "
	 	UPDATE falp_hiring a 
		SET a.details = :details
		WHERE a.name = :name
		";

	 	$stmt = $this->db->prepare($q);
	 	$stmt->bindparam(":details",$p['details'],PDO::PARAM_STR);
	 	$stmt->bindparam(":name",$p['name'],PDO::PARAM_STR);
	 	$stmt->execute();
	 	return true;

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function addJob($p){
 	try {

	 	$q = "
	 	INSERT INTO falp_jobs (
	 		job_title,
	 		details,
	 		qualifications,
	 		job_function,
	 		dept,
	 		prf_no,
	 		date_posted,
	 		status,
	 		vacancy
	 	) VALUES (
	 		:job_title,
	 		:details,
	 		:qualifications,
	 		:job_function,
	 		:dept,
	 		:ref,
	 		NOW(),
	 		:status,
	 		:vacancy
	 	)
		";

	 	$stmt = $this->db->prepare($q);
	 	$stmt->bindparam(":job_title",$p['job_title'],PDO::PARAM_STR);
	 	$stmt->bindparam(":details",$p['details'],PDO::PARAM_STR);
	 	$stmt->bindparam(":qualifications",$p['qualifications'],PDO::PARAM_STR);
	 	$stmt->bindparam(":job_function",$p['job_function'],PDO::PARAM_STR);
	 	$stmt->bindparam(":dept",$p['dept'],PDO::PARAM_STR);
	 	$stmt->bindparam(":ref",$p['ref'],PDO::PARAM_STR);
	 	$stmt->bindparam(":status",$p['status'],PDO::PARAM_STR);
	 	$stmt->bindparam(":vacancy",$p['vacancy'],PDO::PARAM_INT);
	 	$stmt->execute();
	 	return true;

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}
public function updateJob($p) {
	try {
		$q = "UPDATE falp_jobs SET 
		job_title = :job_title,
		details = :details,
		qualifications  = :qualifications,
		job_function = :job_function,
		dept = :dept,
		prf_no = :ref,
		date_posted = NOW(),
		status = :status,
		vacancy = :vacancy 
		WHERE ID = :id
		";

		$stmt = $this->db->prepare($q);
	 	$stmt->bindparam(":job_title",$p['job_title'],PDO::PARAM_STR);
	 	$stmt->bindparam(":details",$p['details'],PDO::PARAM_STR);
	 	$stmt->bindparam(":qualifications",$p['qualifications'],PDO::PARAM_STR);
	 	$stmt->bindparam(":job_function",$p['job_function'],PDO::PARAM_STR);
	 	$stmt->bindparam(":dept",$p['dept'],PDO::PARAM_STR);
	 	$stmt->bindparam(":ref",$p['ref'],PDO::PARAM_STR);
	 	$stmt->bindparam(":status",$p['status'],PDO::PARAM_STR);
	 	$stmt->bindparam(":id",$p['id'],PDO::PARAM_STR);
	 	$stmt->bindparam(":vacancy",$p['vacancy'],PDO::PARAM_INT);
	 	$stmt->execute();
	 	return true;

	}catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}
public function sendMessage($p) {
	try {
		$q = "INSERT INTO falp_message (
			sender, sender_email, subject, message, date_sent
		) VALUES (
			:sender, :sender_email, :subject, :message, NOW()
		)
		";

		 $stmt = $this->db->prepare($q);
		 $stmt->bindparam(":sender",$p['sender'],PDO::PARAM_STR);
		 $stmt->bindparam(":sender_email",$p['sender_email'],PDO::PARAM_STR);
		 $stmt->bindparam(":subject",$p['subject'],PDO::PARAM_STR);
		 $stmt->bindparam(":message",$p['message'],PDO::PARAM_STR);
		 $stmt->execute();
	 	return true;
	}
	catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function loginAccount($p){
 	try {

	 	$q = "
	 	SELECT * FROM falp_account 
	 	WHERE username = :username
	 	AND password = :password
		";

	 	$stmt = $this->db->prepare($q);
	 	$stmt->bindparam(":username",$p['username'],PDO::PARAM_STR);
	 	$stmt->bindparam(":password",$p['password'],PDO::PARAM_STR);
	 	$stmt->execute();
	 	$result = $stmt->fetch();
	 	if($result){
	 		return $result;
	 	}

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}
public function loginempAccount($p){
 	try {

	 	$q = "
	 	SELECT * FROM falp_emp_account
	 	WHERE emp_un = :emp_un
	 	AND emp_pw = :emp_pw
		";

	 	$stmt = $this->db->prepare($q);
	 	$stmt->bindparam(":emp_un",$p['username'],PDO::PARAM_STR);
	 	$stmt->bindparam(":emp_pw",$p['password'],PDO::PARAM_STR);
	 	$stmt->execute();
	 	$result = $stmt->fetch();
	 	if($result){
	 		return $result;
	 	}

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}
}
