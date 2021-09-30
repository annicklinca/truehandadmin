<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printreciept'];

$sel=$conn->query("SELECT * from recieptinfomation where id='$id' order by id desc ");
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
<h3>Receipt of lnformation </h3>
<p>I acknowledge that upon admission the following items and information were fully 
explained to me:<br>
<ol>
    <li>Program Polices,</li>
    <li>Resident Guidelines, </li>
    <li>Explanation of Fees</li>
    <li>Search and Seizures Policy, </li>
    <li>Residents Rights, </li>
    <li>Grievance Policy !llld Prqcedure  </li>
    <li>Telephone Number and Address of OBHL, ADES, ADPS </li>
    <li>Dress Code  </li>
    <li>Community Protection and Advocacy Agency List </li>
</ol>
<br>
I also acknowledge that my right to receive a copy of any developed treatment plan and 
discharge summary was fully explained. <br><br>
I understand that during the course of my stay, I may c&ll or request a conference with the 
program director to clarify any questions that I have about any of the above items. <br><br>
I understand that during the course of my stay, I may c&ll or request a conference with the 
program director to clarify any questions that I have about any of the above items. 

</p>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">'.$resident.'<br><b>Resident Signature:<img src="signatures/'.$residentsign.'" width="200"/> </b></td>
    <td style="width:20%">'.$residentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$agent.'<br><b>Agent Signature:<img src="signatures/'.$agentsign.'" width="200"/></b><br></td>
    <td style="width:20%">'.$agentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$personnel.'<br><b>Personal Signature:<img src="signatures/'.$personalsign.'" width="200"/></b><br></td>
    <td style="width:20%">'.$personneldate.'<br><b>Date</b><br></td>
  </tr>
</table>



<p>
');
$mpdf->Output();

?>