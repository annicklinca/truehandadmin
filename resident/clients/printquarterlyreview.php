<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from quarterlyreview where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$DriverLicense=date("m-d-Y", strtotime($row['DriverLicense']));
$CPR=date("m-d-Y", strtotime($row['CPR']));
$FirstAid=date("m-d-Y", strtotime($row['FirstAid']));
$CrisisPrevention=date("m-d-Y", strtotime($row['CrisisPrevention']));
$ClientRights=date("m-d-Y", strtotime($row['ClientRights']));
$Physical=date("m-d-Y", strtotime($row['Physical']));
$AnnualTuberculosis=date("m-d-Y", strtotime($row['AnnualTuberculosis']));
$MedicationTraining=date("m-d-Y", strtotime($row['MedicationTraining']));
$PerformanceEvaluation=date("m-d-Y", strtotime($row['PerformanceEvaluation']));
$PolicyProcedure=date("m-d-Y", strtotime($row['PolicyProcedure']));
$FireDrill=date("m-d-Y", strtotime($row['FireDrill']));
$EmergencyProcedures=date("m-d-Y", strtotime($row['EmergencyProcedures']));
$RecordsConfidentiality=date("m-d-Y", strtotime($row['RecordsConfidentiality']));
$EducationReports=date("m-d-Y", strtotime($row['EducationReports']));
$PersonnelInformation=date("m-d-Y", strtotime($row['PersonnelInformation']));
}

$mpdf->WriteHTML('
<h2>Personnel Records Quarterly Review</h2>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td> 1.Driver’s License Current</td>
    <td style="width:30%"> exp: '.$DriverLicense.'</td>
  </tr> 
  <tr>
    <td>2.CPR Certification Card current</td>
    <td style="width:30%"> exp: '.$CPR.'</td>
  </tr> 
  <tr>
    <td>3.	First Aid Certification Current 	</td>
    <td style="width:30%"> exp: '.$FirstAid.'</td>
  </tr> 
  <tr>
    <td>4.	Crisis Prevention & Intervention (CPI)</td>
    <td style="width:30%"> exp: '.$CrisisPrevention.'</td>
  </tr> 
  <tr>
    <td>5.	Client Rights Title 9 Certification</td>
    <td style="width:30%"> exp: '.$ClientRights.'</td>
  </tr> 
  <tr>
    <td>6.	Physical  </td>
    <td style="width:30%"> last Exam: '.$Physical.'</td>
  </tr> 
  <tr>
    <td>7.	Annual Tuberculosis Test</td>
    <td style="width:30%"> Last Tes: '.$AnnualTuberculosis.'</td>
  </tr> 
  <tr>
    <td>8.	Medication Training Checklist Completed Quarterly</td>
    <td style="width:30%">  '.$MedicationTraining.'</td>
  </tr> 
  <tr>
    <td>9.	Performance Evaluation	</td>
    <td style="width:30%"> Last: '.$PerformanceEvaluation.'</td>
  </tr> 
  <tr>
    <td>10.	Policy and Procedure Review</td>
    <td style="width:30%"> Last: '.$PolicyProcedure.'</td>
  </tr> 
  <tr>
    <td>11.	Fire Drill Participation</td>
    <td style="width:30%"> Last: '.$FireDrill.'</td>
  </tr> 
  <tr>
    <td>12.	Emergency Procedures Knowledge</td>
    <td style="width:30%">  '.$EmergencyProcedures.'</td>
  </tr> 
  <tr>
    <td>13.	Records & Confidentiality Training</td>
    <td style="width:30%">  '.$RecordsConfidentiality.'</td>
  </tr> 
  <tr>
    <td>14.	Education Reports	</td>
    <td style="width:30%"> Last: '.$EducationReports.'</td>
  </tr> 
  <tr>
    <td>15.	Personnel Information (update)</td>
    <td style="width:30%"> Last: '.$PersonnelInformation.'</td>
  </tr> 

</table>
  

</table>


<p>
');
$mpdf->Output();

?>