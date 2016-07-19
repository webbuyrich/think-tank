<?php
//include('includes/conn.php');
require('includes/fpdf.php');
require_once ('phpMailer/PHPMailerAutoload.php');
date_default_timezone_set('America/Monterrey');
define('DS','/');
<<<<<<< HEAD
<<<<<<< HEAD

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set("error_log", "/log/log.txt");

global $dbh;

=======
define('UPLOAD_DIR', 'uploads/');

=======
define('UPLOAD_DIR', 'uploads/');

>>>>>>> master
// Report simple running errors
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
ini_set('log_errors',TRUE);
ini_set('html_errors',FALSE);
ini_set('error_log','logs/log.txt');
ini_set('display_errors',FALSE);
<<<<<<< HEAD

//global $dbh;

>>>>>>> master
=======

//global $dbh;

>>>>>>> master
	// CHECK IF EMAIL IS SET
	if($_POST["email"])
	{
		//email inputs
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
		
<<<<<<< HEAD
<<<<<<< HEAD
		if(!isset($_FILES['uploadFile']['name'])){
			echo 'File Not Found '."\r\n";
		}
=======
=======
>>>>>>> master
		//CHECK IF FILE HAS BEEN UPLOADED
		if (!empty($_FILES['uploadFile'])) {
            $myFile = $_FILES['uploadFile'];

            if ($myFile["error"] !== UPLOAD_ERR_OK) {
                echo "error";
                exit;
            }

            // ensure a safe filename
            $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

            // don't overwrite an existing file
            $i = 0;
            $parts = pathinfo($name);
            while (file_exists(UPLOAD_DIR . $name)) {
                $i++;
                $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
            }

            // preserve file from temporary directory
            $success = move_uploaded_file($myFile["tmp_name"],
                UPLOAD_DIR . $name);
            if (!$success) { 
                echo "error";
                exit;
            } else{
                echo 'File Save Success!';
            }

            // set proper permissions on the new file
            chmod(UPLOAD_DIR . $name, 0644);
        } else {
        	echo " FILE error";
        }
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master

		//form committee
		//$think_tank_email = array('ctorres@bmgl.com', 'margaris@bcm.edu','Loraine.whited@bcm.edu', 'richard.peterson@bcm.edu');
		

		
		
<<<<<<< HEAD
<<<<<<< HEAD
		print_r($think_tank_email1);
=======
		
>>>>>>> master
=======
		
>>>>>>> master

		$year = date('Y');
		$date = date('mdy');

		// file directories
		$dir = 'pdfs'.DS;
		$filename = $employee.$date.'.pdf';
		

		//logos
		$logo = 'images/bgl-logo.png';
		$think_logo = 'images/think-tank-small.png';
		
		//add parenthesis and number if pdf already exists
		$i = 1;
		while (file_exists($dir.$filename)) {
		        $parts = explode('.', $filename);
		        // Remove any numbers in brackets in the file name
		        $parts[0] = preg_replace('/\(([0-9]*)\)$/', '', $parts[0]);
		        $parts[0] .= '('.$i.')';

		        $new_file_name = implode('.', $parts);
		        if (!file_exists($new_file_name)) {
		            $filename = $new_file_name;
		        }
		        $i++;
		}

<<<<<<< HEAD
<<<<<<< HEAD
		//insert data into database
=======
		/*insert data into database
>>>>>>> master
		$sql = "INSERT INTO `submissions` (id, employee, department, jobTitle, email, reason, information, cost, resource, proposal) VALUES (:id, :employee, :department, :jobTitle, :email, :reason, :information, :cost, :resource, :proposal)";
		$stmt = $dbh->prepare($sql);*/
		
		/*if($stmt->execute(array(':id'=>null, ':employee'=>$employee, ':department'=>$department, ':jobTitle'=>$jobTitle, ':email'=> $email, ':reason'=>$reason, ':information'=>$information, 
								':cost'=>$cost, ':resource'=>$resource, ':proposal'=>$proposal))){*/


		


<<<<<<< HEAD
		


=======
>>>>>>> master

=======
		/*insert data into database
		$sql = "INSERT INTO `submissions` (id, employee, department, jobTitle, email, reason, information, cost, resource, proposal) VALUES (:id, :employee, :department, :jobTitle, :email, :reason, :information, :cost, :resource, :proposal)";
		$stmt = $dbh->prepare($sql);*/
		
		/*if($stmt->execute(array(':id'=>null, ':employee'=>$employee, ':department'=>$department, ':jobTitle'=>$jobTitle, ':email'=> $email, ':reason'=>$reason, ':information'=>$information, 
								':cost'=>$cost, ':resource'=>$resource, ':proposal'=>$proposal))){*/


		



>>>>>>> master
			/*CREATE PDF FILE*/
			
			//Create Page Number for PDF
			class PDF extends FPDF
			{
				function Footer()
				{
				    // Go to 1.5 cm from bottom
				    $this->SetY(-15);
				    // Select Arial italic 8
				    $this->SetFont('Arial','I',8);
				    // Print centered page number
				    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
				}
			}


			$pdf = new PDF();
			$pdf->AddPage();
			$pdf->Image($think_logo,10,0,25);
			$pdf->Image($logo,170,8,33);
			$pdf->SetFont('Arial','B',24);
			$pdf->Cell(0,10,'Think Tank Form Submission', "B",1,"C");
			$pdf->Ln();
			$pdf->SetFont('Arial','B',11);
			$pdf->Cell(40,10,'Proposal: ',0,0, "R");
			$pdf->Cell(80,10, $proposal,0,1);
			$pdf->Cell(40,10,'Employee Name: ',0,0, "R");
			$pdf->Cell(80,10, $employee,0,1);
			$pdf->Cell(40,10,'Department: ',0,0, "R");
			$pdf->Cell(80,10, $department,0,1);
			$pdf->Cell(40,10,'Job Title: ',0,0, "R");
			$pdf->Cell(80,10, $jobTitle,0,1);
			$pdf->Cell(40,10,'Email Address: ',0,0, "R");
			$pdf->Cell(80,10, $email,0,1);
			$pdf->Ln();			
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(50,10,'THINK TANK PROPOSAL',0,1);						
			$pdf->SetFont('Arial','I',8);
			$pdf->MultiCell(190,10, $reason,0,1);			
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(50,10,'SUPPORTING INFORMATION',0,1);
			$pdf->SetFont('Arial','I',8);
			$pdf->MultiCell(190,10, $information,0,1);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(50,10,'PROPOSAL COSTS',0,1);
			$pdf->SetFont('Arial','I',8);
			$pdf->MultiCell(190,10, $cost,0,1);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(50,10,'DIFFERENTIATOR',0,1);
			$pdf->SetFont('Arial','I',8);
			$pdf->MultiCell(190,10, $difference,0,1);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(50,10,'RESOURCES NEEDED',0,1);
			$pdf->SetFont('Arial','I',8);
			$pdf->MultiCell(190,10, $resource,0,1);			
			$pdf->Output('pdfs/'.$filename, 'F');		
			
			////////////////////////////////////////////////////////////////CREATE PDF FILE	

			//////////////////////////////////////////////////////////////SEND EMAILS
			
			//user recipient email variables
			$to = $email;			
			$subject = 'Think Tank Submission Confirmation';			
			$message = '
				
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				  <meta name="viewport" content="width=device-width, initial-scale=1" />
				  <title>Neopolitan Confirm Email</title>
				  <!-- Designed by https://github.com/kaytcat -->
				  <!-- Robot header image designed by Freepik.com -->

				  <style type="text/css">
				  @import url(http://fonts.googleapis.com/css?family=Droid+Sans);

				  /* Take care of image borders and formatting */

				  img {
				    max-width: 600px;
				    outline: none;
				    text-decoration: none;
				    -ms-interpolation-mode: bicubic;
				  }

				  a {
				    text-decoration: none;
				    border: 0;
				    outline: none;
				    color: #bbbbbb;
				  }

				  a img {
				    border: none;
				  }

				  /* General styling */

				  td, h1, h2, h3  {
				    font-family: Helvetica, Arial, sans-serif;
				    font-weight: 400;
				  }

				  td {
				    text-align: center;
				  }

				  body {
				    -webkit-font-smoothing:antialiased;
				    -webkit-text-size-adjust:none;
				    width: 100%;
				    height: 100%;
				    color: #37302d;
				    background: #ffffff;
				    font-size: 16px;
				  }

				   table {
				    border-collapse: collapse !important;
				  }

				  .headline {
				    color: #ffffff;
				    font-size: 36px;
				  }

				 .force-full-width {
				  width: 100% !important;
				 }

				 .force-width-80 {
				  width: 80% !important;
				 }


				  </style>

				  <style type="text/css" media="screen">
				      @media screen {
				         /*Thanks Outlook 2013! http://goo.gl/XLxpyl*/
				        td, h1, h2, h3 {
				          font-family: "Droid Sans", "Helvetica Neue", "Arial", "sans-serif" !important;
				        }
				      }
				  </style>

				  <style type="text/css" media="only screen and (max-width: 480px)">
				    /* Mobile styles */
				    @media only screen and (max-width: 480px) {

				      table[class="w320"] {
				        width: 320px !important;
				      }

				      td[class="mobile-block"] {
				        width: 100% !important;
				        display: block !important;
				      }


				    }
				  </style>
				</head>
				<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
				<table align="center" cellpadding="0" cellspacing="0" class="force-full-width" height="100%" >
				  <tr>
				    <td align="center" valign="top" bgcolor="#ffffff"  width="100%">
				      <center>
				        <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="600" class="w320">
				          <tr>
				            <td align="center" valign="top">

				                <table style="margin: 0 auto; width: 100%;" cellpadding="0" cellspacing="0" class="force-full-width" style="margin:0 auto;">
				                  <tr>
				                    <td style="font-size: 30px; text-align:center; background-color: #1E76BC; color:#fff;
				                    ">
				                      <br>
				                        Baylor Genetics Laboratories
				                      <br>
				                      <br>
				                    </td>
				                  </tr>
				                </table>

				                <table style="margin: 0 auto; width: 100%;" cellpadding="0" cellspacing="0" class="force-full-width" bgcolor="#4dbfbf">
				                  <tr>
				                    <td>
				                    <br>
				                      <img src="https://www.filepicker.io/api/file/carctJpuT0exMaN8WUYQ" width="224" height="240" alt="robot picture">
				                    </td>
				                  </tr>
				                  <tr>
				                    <td class="headline">
				                      <h1 style="color:#fff;">Submission Success!</h1>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td>

				                      <center>
				                        <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="80%">
				                          <tr>
				                            <td style="color:#fff;">
				                            <br>
				                             <p>We have received your Think Tank submission! You will be contacted by Cynthia Torres for an appointment with Gary.</p>
				                            <br>
											<p>For more information contact Loraine Whited at lwhited@bmgl.com</p>
				                            <br>
				                            </td>
				                          </tr>
				                        </table>
				                      </center>

				                    </td>
				                  </tr>				                  
				                </table>

				                

				                <table style="margin: 0 auto; width: 100%;" cellpadding="0" cellspacing="0" class="force-full-width" bgcolor="#414141" style="margin: 0 auto">
				                  <tr>
				                    <td style="background-color:#414141;">
				                    <br>
				                    <br>
				                      <a href="https://www.linkedin.com/company/baylor-miraca-genetics-laboratories"><img src="http://focusedandcreative.com/thinktank/images/linkedin.png" alt="linkedin" target="_blank"></a>
				                      <a href="https://twitter.com/baylormiracagen"><img src="http://focusedandcreative.com/thinktank/images/facebook.png" alt="facebook" target="_blank"></a>
				                      <a href="https://www.facebook.com/BaylorMiraca"><img src="http://focusedandcreative.com/thinktank/images/twitter.png" alt="twitter" target="_blank"></a>
				                      <br>
				                      <br>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td style="color:#bbbbbb; font-size:12px;">
				                      <img src="http://bmgl.com/skin/frontend/ultimo/bmgl/images/BaylorGenetics.png" height="52" width="152" alt="">
				                      <br><br>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td style="color:#bbbbbb; font-size:12px;">
				                       &copy; Copyright '.$year.'
				                       <br>
				                       <br>
				                    </td>
				                  </tr>
				                </table>
				            </td>
				          </tr>
				        </table>
				    </center>
				    </td>
				  </tr>
				</table>
				</body>
				</html>

			';		
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";			
			$headers .= 'From: BMGL Think Tank Commitee <donotreply@bcm.edu>' . "\r\n";		

			if( mail($to, $subject, $message, $headers) ){
				echo 'Confirmation Success!'."\r\n";
			} else{
				echo 'error';
			}

			$mail = new PHPMailer;
			$mail->From = $email;
			$mail->FromName = $employee;
			$mail->AddAddress('richard.peterson@bcm.edu');
			//$mail->AddAddress('rpetersonbcm@gmail.com');
			//$mail->AddAddress('rpetersonbcm@gmail.com');
			
			//Provide file path and name of the attachments
			       
<<<<<<< HEAD
			$mail->addAttachment($dir.$filename); //Filename is optional		
=======
			$mail->addAttachment($dir.$filename); //Filename is optional
			if($success){
				$mail->addAttachment(UPLOAD_DIR . $name);
			}		
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master

			$mail->isHTML(true);

			$mail->Subject = "New Think Tank Submission";
			$mail->Body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				  <meta name="viewport" content="width=device-width, initial-scale=1" />
				  <title>Neopolitan Confirm Email</title>
				  <!-- Designed by https://github.com/kaytcat -->
				  <!-- Robot header image designed by Freepik.com -->

				  <style type="text/css">
				  @import url(http://fonts.googleapis.com/css?family=Droid+Sans);

				  /* Take care of image borders and formatting */

				  img {
				    max-width: 600px;
				    outline: none;
				    text-decoration: none;
				    -ms-interpolation-mode: bicubic;
				  }

				  a {
				    text-decoration: none;
				    border: 0;
				    outline: none;
				    color: #bbbbbb;
				  }

				  a img {
				    border: none;
				  }

				  /* General styling */

				  td, h1, h2, h3  {
				    font-family: Helvetica, Arial, sans-serif;
				    font-weight: 400;
				  }

				  td {
				    text-align: center;
				  }

				  body {
				    -webkit-font-smoothing:antialiased;
				    -webkit-text-size-adjust:none;
				    width: 100%;
				    height: 100%;
				    color: #37302d;
				    background: #ffffff;
				    font-size: 16px;
				  }

				   table {
				    border-collapse: collapse !important;
				  }

				  .headline {
				    color: #ffffff;
				    font-size: 36px;
				  }

				 .force-full-width {
				  width: 100% !important;
				 }

				 .force-width-80 {
				  width: 80% !important;
				 }




				  </style>

				  <style type="text/css" media="screen">
				      @media screen {
				         /*Thanks Outlook 2013! http://goo.gl/XLxpyl*/
				        td, h1, h2, h3 {
				          font-family: "Droid Sans", "Helvetica Neue", "Arial", "sans-serif" !important;
				        }
				      }
				  </style>

				  <style type="text/css" media="only screen and (max-width: 480px)">
				    /* Mobile styles */
				    @media only screen and (max-width: 480px) {

				      table[class="w320"] {
				        width: 320px !important;
				      }

				      td[class="mobile-block"] {
				        width: 100% !important;
				        display: block !important;
				      }


				    }
				  </style>
				</head>
				<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
				<table align="center" cellpadding="0" cellspacing="0" class="force-full-width" height="100%" >
				  <tr>
				    <td align="center" valign="top" bgcolor="#ffffff"  width="100%">
				      <center>
				        <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="600" class="w320">
				          <tr>
				            <td align="center" valign="top">

				                <table style="margin: 0 auto; width: 100%;" cellpadding="0" cellspacing="0" class="force-full-width" style="margin:0 auto;">
				                  <tr>
				                    <td style="font-size: 30px; text-align:center; background-color: #1E76BC; color:#fff;
				                    ">
				                      <br>
				                        Baylor Genetics Laboratories
				                      <br>
				                      <br>
				                    </td>
				                  </tr>
				                </table>

				                <table style="margin: 0 auto; width: 100%;" cellpadding="0" cellspacing="0" class="force-full-width" bgcolor="#4dbfbf">
				                  <tr>
				                    <td>
				                    <br>
				                      <img src="https://www.filepicker.io/api/file/TjmeNWS5Q2SFmtJlUGLf" width="224" height="240" alt="robot picture">
				                    </td>
				                  </tr>
				                  <tr>
				                    <td class="headline">
				                      <h1 style="color:#fff;">New Think Tank Submission!</h1>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td>

				                      <center>
				                        <table style="margin: 0 auto;" cellpadding="0" cellspacing="0" width="80%">
				                          <tr>
				                            <td style="color:#fff;">
				                            <br>
				                             <p>A new Think Tank submission has been sent. Please see the PDF attached to this email.</p>
				                            <br>
											<p>If you have issues opening the PDF please contact Richard Peterson at <span style="color:#fff">richard.peterson@bcm.edu</span></p>
				                            <br>
				                            </td>
				                          </tr>
				                        </table>
				                      </center>

				                    </td>
				                  </tr>				                  
				                </table>

				                

				                <table style="margin: 0 auto; width: 100%;" cellpadding="0" cellspacing="0" class="force-full-width" bgcolor="#414141" style="margin: 0 auto">
				                  <tr>
				                    <td style="background-color:#414141;">
				                    <br>
				                    <br>
				                      <a href="https://www.linkedin.com/company/baylor-miraca-genetics-laboratories"><img src="http://focusedandcreative.com/thinktank/images/linkedin.png" alt="linkedin" target="_blank"></a>
				                      <a href="https://twitter.com/baylormiracagen"><img src="http://focusedandcreative.com/thinktank/images/facebook.png" alt="facebook" target="_blank"></a>
				                      <a href="https://www.facebook.com/BaylorMiraca"><img src="http://focusedandcreative.com/thinktank/images/twitter.png" alt="twitter" target="_blank"></a>
				                      <br>
				                      <br>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td style="color:#bbbbbb; font-size:12px;">
				                       <img src="http://bmgl.com/skin/frontend/ultimo/bmgl/images/BaylorGenetics.png" height="52" width="152" alt="">
				                      <br><br>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td style="color:#bbbbbb; font-size:12px;">
				                       &copy; Copyright '.$year.'
				                       <br>
				                       <br>
				                    </td>
				                  </tr>
				                </table>
				            </td>
				          </tr>
				        </table>
				    </center>
				    </td>
				  </tr>
				</table>
				</body>
				</html>';
			$mail->AltBody = "This is the plain text version of the email content";


			if(!$mail->send()) 
			{
			    echo "error";
			} 
			else 
			{
			    echo "Submission Success!";
			}

			//////////////////////////////////////////////////////////////END SEND EMAILS		
			
			/*// SEND MESSAGE BACK TO SCRIPT.JS TO SHOW MODAL
			echo '1 row inserted';	*/	
		} else{
			echo 'error';
		}
	


	



?>