<?php 
    
    session_start();
    $server ='127.0.0.1';
    $user = 'root';
    $pass = '';
    $dbname = 'elearn';
    $db = mysqli_connect($server, $user, $pass, $dbname);


    $fullcourse = $_SESSION['fullcourse'];
    $sub1 = $_SESSION['sub1'];
    $sub2 = $_SESSION['sub2'];
    $sub3 = $_SESSION['sub3'];
    $sub4 = $_SESSION['sub4'];
    $sub5 = $_SESSION['sub5'];
    $sub6 = $_SESSION['sub6'];
    $sub7 = $_SESSION['sub7'];
    $sub8 = $_SESSION['sub8'];

    $qry = "SELECT * from tbl_subjects where Course_name = '$fullcourse'";
    $result  = mysqli_query($db, $qry);

                    require('fpdf/fpdf.php');

                    class PDF extends FPDF
                    {
                    // Page header
                        function Header()
                        {
                            // Logo
                            $this->Image('fpdf/logo.jpg',10,6,30);
                            // Arial bold 15
                            $this->SetFont('Arial','BU',15);
                            // Move to the right
                            $this->Cell(80);
                            // Title
                            $this->Cell(30,10,'Laguna State Polytechnic University',2,0,'C');
                            // Line break
                            $this->Ln(5);
                            $this->Cell(75);
                            $this->SetFont('Arial','',10);
                            $this->Cell(30,10,'San Pablo City Campus',2,0,'C');
                            $this->Ln(5);
                            $this->Cell(75);
                            $this->SetFont('Arial','',10);
                            $this->Cell(30,10,'Geo Development - Project Insight',2,0,'C');
                            $this->Ln(20);
                        }
                    }
                    $pdf = new PDF();
                    $pdf->AliasNbPages();
                    $pdf->AddPage();
                    $pdf->SetFont('Arial','',12);

                    $pdf->Cell(80);
                    $pdf->SetFont('Arial','B',12);
                    $pdf->Cell(30,10,'Course Name : '.$fullcourse,2,0,'C');

                    $pdf->Ln(6);
                    $pdf->Cell(40);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'_______________________________________________________________________________________________________________________',2,0,'C');

                    $pdf->Ln(10);
                    $pdf->Cell(80);
                    $pdf->SetFont('Arial','B',13);
                    $pdf->Cell(30,10,'COURSE SUBJECTS',2,0,'C');

                    $pdf->Ln(10);
                    $pdf->Cell(45);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'SUBJECT 1 : ',2,0,'C');
                    $pdf->Cell(60,10,$sub1,2,0,'C');

                    $pdf->Ln(6);
                    $pdf->Cell(45);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'SUBJECT 2 : ',2,0,'C');
                    $pdf->Cell(60,10,$sub2,2,0,'C');

                    $pdf->Ln(6);
                    $pdf->Cell(45);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'SUBJECT 3 : ',2,0,'C');
                    $pdf->Cell(60,10,$sub3,2,0,'C');

                    $pdf->Ln(6);
                    $pdf->Cell(45);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'SUBJECT 4 : ',2,0,'C');
                    $pdf->Cell(60,10,$sub4,2,0,'C');

                    $pdf->Ln(6);
                    $pdf->Cell(45);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'SUBJECT 5 : ',2,0,'C');
                    $pdf->Cell(60,10,$sub5,2,0,'C');

                    $pdf->Ln(6);
                    $pdf->Cell(45);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'SUBJECT 6 : ',2,0,'C');
                    $pdf->Cell(60,10,$sub6,2,0,'C');

                    $pdf->Ln(6);
                    $pdf->Cell(45);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'SUBJECT 7 : ',2,0,'C');
                    $pdf->Cell(60,10,$sub7,2,0,'C');

                    $pdf->Ln(6);
                    $pdf->Cell(45);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'SUBJECT 8 : ',2,0,'C');
                    $pdf->Cell(60,10,$sub8,2,0,'C');

                     $pdf->Ln(40);
                    $pdf->Cell(140);
                    $pdf->SetFont('Arial','',13);
                    $pdf->Cell(30,10,'______________________',2,0,'C');

                      $name = $_SESSION['Lastname'];
                      $fr = "";
                      $sex = $_SESSION['gen'];
                      if($sex =="Male")
                      {
                        $fr = "Mr. ";
                      }
                      else {
                        $fr = "Ms. ";
                      }
                      $fullN = $fr." ".$name;

                    $pdf->Ln(6);
                    $pdf->Cell(140);
                    $pdf->SetFont('Arial','I',8);
                    $pdf->Cell(30,10, 'Released by : administrator',2,0,'C');

                    $pdf->Ln(5);
                    $pdf->Cell(140);
                    $pdf->SetFont('Arial','B',10);
                    $pdf->Cell(30,10, $fullN,2,0,'C');
                    $pdf->Output();
                    newWin();
?>