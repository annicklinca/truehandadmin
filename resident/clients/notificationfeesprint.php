<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printnotification'];

$sel=$conn->query("SELECT * from noticationfees where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$fees=$row['fees'];
$resident=$row['resident'];
$residentdate=date("m-d-Y", strtotime($row['residentdate']));
$agent=$row['agent'];
$personnel=$row['personnel'];
$agentdate=date("m-d-Y", strtotime($row['agentdate']));
$personneldate=date("m-d-Y", strtotime($row['personneldate']));
$agentsign=$row['agentsign'];
$residentsign=$row['residentsign'];
$personnelsign=$row['personnelsign'];
}

$mpdf->WriteHTML('
<h3>Notification of Fees</h3>
<p>
As you may be aware, there are expenses related to your stay with TRUE HAND BEHAVIORAL AGENCY.  These fees or day rate are covered by the agency that placed you here.
The daily rate charged for the services, accommodations, lodging and related care costs is <br>

$ '.$fees.' <br><br>

Should this rate increase, the new daily rate will be posted in a prominent place within the house and available for your review and the review of your guardian or designated agent.  This posting will occur no later than 30 days before the change becomes effective.
Additionally, a letter will be presented to you addressing the new daily rate and one mailed to your placing agency representative also no later than 30 days prior to the change becoming effective.
Your signature below indicates your understanding of the above daily fee rate policy.
<br>

</p>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">'.$resident.' <img src="./../../signatures/'.$residentsign.'" width="200"/><br><b>Resident Signature</b></td>
    <td style="width:20%">'.$residentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$agent.' <img src="./../../signatures/'.$agentsign.'" width="200"/><br> <br><b>Agent Signature</b><br></td>
    <td style="width:20%">'.$agentdate.'<br><b>Date</b><br></td>
  </tr>
   <tr>
    <td style="width:20%">'.$personnel.' <img src="./../../signatures/'.$personnelsign.'" width="200"/><br> <br><b>Personnel Signature</b><br></td>
    <td style="width:20%">'.$personneldate.'<br><b>Date</b><br></td>
  </tr> 
</table>



<p>
');
$mpdf->Output();

?>