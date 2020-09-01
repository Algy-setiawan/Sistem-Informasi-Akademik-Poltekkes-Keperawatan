<?php
include "conn.php";
require('fpdf17/fpdf.php');
/**
 Judul  : Laporan PDF (portait):
 Level  : Menengah
 Author : Hakko Bio Richard
 Blog   : www.hakkoblogs.com
 Web    : www.niqoweb.com
 Email  : hakkobiorichard@ygmail.com
 
 Untuk tutorial yang lainnya silahkan berkunjung ke www.hakkoblogs.com
 
 Butuh jasa pembuatan website, aplikasi, pembuatan program TA dan Skripsi.? Hubungi NiqoWeb ==>> 085694984803
 
 **/
//Menampilkan data dari tabel di database

$result=mysql_query("SELECT * FROM user_quizzes ORDER BY user_id ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_id = "";
$column_assignment_id = "";
$column_user_id = "";
$column_status = "";
$column_added_date = "";
$column_success = "";
$column_finish_date = "";
$column_pass_score_point ="";
$column_pass_score_perc ="";
$column_archived ="";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$id = $row["id"];
    $assignment_id = $row["assignment_id"];
    $user_id = $row["user_id"];
    $status = $row["status"];
    $added_date = $row["added_date"];
	$success = $row["success"];
    $finish_date = $row["finish_date"];
    $pass_score_point = $row["pass_score_perc"];
    $pass_score_perc = $row["pass_score_perc"];
    $archived = $row["archived"];
    

	$column_id = $column_id.$id."\n";
    $column_assignment_id = $column_assignment_id.$assignment_id."\n";
    $column_user_id = $column_user_id.$user_id."\n";
    $column_status = $column_status.$status."\n";
    $column_added_date = $column_added_date.$added_date."\n";
    $column_success = $column_success.$success."\n";
    $column_finish_date = $column_finish_date.$finish_date."\n";
    $column_pass_score_point = $column_pass_score_point.$pass_score_point."\n";
    $column_pass_score_perc = $column_pass_score_perc.$pass_score_perc."\n";
    $column_archived = $column_archived.$archived."\n";

//Create a new PDF file
$pdf = new FPDF('L','mm',array(297,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(125);
$pdf->Cell(30,10,'Hasil Quiz',0,0,'C');
$pdf->Ln();
$pdf->Cell(125);
$pdf->Cell(0,10,'');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(15,8,'id',1,0,'C',1);
$pdf->SetX(20);
$pdf->Cell(27,8,'assignment_id',1,0,'C',1);
$pdf->SetX(47);
$pdf->Cell(15,8,'user_id',1,0,'C',1);
$pdf->SetX(62);
$pdf->Cell(13,8,'status',1,0,'C',1);
$pdf->SetX(75);
$pdf->Cell(40,8,'added_date',1,0,'C',1);
$pdf->SetX(115);
$pdf->Cell(25,8,'success',1,0,'C',1);
$pdf->SetX(140);
$pdf->Cell(45,8,'finish_date',1,0,'C',1);
$pdf->SetX(185);
$pdf->Cell(31,8,'pass_score_point',1,0,'C',1);
$pdf->SetX(216);
$pdf->Cell(30,8,'pass_score_perc',1,0,'C',1);
$pdf->SetX(246);
$pdf->Cell(40,8,'archived',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(15,6,$column_id,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(20);
$pdf->MultiCell(27,6,$column_assignment_id,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(47);
$pdf->MultiCell(15,6,$column_user_id,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(62);
$pdf->MultiCell(13,6,$column_status,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(75);
$pdf->MultiCell(40,6,$column_added_date,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(25,6,$column_success,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(45,6,$column_finish_date,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(185);
$pdf->MultiCell(31,6,$column_pass_score_point,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(216);
$pdf->MultiCell(30,6,$column_pass_score_perc,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(246);
$pdf->MultiCell(40,6,$column_archived,1,'C');

$pdf->Output();
?>