<?php 
require("fpdf/fpdf.php");


$heading= "this document is to be tested as a php document"; 

$sub_heading= "This the supposed sub heading and i would use lorem ipsum to make the text handful hths  hfhf jssib  hsgs ls hhbf osihf urbsjbd ";

$content= "This is a familiar setting for a major charater and it is encoded with a very frutile existence and major infomatics and design pattern";


$pdf = new FPDF();
$pdf-> AddPage();
$pdf-> SetFont("Arial", "B", 16);
$pdf->  Cell(40,10, "Loan Request ",1,0);
$pdf->  Cell(70,10, "Bio-Data",1,1);

$pdf->  Cell(50,10, "Name",1,0);
$pdf->  Cell(50,10, $_POST['fname'],1,1);

$pdf->  Cell(50,10, "Email",1,0);
$pdf->  Cell(50,10, "Name",1,1);

$pdf->  Cell(50,10, "Phone No",1,0);
$pdf->  Cell(50,10, "Name",1,1);

$pdf->  Cell(50,10, "Welcome",1,0);
$pdf->  Cell(50,10, "Name",1,1);


$pdf->  Cell(50,10, "Welcome",1,0);
$pdf->  Cell(50,10, "Name",1,1);


$pdf->  Cell(50,10, "Welcome",1,0);
$pdf->  Cell(50,10, "Name",1,1);


$pdf -> output();

 ?>

<form>

</form>

</body>


</html>