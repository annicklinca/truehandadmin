<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printreleaseinformation'];

$sel=$conn->query("SELECT * from releaseinformation where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$purpose=$row['purpose'];
$description=$row['description'];
$recordsandexpires=$row['recordsandexpires'];
$resident=$row['resident'];
$residentdate=date("m-d-Y", strtotime($row['residentdate']));
$agent=$row['agent'];
$agentdate=date("m-d-Y", strtotime($row['agentdate']));
$agentsign=$row['agentsign'];
$residentsign=$row['residentsign'];

}

$mpdf->WriteHTML('
<h3>Release of Information</h3>
<p>
Prior to the release or disclosure of any information pertaining to your record you 
must provide written permission. This forni, with your approval by your 
signature, allows the agency to release only the information requested and only 
for a valid reason. <br><br>

Release of information <b>Form</b>  <br><br>
<span style="text-decoration: underline;"> True hand behavioral agency </span> <br><br>
Agency disclosing the resident record of information <br><br>

Purpose of disclosure: <b>'.$purpose.'</b>
<br><br>
Individual, agency, or entity requesting or receiving the record of information
<br><br>
Description of resident record or information being requested: <b> '.$description.'</b> 
<br><br>

<b>Note:</b> Permission to provide this record or information may be revoked by the 
resident at any time. <br>
<br>Permission for use of these reicords or inforfllation extends only for the stated 
purpose and pertains only to the indicated records and expires: <b>'.$recordsandexpires.'</b><br><br>

</p>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">'.$resident.' <img src="signatures/'.$residentsign.'" width="200"/><br><b>Resident Signature</b></td>
    <td style="width:20%">'.$residentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$agent.' <img src="signatures/'.$agentsign.'" width="200"/><br> <br><b>Agent Signature</b><br></td>
    <td style="width:20%">'.$agentdate.'<br><b>Date</b><br></td>
  </tr> 
</table>



<p>
');
$mpdf->Output();

?>