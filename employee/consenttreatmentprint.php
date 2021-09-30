<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printconsenttreatment'];
$sel=$conn->query("SELECT * from consenttreatment where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$resident=$row['resident'];
$residentdate=date("m-d-Y", strtotime($row['residentdate']));
$agent=$row['agent'];
$agentdate=date("m-d-Y", strtotime($row['agentdate']));
$personnel=$row['personnel'];
$personneldate=date("m-d-Y", strtotime($row['personneldate']));
$ResidentSignature=$row['ResidentSignature'];
$AgentSignature=$row['AgentSignature'];
$PersonalSignature=$row['PersonalSignature'];
}

$mpdf->WriteHTML('
<h3>Consent for Treatment</h3>
<p>
The consent for treatment fonn records your approval of the care outlined within your treatment plan<br>
Before you sign this fonn listen to the personnel member cover the following items:<br>
<ol>
   <li>Treatment being proposed for you. </li>
   <li>Intended outcome, nature, and procedures of the proposed treatment</li>
   <li>Any risks and side effects of the proposed treatment. </li>
   <li>Risks associated with NQT proceeding with the proposed treatment. </li>
   <li>Alternatives to the proposed treatment.  </li>
</ol>
Alternatives to the proposed treatment.       <br><br>
Consent to treatment is voluntary and you may decline !it any time. <br><br>
Your signature below is indicatir)g that you understand the above treatment outline and approve of the agency providing you services related to meetiµg the gpals of your proposed treatment plan.<br><br>

</p>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">'.$resident.'  <img src="./../signatures/'.$ResidentSignature.'" width="200"/><br><b>Resident Signature</b></td>
    <td style="width:20%">'.$residentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$agent.'     <img src="./../signatures/'.$AgentSignature.'" width="200"/><br><b>Agent Signature</b><br></td>
    <td style="width:20%">'.$agentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$personnel.' <img src="./../signatures/'.$PersonalSignature.'" width="200"/><br><b>Personal Signature</b> <br></td>
    <td style="width:20%">'.$personneldate.'<br><b>Date</b><br></td>
  </tr>
</table>

<p>
');
$mpdf->Output();

?>