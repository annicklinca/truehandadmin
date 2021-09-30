<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from reportingabuse where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$PersonnelName=$row['PersonnelName'];
$Supervisor=$row['Supervisor'];
$PersonnelSignature=$row['PersonnelSignature'];
$SupervisorSignature=$row['SupervisorSignature'];
}

$mpdf->WriteHTML('
<h2> Reporting of Abuse or Neglect</h2>
<p>It is incumbent upon all personnel members to immediately report any and all suspected or alleged abuse, neglect, or exploitation or a violation of a resident’s rights.</p>
<p>This report must be made to the TRUE HAND BEHAVIORAL AGENCY
JEAN CLAUDE SIMBANDUSHE (520-585-1628) without delay.  If you receive a report from another personnel member, you must also immediately report the allegation along to the Director.
</p>
<br>
<h2> Resident Records</h2>
<p>Resident’s rights include the right that all of their medical and clinical records be maintained locked and secure against unauthorized access.  Resident records including diagnoses, clinical notes, treatment observations, treatment plans, medication records, claim forms and personal identification numbers, must be maintained inside the locked cabinet in the administration office room. Access to the records is restricted to True Hand Behavioral Agency BHTs, the True Hand Behavioral Agency Director, the Arizona Department of Health surveyor and to the specific resident’s case manager and care providers.  Any additional access can only be granted with properly completed and signed release forms</p>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%"> '.$PersonnelName.' <br> <b>Personnel Name</b></td>
    <td style="width:20%"><img src="./../../signatures/'.$PersonnelSignature.'" width="200"/> <br><b>Personnel Signature</b></td>
  </tr> 
   <tr>
    <td style="width:20%">  '.$Supervisor.' <br> <b>Supervisor Name</b></td>
    <td style="width:20%"> <img src="./../../signatures/'.$SupervisorSignature.'" width="200"/> <br><b>Supervisor Signature</b></td>
  </tr> 

</table>
  

</table>


<p>
');
$mpdf->Output();

?>