<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printgrievanceprocedures'];

$sel=$conn->query("SELECT * from grievanceprocedures where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$resident=$row['resident'];
$residentdate=date("m-d-Y", strtotime($row['residentdate']));
$agent=$row['agent'];
$agentdate=date("m-d-Y", strtotime($row['agentdate']));
$personnel=$row['personnel'];
$personneldate=date("m-d-Y", strtotime($row['personneldate']));
$agentsign=$row['agentsign'];
$residentsign=$row['residentsign'];
$personalsign=$row['personalsign'];

}

$mpdf->WriteHTML('
<h3>Grievance Procedures</h3>
<p>
<ol>
<li>First, process the grievance or concern with personnel. If the resident is not satisfied, obtain a grievance form. </li>
<li>Complete the form in detail when applic11ble. </li>
<li>Submit form to personnel or administrator. Grievance form will be initially responded to within two working days of its receipt. </li>
<li>The agency administrator will review, meet with resident and relevant parties (if applicable) to address the issues raised in the grievance.</li>
<li> Filled grievances will receive a formal written response within five working days. </li>
<li>If person(s) filing grievance is not satisfied with the decision, a written compliant may be filed with the licensing agency for further intervention.</li>
<li>A person or persons shall not be discriminated against, prohibited reprisal or retaliated against, becaus~ he or she has fielded 11 grievance with or outside of the agency.</li>
<li>No resident will be subje~ted to threats of early termination or rejection by personnel.</li>
<li>Policies and procedures will be explained to the resident, parent, and guardian or designated representative at the time of admission.</li>
<li> A resident or representative may file a compl~t directly with the Bureau of Residential Facilities Licensing or the ~ona Office of Human Rights.</li>
</ol>
<p><span style="text-decoration: underline;">Bureau of Residential Facilities Licensing Information</span><br>7010 S 19TH Lane phoenix Az 85041 </p>

</p>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">'.$resident.' <img src="./../signatures/'.$residentsign.'" width="200"/><br><b>Resident Signature</b></td>
    <td style="width:20%">'.$residentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$agent.' <img src="./../signatures/'.$agentsign.'" width="200"/><br><b>Agent Signature</b><br></td>
    <td style="width:20%">'.$agentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$personnel.' <img src="./../signatures/'.$personalsign.'" width="200"/><br><b>Personal Signature</b><br></td>
    <td style="width:20%">'.$personneldate.'<br><b>Date</b><br></td>
  </tr>
</table>



<p>
');
$mpdf->Output();

?>