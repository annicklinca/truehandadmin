<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from pre_employment where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$per_name=$row['per_name'];
$infiles=$row['infiles'];
$exp_date=$row['exp_date'];
$note=$row['note'];
$infile1=$row['infile1'];
$exp_date1=$row['exp_date1'];
$note1=$row['note1'];
$infile2=$row['infile2'];
$exp_date2=$row['exp_date2'];
$note2=$row['note2'];
$infile3=$row['infile3'];
$exp_date3=$row['exp_date3'];
$note3=$row['note3'];
$infile4=$row['infile4'];
$exp_date4=$row['exp_date4'];
$note4=$row['note4'];
$infile5=$row['infile5'];
$exp_date5=$row['exp_date5'];
$note5=$row['note5'];
$infile6=$row['infile6'];
$exp_date6=$row['exp_date6'];
$note6=$row['note6'];
$infile7=$row['infile7'];
$exp_date7=$row['exp_date7'];
$note7=$row['note7'];
$infile8=$row['infile8'];
$exp_date8=$row['exp_date8'];
$note8=$row['note8'];
$infile9=$row['infile9'];
$exp_date9=$row['exp_date9'];
$note9=$row['note9'];
$infile0=$row['infile0'];
$exp_date0=$row['exp_date0'];
$note0=$row['note0'];
$employee_sign=$row['employee_sign'];
}

$mpdf->WriteHTML('
  <h3><center>TRUE HAND BEHAVIORAL AGENCY</center></h3>
<p>
Personnel Name:  '.$per_name.'
</p>
<h5>Documentation Required Prior to Starting Employment</h5>
<table border="1" style="width:100%;border-collapse: collapse;">

  <tr>
    <th style="width:50%">Records</th>
    <th>In File</th>
    <th>Expiration Date</th>
    <th>Notes</th>
  </tr> 

   <tr>
   <td style="width:50%">Driver’s License</td>
    <td >'.$infiles.'</td>
    <td>'.$exp_date.'</td>
    <td>'.$note.'</td>
  </tr> 

  <tr>
   <td style="width:50%">Social Security Card</td>
    <td >'.$infile1.'</td>
    <td>'.$exp_date1.'</td>
    <td>'.$note1.'</td>
  </tr> 

  <tr>
   <td style="width:50%">CPR Card</td>
    <td >'.$infile2.'</td>
    <td>'.$exp_date2.'</td>
    <td>'.$note2.'</td>
  </tr> 

   <tr>
   <td style="width:50%">First Aid Card</td>
    <td >'.$infile3.'</td>
    <td>'.$exp_date3.'</td>
    <td>'.$not3.'</td>
  </tr> 

 <tr>
   <td style="width:50%">Finger Print Card/ Application</td>
    <td >'.$infile4.'</td>
    <td>'.$exp_date4.'</td>
    <td>'.$note4.'</td>
  </tr> 

   <tr>
   <td style="width:50%">Physical Examination</td>
    <td >'.$infile5.'</td>
    <td>'.$exp_date5.'</td>
    <td>'.$note5.'</td>
  </tr> 

   <tr>
   <td style="width:50%">Tuberculosis Test</td>
    <td >'.$infile6.'</td>
    <td>'.$exp_date6.'</td>
    <td>'.$note6.'</td>
  </tr> 

    <tr>
   <td style="width:50%">Orientation Checklist</td>
    <td >'.$infile7.'</td>
    <td>'.$exp_date7.'</td>
    <td>'.$note7.'</td>
  </tr> 

   <tr>
   <td style="width:50%">Application for Employment</td>
    <td >'.$infile8.'</td>
    <td>'.$exp_date8.'</td>
    <td>'.$note8.'</td>
  </tr> 

   <tr>
   <td style="width:50%">Personnel Information</td>
    <td >'.$infile9.'</td>
    <td>'.$exp_date9.'</td>
    <td>'.$note9.'</td>
  </tr> 

    <tr>
   <td style="width:50%">Fed. & AZ:I-9, W-4 & A-4</td>
    <td >'.$infile0.'</td>
    <td>'.$exp_date0.'</td>
    <td>'.$note0.'</td>
  </tr> 

  

 

</table>

  

</table>
<p>Signature '.$employee_sign.'</p>

<p>
');
$mpdf->Output();

?>