<?php
include('includes/conn.php');
require('includes/fpdf.php');
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
		$think_tank_email = "richard.peterson@bcm.edu";
		$year = date('Y');
		$date = date('mdy');
		$filename = 'pdfs/'.$employee.'-'.$date.'.pdf';
		$increment = 0;

		$sql = "INSERT INTO `submissions` (id, employee, department, jobTitle, email, reason, information, cost, resource, proposal) VALUES (:id, :employee, :department, :jobTitle, :email, :reason, :information, :cost, :resource, :proposal)";
		$stmt = $dbh->prepare($sql);
		
		if($stmt->execute(array(':id'=>null, ':employee'=>$employee, ':department'=>$department, ':jobTitle'=>$jobTitle, ':email'=> $email, ':reason'=>$reason, ':information'=>$information, 
								':cost'=>$cost, ':resource'=>$resource, ':proposal'=>$proposal))){


			//////////////////////////////////////////////////////////////CREATE PDF FILE
			$pdf = new FPDF();
			$pdf->AddPage();
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
			$pdf->MultiCell(190,22, $reason,1,1);
			$pdf->Cell(50,10,'SUPPORTING INFORMATION',0,1);
			$pdf->MultiCell(190,22, $information,1,1);
			$pdf->Cell(50,10,'PROPOSAL COSTS',0,1);
			$pdf->MultiCell(190,22, $cost,1,1);
			$pdf->Cell(50,10,'DIFFERENTIATOR',0,1);
			$pdf->MultiCell(190,22, $difference,1,1);
			$pdf->Cell(50,10,'RESOURCES NEEDED',0,1);
			$pdf->MultiCell(190,22, $resource,1,1);
			$pdf->Cell(0,20, $filename ,0,1,"C");
			if (file_exists($filename)){
				$increment ++;
				$pdf->Output('pdfs/'.$employee.'-'.$date.'-'.$increment.'.pdf', 'F');
			} else{
				$pdf->Output('pdfs/'.$employee.'-'.$date.'.pdf', 'F');
			}
			
			////////////////////////////////////////////////////////////////CREATE PDF FILE





			
			
			// SEND MESSAGE BACK TO SCRIPT.JS TO SHOW MODAL
			echo '1 row inserted';		
		} else{
			echo 'There was an error';
		}
	


	// Here, you can also perform some database query operations with above values.
	}

?>