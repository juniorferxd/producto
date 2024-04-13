<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../../index.php");
}


?>
 
<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',25);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->SetTextColor(135,39,39); //COLOR
    $this->Cell(30,10,'CEPUNS',0,0,'C');


    $this->image('cepuns.png',175,5,25,20,'png');
    $this->SetTextColor(0,0,0);
    // Salto de línea

    $this->Ln(20);
    $this->SetFont('times','B',12);
    $this->SetTextColor(135,39,39); //COLOR
    $this->Cell(50,10,'Estudiante: '.' '. $_SESSION["s_usuario"],0,0,'C');
    $this->Ln(10);
    $this->SetfillColor(10, 8, 75);
    $this->SetTextColor(255, 255, 255); //COLOR
    $this->Cell(10);
    $this->Cell(20,10,'ID',1,0,'C',1);
	  $this->Cell(100,10,'FECHA DE REGISTRO',1,0,'C',1);
	  $this->Cell(50,10,'REGISTRO',1,1,'C',1);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página '.$this->PageNo()).'/{nb}',0,0,'C');

}
}


require 'cn.php';
mysqli_query($mysqli, "SET lc_time_names = 'es_ES'");


$consulta = "SELECT block.id AS ID,alumn.name AS ALUMNO,alumn.lastname AS APELLIDO,block.name AS CURSO, calification.val AS CALIFICACION FROM block inner join calification on block.id=calification.block_id

inner join alumn on calification.alumn_id = alumn.id WHERE alumn.name ='".$_SESSION["s_usuario"]."'";
$resultado = $mysqli->query($consulta); 
$suma=0;

             
                   
$pdf = new PDF();
$pdf -> AliasNbPages(); // para que el pie de pagina salga ordenado
$pdf->AddPage();
$pdf->SetFont('Helvetica','',10);
$pdf->SetfillColor(255,255,255);
$pdf->SetDrawColor(80,80,80);
$suma=0;
//inicio del resultado de la consulta



while ($row = $resultado->fetch_assoc()) {

  $pdf->Cell(10);
	$pdf->Cell(20,10,$row['ID'],'B',0,'C',0);
	$pdf->Cell(100,10,utf8_decode($row['CURSO']),'B',0,'C',0);
	$pdf->Cell(50,10,$row['CALIFICACION'],'B',1,'C',0);
  $suma+=$row['CALIFICACION'];


	}
  $pdf->SetTextColor(135,39,39); //COLOR
  $pdf->SetFont('Helvetica','B',12);
  $pdf->Cell(10);
  $pdf->Cell(35,10,'PUNTAJE TOTAL',0,0,'C');
  
  $pdf->Cell(220,10,$suma,0,0,'C');

  //$pdf->Output();
  $pdf->Output('I','Estudiante'.$_SESSION["s_usuario"].'.pdf', 'D');
 //fin de la consulta
 

?>