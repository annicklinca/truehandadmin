<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from medreviewnote where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$year=$row['year'];
$residentmedication1=$row['residentmedication1'];
$residentmedication2=$row['residentmedication2'];
$residentmedication3=$row['residentmedication3'];
$residentmedication4=$row['residentmedication4'];
$medicationstore1=$row['medicationstore1'];
$medicationstore2=$row['medicationstore2'];
$medicationstore3=$row['medicationstore3'];
$medicationstore4=$row['medicationstore4'];
$currentmeds1=$row['currentmeds1'];
$currentmeds2=$row['currentmeds2'];
$currentmeds3=$row['currentmeds3'];
$currentmeds4=$row['currentmeds4'];
$oralmeds1=$row['oralmeds1'];
$oralmeds2=$row['oralmeds2'];
$oralmeds3=$row['oralmeds3'];
$oralmeds4=$row['oralmeds4'];
$medisets1=$row['medisets1'];
$medisets2=$row['medisets2'];
$medisets3=$row['medisets3'];
$medisets4=$row['medisets4'];
$expiremeds1=$row['expiremeds1'];
$expiremeds2=$row['expiremeds2'];
$expiremeds3=$row['expiremeds3'];
$expiremeds4=$row['expiremeds4'];
$currentrx1=$row['currentrx1'];
$currentrx2=$row['currentrx2'];
$currentrx3=$row['currentrx3'];
$currentrx4=$row['currentrx4'];
$refrigeration1=$row['refrigeration1'];
$refrigeration2=$row['refrigeration2'];
$refrigeration3=$row['refrigeration3'];
$refrigeration4=$row['refrigeration4'];
$firstaidkit1=$row['firstaidkit1'];
$firstaidkit2=$row['firstaidkit2'];
$firstaidkit3=$row['firstaidkit3'];
$firstaidkit4=$row['firstaidkit4'];
$manager_sign=$row['manager_sign'];
$staff_name=$row['staff_name'];
}

$mpdf->WriteHTML('
  <h3><center>TRUE HAND BEHAVIORAL AGENCY</center></h3>
<h5>Quarterly Medication Review Form</h5>
<p>
Year:  '.$year.'
</p>
<table border="1" style="width:100%;border-collapse: collapse;">

  <tr>
    <th>Review Task</th>
    <th>1ST Quarter <br> Yes &nbsp; No</th>
    <th>2ND Quarter <br> Yes &nbsp; No</th>
    <th>3RD Quarter <br> Yes &nbsp; No</th>
    <th>4TH Quarter <br> Yes &nbsp; No</th>
  </tr> 

   <tr>
   <td>Each residents medication stored separately</td>
    <td>'.$residentmedication1.'</td>
    <td>'.$residentmedication2.'</td>
    <td>'.$residentmedication3.'</td>
    <td>'.$residentmedication4.'</td>
  </tr>

  <tr>
   <td>Medication storage labeled with residents name</td>
    <td>'.$medicationstore1.'</td>
    <td>'.$medicationstore2.'</td>
    <td>'.$medicationstore3.'</td>
    <td>'.$medicationstore4.'</td>
  </tr>  

  <tr>
   <td>Medisets labeled with residents name, current meds, MD Name</td>
    <td>'.$currentmeds1.'</td>
    <td>'.$currentmeds2.'</td>
    <td>'.$currentmeds3.'</td>
    <td>'.$currentmeds4.'</td>
  </tr>  

   <tr>
   <td>Medications for external use are labeled and stored separately from oral meds</td>
    <td>'.$oralmeds1.'</td>
    <td>'.$oralmeds2.'</td>
    <td>'.$oralmeds3.'</td>
    <td>'.$oralmeds4.'</td>
  </tr> 

  <tr>
   <td>Medication cabinet, storage bins and medisets are clean</td>
    <td>'.$medisets1.'</td>
    <td>'.$medisets2.'</td>
    <td>'.$medisets3.'</td>
    <td>'.$medisets4.'</td>
  </tr> 

    <tr>
   <td>All medications are current.  Expired meds have been destroyed and documented</td>
    <td>'.$expiremeds1.'</td>
    <td>'.$expiremeds2.'</td>
    <td>'.$expiremeds3.'</td>
    <td>'.$expiremeds4.'</td>
  </tr>

    <tr>
   <td>Residents medication orders updated and accurately reflect current Rx</td>
    <td>'.$currentrx1.'</td>
    <td>'.$currentrx2.'</td>
    <td>'.$currentrx3.'</td>
    <td>'.$currentrx4.'</td>
  </tr>

   <tr>
   <td>Meds under refrigeration are locked & temperature is ≤ 41° F.</td>
    <td>'.$refrigeration1.'</td>
    <td>'.$refrigeration2.'</td>
    <td>'.$refrigeration3.'</td>
    <td>'.$refrigeration4.'</td>
  </tr>

   <tr>
   <td>First aid kit complete and stored in accessible location</td>
    <td>'.$firstaidkit1.'</td>
    <td>'.$firstaidkit2.'</td>
    <td>'.$firstaidkit3.'</td>
    <td>'.$firstaidkit4.'</td>
  </tr>

  <tr>
   
 

</table>

  

</table>
<p><b>Manager Signature:</b> '.$manager_sign.'</p>
<p><b>Names of Staff Authorized to give Medication:</b> '.$staff_name.' </p>

<p>
');
$mpdf->Output();

?>