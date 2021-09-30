<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from confidentialitystatement where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$PersonnelName=$row['PersonnelName'];
$Supervisor=$row['Supervisor'];
$PersonnelSignature=$row['PersonnelSignature'];
$SupervisorSignature=$row['SupervisorSignature'];
}

$mpdf->WriteHTML('
<h2>Confidentiality Statement Review</h2>
<br>
<p>Confidentiality of records must be maintained by all personnel having access to client records.  Information shall not be given to anyone unless the appropriate release forms have been completed and signed.  Completed forms must include the person or agency designated to receive information and only that person or agency can receive information.  No personnel person is to discuss the client or a clients problem areas with members of their family, friends or representatives from unauthorized agencies.  Personnel shall not give out client records or copies of such to persons or agencies or use for personal reasons.  Information contained in client records shall be kept confidential pursuant to current requirements.  Release of information forms shall indicate the person and agency to receive the information, the specific information to be released, the expiration date of the release, and shall be signed by the client and client s guardian.</p>
<p>Program records concerning clients in care and their families are confidential, and the program shall not disclose or knowingly permit the disclosure of confidential information.  Records shall be maintained in a secure place, in a manner that preserves confidentiality and prevents loss, tampering, or unauthorized use.  It is the policy of the program to govern the ethical conduct of personnel and agency volunteers in adherence to the policy of confidentiality of client information and client records.</p>
<p>Unauthorized release of confidential information is grounds for immediate dismissal.  If in doubt about any request for information seek clarification from a supervisor first.</p>
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