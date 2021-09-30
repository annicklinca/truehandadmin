<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from medicalrecordsaccess where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
    $ResidentName=$row['ResidentName'];
    $DateOfBirth=$row['DateOfBirth'];
    $Date=$row['Date'];
      $Dates=explode (",",strval($Date));
    $NamePerson=$row['NamePerson'];
      $NamePersons=explode (",",strval($NamePerson));
    $DiagnosisMedical=$row['DiagnosisMedical'];
      $DiagnosisMedicals=explode (",",strval($DiagnosisMedical));
    $PurposeandUseMedical=$row['PurposeandUseMedical'];
      $PurposeandUseMedicals=explode (",",strval($PurposeandUseMedical));
    $PersonalSignature=$row['PersonalSignature'];
}

$html='
<h2>Medical Records Access</h2>
<br>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td style="width:50%">Resident Name:  <b>'.$ResidentName.'</b></td>
    <td style="width:50%">Date of Birth: <b>'.$DateOfBirth.'</td>
  </tr> 
</table><br>
';
  foreach($Dates as $tablesIndex => $Datesone) {
    $html .='
    <table border="1" style="width:100%; border-collapse: collapse;">
    <tr>
      <td style="width:20%" rowspan="2">Date:<b>'.$Datesone.'</b></td>
      <td style="width:30%">Name of Person Accessing Records: <b>'.$NamePersons[$tablesIndex].'</b></td>
      <td style="width:30%">Organization: <b>'.$DiagnosisMedicals[$tablesIndex].'</b></td>
      <td style="width:20%">Signature: <br> <b><img src="./../../signatures/'.$PersonalSignature.'" width="200"/></b> </td>
    </tr> 
    <tr>
      <td  colspan="3">Purpose and Use of Medical Information Accessed: <br><b>'.$PurposeandUseMedicals[$tablesIndex].'</b></td>
    </tr> 
  </table><br>
  ';
  }
  $html .='
  
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>