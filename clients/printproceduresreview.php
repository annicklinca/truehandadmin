<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from proceduresreview where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$PersonnelName=$row['PersonnelName'];
$Supervisor=$row['Supervisor'];
$PersonnelSignature=$row['PersonnelSignature'];
$SupervisorSignature=$row['SupervisorSignature'];
}

$mpdf->WriteHTML('
<h2>Policy & Procedures Review</h2>
<br>
<p>The agency s policy and procedures outline all services, requirements, expectations and relevant documents necessary to operate the agency.  Each personnel are required to read and understand the entire policy and procedures manual prior to providing direct care to clients.</p>
<p>Agency administrators will review and update policy and procedures on an annual basis.  Any changes to the policy and procedures will be shared with all personnel members.  Personnel members will be required to familiarize and abide by these changes.</p>
<p>The new personnel orientation program will discuss the policy and procedures and test your knowledge on critical components.</p>
<p>Your following signature indicates that you have read and understand fully the services, requirements, expectations and relevant documents necessary to carry out your responsibilities within the agency s operations.</p>
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