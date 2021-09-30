<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from medicalorders where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$lastname=$row['lastname'];
$firstname=$row['firstname'];
$mi1=$row['mi1'];
$dob=date("m-d-Y", strtotime($row['dob']));
$medication_date=date("m-d-Y", strtotime($row['medication_date']));
$physician_name=$row['physician_name'];
$location=$row['location'];
$medication=$row['medication'];
$dosage=$row['dosage'];
$frequency=$row['frequency'];
$sideeffects=$row['sideeffects'];
$instructions=$row['instructions'];
$physician=$row['physician'];
$datesign=$row['datesign'];
$phonenumber=$row['phonenumber'];
$procedure1=$row['procedure1'];
$physician_sign=$row['physician_sign'];


}

$mpdf->WriteHTML('
<h3 style="font-family:algerian"> TRUE HAND BEHAVIORAL AGENCY</h3>
<p><b>Resident Medical Orders </b>(completed each time medication is prescribed by a doctor)<p>

<table border="1"  style="width:100%;border-collapse: collapse;">
  <tr>
    <th colspan=2 height="20px"></th>
     <th height=20px></th>
      <th height=20px></th>
  </tr>
  <tr border="0">
    <td colspan=2 >Last Name:  '.$lastname.'</td>
    <td>First Name: '.$firstname.'</td>
    <td>MI:  '.$mi1.'</td>
  </tr> 

   <tr>
    <td>Date of Birth:  '.$dob.'</td>
    <td>Date: '.$medication_date.'</td>
    <td>Physician’s Name:  '.$physician_name.'</td>
    <td>Location:  '.$location.'</td>
  </tr> 
</table>
<p>Medication Prescribed:   '.$medication.'</p>
<p>Dosage:  '.$dosage.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Frequency:  '.$frequency.'</p>
<p>Potential side effects or adverse reactions: <br>
'.$sideeffects.'</p>
<p>Additional instructions for staff and/or resident: <br>
'.$instructions.'</p>
<p>I have reviewed the self-administration procedure and authorize the above patient to self-administer this medication.</p>
___________________________________________________________________________________
<table border="0"  style="width:100%;border-collapse: collapse;">
  <tr>
    <td >Physician Signature <br> '.$physician_sign.'</td>
    <td>Date<br> '.$datesign.'</td>
  </tr> 

   <tr>
    <td>Telephone Number:<br>  '.$phonenumber.'</td>
    <td>Emergency Contact Number/Procedure:<br> '.$procedure1.'</td>
  </tr> 
</table>
');
$mpdf->Output();

?>