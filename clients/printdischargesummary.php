<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from dischargesummary where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$ClientName=$row['ClientName'];
$Dob=$row['Dob'];
$DatePlacement=$row['DatePlacement'];
$DateDischarge=$row['DateDischarge'];
$ClientPresentingIssue=$row['ClientPresentingIssue'];
$SummaryTreatment=$row['SummaryTreatment'];
$ClientProgress=$row['ClientProgress'];
$DosageFrequency=$row['DosageFrequency'];
$DescriptionDisposition=$row['DescriptionDisposition'];
$DischargePlanExplained=$row['DischargePlanExplained'];
$InvoluntaryDischarge=$row['InvoluntaryDischarge'];
$ReferralCommunications=$row['ReferralCommunications'];
$Staff=$row['Staff'];
$StaffDate=$row['StaffDate'];
$BHP=$row['BHP'];
$BHPDate=$row['BHPDate'];
$BHPSign=$row['BHPSign'];
$StaffSign=$row['StaffSign'];
}

$mpdf->WriteHTML('
<h2>Discharge Summary</h2>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:50%">Client Name:  <b>'.$ClientName.'</b></td>
    <td style="width:50%">Date of Birth:<b>'.$Dob.'</td>
  </tr> 
  <tr>
  <td style="width:50%">Date of Placement:<b>'.$DatePlacement.'</b></td>
  <td style="width:50%">Date of Discharge:<b>'.$DateDischarge.'</b></td>
  </tr> 
</table><br><br>

<p>1.The client’s presenting issue and other behavioral health issues identified in the client’s treatment plan:<br>
  '.$ClientPresentingIssue.'
</p>
<p>2.Summary of the treatment provided to the client:<br>
  '.$SummaryTreatment.'
</p>
<p>3.The client’s progress in meeting treatment goals, including treatment goals that were and were not achieved:<br>
  '.$ClientProgress.'
</p>
<p>4.The name, dosage and frequency of each medication for the client ordered at the time of the client’s discharge by a Medical Practitioner at the Agency:<br>
  '.$DosageFrequency.'
</p>
<p>5.A description of the disposition of the client’s possessions, fund or medications:<br>
  '.$DescriptionDisposition.'
</p>
<p>6.Discharge plan explained to the client and to person removing client:<br>
  '.$DischargePlanExplained.'
</p>
<p>7.Involuntary discharge; review and provide grievance Policy and Procedure:<br>
  '.$InvoluntaryDischarge.'
</p>
<p>8.Referral and communications made to new placement, and aftercare plan and follow-up:<br>
  '.$ReferralCommunications.'
</p>

<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%"> '.$Staff.' <br> <b>Staff Name</b></td>
    <td style="width:20%"><img src="./../signatures/'.$StaffSign.'" width="200"/> <br><b>Staff Signature and Title</b></td>
    <td style="width:20%">'.$StaffDate.'<br><b>Date</b></td>
  </tr> 
  <tr>
    <td style="width:20%"> '.$BHP.' <br> <b>BHP Name:</b></td>
    <td style="width:20%"><img src="./../signatures/'.$BHPSign.'" width="200"/> <br><b>Staff Signature and Title</b></td>
    <td style="width:20%">'.$BHPDate.'<br><b>Date</b></td>
  </tr> 
</table>
  

</table>


<p>
');
$mpdf->Output();

?>