<?php
require_once("common/common.php");
include_once('PHPMailer/PHPMailer.php');
use PHPMailer\PHPMailer\PHPMailer;
date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Host = gethostbyname('ssl://smtp.gmail.com'); // sets GMAIL as the SMTP server
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->Username = "victorshyammi@gmail.com"; // GMAIL username
$mail->Password = "SIruthayara1"; // GMAIL password
//Typical mail data
$mail->IsHTML(true); 

$query = "select * from employee_details";
$result = DB::run($query);
foreach($result as $row) {
	$today = date("Y-m-d");
	$birth_date = $row['emp_dob'];
	$employee_name = $row['emp_name'];
	if($birth_date == $today) {
		$body = "<div style='border: 3px solid green;width:700px;'><table width='700px;'><tr><td> <br><h2> <span style='color:#060556;margin-left: 15px;'>  APA Wishes </span> </h2> </td><td rowspan='3'><img width='150' height= '50' src='https://picsum.photos/200/300/?random' style='float:right;height:150px;witdh:100px;'></td></tr><tr><td> <br><span style='color:#c30b34;margin-left: 15px;'> $employee_name </span> </td></tr><tr><td> <br><span style='color:#060556;margin-left: 15px;font-family: cursive;'> Who is celebrating his  birthday on $today!! </span> </td></tr><tr><td> <br><span style='color:#0f9db5;margin-left: 15px;font-family: cursive;'> A very Happy Birth day  !!</span> </td></tr><tr><td> <br><span style='color:#060556;margin-left: 15px;font-family: cursive;'> Have a Great day Hillarious year ahead. !!</span><br> </td></tr></table><br><br></div>";
		$mail->AddAddress("vaithi.d@apaengineering.com", "Victor");
		//$mail->AddAddress("victorshyammi@gmail.com", "Victor");
		$mail->SetFrom("victorshyammi@gmail.com", "Shyam");
		$mail->Subject = "APA Engineering - Birth day Alert";
		$mail->Body = $body;
	
		if (!$mail->send()) {
			echo "Error code: " . $mail->ErrorInfo;
		} else {
			echo "Message sent to ".$row['emp_name']."<br>";
		}
	}
}


?>
