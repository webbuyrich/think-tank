<?php
include('includes/conn.php');
global $dbh;

	if($_POST["email"])
	{
		$proposal = $_POST["proposal"];
		$employee = $_POST["employee"];
		$department = $_POST["department"];
		$jobTitle = $_POST["jobTitle"];
		$email = $_POST["email"];
		$reason = $_POST["reason"];
		$information = $_POST["information"];
		$cost = $_POST["cost"];
		$difference = $_POST["difference"];
		$resource = $_POST["resource"];
		$id = NULL;
		$employee = $_POST["employee"];


		$sql = "INSERT INTO `submissions` (id, employee, department, jobTitle, email, reason, information, cost, resource, proposal) VALUES (:id, :employee, :department, :jobTitle, :email, :reason, :information, :cost, :resource, :proposal)";
		$stmt = $dbh->prepare($sql);
		
		if($stmt->execute(array(':id'=>null, ':employee'=>$employee, ':department'=>$department, ':jobTitle'=>$jobTitle, ':email'=> $email, ':reason'=>$reason, ':information'=>$information, 
								':cost'=>$cost, ':resource'=>$resource, ':proposal'=>$proposal))){
			
			//////////////////////////////////////////////////////////////SEND EMAIL
			
			//recipient
			$to = .$email;

			// subject
			$subject = 'Think Tank Submission Confirmation';

			// message
			$message = '
			<html>
			<head>
			  <title>Think Tank Submission</title>
			</head>
			<body>
			  <p>Dear '.$employee.',</p>
			  <p>Thank you for unleashing your creativity and sharing your innovative ideas! To book your time with Gary, please contact Cynthia Torres at ctorres@bmgl.com. In the event 
			  you need more information, please contact Loraine Whited at lwhited@bmgl.com.</p>			  
			</body>
			</html>
			';

			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Additional headers
			$headers .= 'To: '.$employee.' <'.$email.'>' . "\r\n";
			$headers .= 'From: BMGL Think Tank Commitee <rpetersonbcm@gmail.com>' . "\r\n";
			$headers .= 'Cc: rpetersonbcm@gmail.com' . "\r\n";
			$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

			// Mail it
			mail($to, $subject, $message, $headers);
			//////////////////////////////////////////////////////////////SEND EMAIL



			// SEND MESSAGE BACK TO SCRIPT.JS TO SHOW MODAL
			echo '1 row inserted';		
		} else{
			echo 'There was an error';
		}
	


	// Here, you can also perform some database query operations with above values.
	}

?>