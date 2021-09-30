<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
$user_id=$user_id;
$id=$_GET['printminimental'];
$sel=$conn->query("SELECT * from minimentalstatus where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {

$date_resident=$row['date_resident'];
$resident_name=$row['resident_name'];
$resident_id=$row['resident_id'];


$orientationmaxscore=$row['orientationmaxscore'];
$orientationmaxscores=explode (",",strval($orientationmaxscore));
$orientationscore=$row['orientationscore'];
$orientationscores=explode (",",strval($orientationscore));
$orientation_qualifier=$row['orientation_qualifier'];
$orientation_qualifiers=explode (",",strval($orientation_qualifier));
$reg_maxscore=$row['reg_maxscore'];
$reg_maxscores=explode (",",strval($reg_maxscore));
$registration_score=$row['registration_score'];
$registration_scores=explode (",",strval($registration_score));
$registration_qualifier=$row['registration_qualifier'];
$registration_qualifiers=explode (",",strval($registration_qualifier));
$calculate_maxscore=$row['calculate_maxscore'];
$calculate_maxscores=explode (",",strval($calculate_maxscore));
$calculate_score=$row['calculate_score'];
$calculate_scores=explode (",",strval($calculate_score));
$calculate_qualifier=$row['calculate_qualifier'];
$calculate_qualifiers=explode (",",strval($calculate_qualifier));
$recall_maxscore=$row['recall_maxscore'];
$recall_maxscores=explode (",",strval($recall_maxscore));
$recall_score=$row['recall_score'];
$recall_scores=explode (",",strval($recall_score));
$recall_qualifier=$row['recall_qualifier'];
$recall_qualifiers=explode (",",strval($recall_qualifier));
$language_maxscore=$row['language_maxscore'];
$language_maxscores=explode (",",strval($language_maxscore));
$language_score=$row['language_score'];
$language_scores=explode (",",strval($language_score));
$language_qualifier=$row['language_qualifier'];
$language_qualifiers=explode (",",strval($language_qualifier));

$producedby=$row['producedby'];
$title=$row['title'];
$supervisor=$row['supervisor'];
$date=$row['date'];

}

$html='
<h3 style="text-align:center">MINI MENTAL STATUS EXAMINATION </h3>
(Must be completed by a clinician trained to perform this assessment)
<br>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">DATE:  <b>'.$date_resident.'</b></td>
    <td style="width:20%">RESIDENT NAME:<b>'.$resident_name.'</td>
    
  </tr> 
  <td style="width:20%">RESIDENT ID#:<b>'.$resident_id.'</b></td>
  <tr>
  </tr>
</table><br>
<table border="1" style="width:100%;border-collapse: collapse;">
<tr>
<th>ORIENTATION</th>
</tr>
<tr>
<th style="width:20%">MAXIMUM SCORE</th>
<th style="width:20%"> SCORE</th>
<th style="width:60%">QUALIFIER</th>
</tr>';
  foreach($orientationmaxscores as $tablesIndex => $orientationmaxscoresy) {
    $html .='
  <tr>
    <td style="width:20%">'.$orientationmaxscoresy.'</td>
    <td style="width:20%">'.$orientationscore[$tableindex].'</td>
    <td style="width:60%">'.$orientation_qualifier[$tablesIndex].'</td>
  </tr> ';
  }
  $html .='
</table><br>

<table border="1" style="width:100%;border-collapse: collapse;">
<tr>
<th>REGISTRATION</th>
</tr>
<tr>
<th style="width:20%">MAXIMUM SCORE</th>
<th style="width:20%"> SCORE</th>
<th style="width:60%">QUALIFIER</th>
</tr>';
  foreach($reg_maxscores as $tablesIndex => $reg_maxscoresy) {
    $html .='
  <tr>
    <td style="width:20%">'.$reg_maxscoresy.'</td>
    <td style="width:20%">'.$registration_score[$tableindex].'</td>
    <td style="width:60%">'.$registration_qualifier[$tablesIndex].'</td>
  </tr> ';
  }
  $html .='
</table><br>

<table border="1" style="width:100%;border-collapse: collapse;">
<tr>
<th>ATTENTION AND CALCULATION</th>
</tr>
<tr>
<th style="width:20%">MAXIMUM SCORE</th>
<th style="width:20%"> SCORE</th>
<th style="width:60%">QUALIFIER</th>
</tr>';
  foreach($calculate_maxscores as $tablesIndex => $calculate_maxscoresy) {
    $html .='
  <tr>
    <td style="width:20%">'.$calculate_maxscoresy.'</td>
    <td style="width:20%">'.$calculate_score[$tableindex].'</td>
    <td style="width:60%">'.$calculate_qualifier[$tablesIndex].'</td>
  </tr> ';
  }
  $html .='
</table><br>

<table border="1" style="width:100%;border-collapse: collapse;">
<tr>
<th>RECALL</th>
</tr>
<tr>
<th style="width:20%">MAXIMUM SCORE</th>
<th style="width:20%"> SCORE</th>
<th style="width:60%">QUALIFIER</th>
</tr>';
  foreach($recall_maxscores as $tablesIndex => $recall_maxscoresy) {
    $html .='
  <tr>
    <td style="width:20%">'.$recall_maxscoresy.'</td>
    <td style="width:20%">'.$recall_score[$tableindex].'</td>
    <td style="width:60%">'.$recall_qualifier[$tablesIndex].'</td>
  </tr> ';
  }
  $html .='
</table><br>

<table border="1" style="width:100%;border-collapse: collapse;">
<tr>
<th>LANGUAGE</th>
</tr>
<tr>
<th style="width:20%">MAXIMUM SCORE</th>
<th style="width:20%"> SCORE</th>
<th style="width:60%">QUALIFIER</th>
</tr>';
  foreach($language_maxscores as $tablesIndex => $language_maxscoresy) {
    $html .='
  <tr>
    <td style="width:20%">'.$language_maxscoresy.'</td>
    <td style="width:20%">'.$language_score[$tableindex].'</td>
    <td style="width:60%">'.$language_qualifier[$tablesIndex].'</td>
  </tr> ';
  }
  $html .='
</table><br>

<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">Prepared by:  <b>'.$producedby.'</b></td>
    <td style="width:20%">Title  :<b>'.$title.'</td>
  
  </tr> 
  <tr>
    <td style="width:20%">Clinical Supervisor:<b>'.$supervisor.'</b></td>
    <td style="width:20%">Date  :<b>'.$date.'</b></td>
  </tr>
</table><br>



<p>
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>