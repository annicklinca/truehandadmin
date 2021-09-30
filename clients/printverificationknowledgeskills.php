<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from verificationknowledgeskills where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$PersonnelName=$row['PersonnelName'];
$DateOfHire=$row['DateOfHire'];
$FirstDate=$row['FirstDate'];
$ProtectResident=$row['ProtectResident'];
$ProvideTreatment=$row['ProvideTreatment'];
$RecognizeObviousSymptoms=$row['RecognizeObviousSymptoms'];
$ProvideBehavioral=$row['ProvideBehavioral'];
$MeetUnique=$row['MeetUnique'];
$RecognizeRespect=$row['RecognizeRespect'];
$ProtectMaintain=$row['ProtectMaintain'];
$MayDanger=$row['MayDanger'];
$BehavesAggressive=$row['BehavesAggressive'];
$CrisisSituation=$row['CrisisSituation'];
$MedicalEmergency=$row['MedicalEmergency'];
$ReadImplement=$row['ReadImplement'];
$AssistResident=$row['AssistResident'];
$RecordDocument=$row['RecordDocument'];
$DemonstrateEthical=$row['DemonstrateEthical'];
$IdentifyTypes=$row['IdentifyTypes'];
$RecognizeRespond=$row['RecognizeRespond'];
$ProvideActivities=$row['ProvideActivities'];
$ExaminationCopy=$row['ExaminationCopy'];
$TelephoneFax=$row['TelephoneFax'];
$ReviewApplication=$row['ReviewApplication'];
$TelephoneLetter=$row['TelephoneLetter'];
$PersonnelInterview=$row['PersonnelInterview'];
$WrittenExamination=$row['WrittenExamination'];
$RolePlaying=$row['RolePlaying'];
$DirectorClinicalSupervisor=$row['DirectorClinicalSupervisor'];
$SupervisorSignature=$row['SupervisorSignature'];
}

$mpdf->WriteHTML('

<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:50%"> '.$PersonnelName.' <br> <b>Personnel Name</b></td>
    <td style="width:50%">'.$DateOfHire.' <br><b>Date of Hire </b><br><br> '.$FirstDate.' <br> <b>First Date Providing Behavioral Services</b></td>
  </tr> 
  
</table>

<h2>Behavioral Health Technician Required Knowledge and Skills</h2>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:70%; padding: 5px;">o	Protect Resident Rights</td>
    <td style="width:30%"><b>'.$ProtectResident.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Provide treatment that promotes resident dignity, independence, individuality, strengths, privacy and choice; </td>
    <td style="width:30%; padding: 5px;"><b>'.$ProvideTreatment.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Recognize obvious symptoms of a mental disorder, personality disorder, or substance abuse;</td>
    <td style="width:30%; padding: 5px;"><b>'.$RecognizeObviousSymptoms.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Provide the behavioral health services that TRUE HAND BEHAVIORAL AGENCY is authorized to provide and that the staff member is qualified to provide; </td>
    <td style="width:30%; padding: 5px;"><b>'.$ProvideBehavioral.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Meet the unique needs of the population served; </td>
    <td style="width:30%; padding: 5px;"><b>'.$MeetUnique.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Recognize and Respect Cultural Differences; </td>
    <td style="width:30%; padding: 5px;"><b>'.$RecognizeRespect.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Protect and maintain the confidentiality of resident records and information;</td>
    <td style="width:30%; padding: 5px;"><b>'.$ProtectMaintain.'</b></td>
  </tr>
  <tr>
    <td colspan="2" style="width:70%">o	Recognize, prevent, and respond to a situation in which a resident:</td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">i)	May be a danger to self or a danger to others, </td>
    <td style="width:30%; padding: 5px;"><b>'.$MayDanger.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">ii)	Behaves in an aggressive or destructive manner, </td>
    <td style="width:30%; padding: 5px;"><b>'.$BehavesAggressive.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">iii)	May be experiencing a crisis situation, or</td>
    <td style="width:30%; padding: 5px;"><b>'.$CrisisSituation.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">iv)	May be experiencing a medical emergency; </td>
    <td style="width:30%; padding: 5px;"><b>'.$MedicalEmergency.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Read and implement a resident’s treatment plan;</td>
    <td style="width:30%; padding: 5px;"><b>'.$ReadImplement.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Assist a resident in accessing community resources; </td>
    <td style="width:30%; padding: 5px;"><b>'.$AssistResident.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Record and document resident information; 	</td>
    <td style="width:30%; padding: 5px;"><b>'.$RecordDocument.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Demonstrate ethical behavior, such as by respecting staff member and resident boundaries and recognizing the inappropriateness of receiving gratuities from a resident;</td>
    <td style="width:30%; padding: 5px;"><b>'.$DemonstrateEthical.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Identify types of medications commonly prescribed for mental disorders, personality disorders, and substance abuse and the common side effects and adverse reactions of the medications;</td>
    <td style="width:30%; padding: 5px;"><b>'.$IdentifyTypes.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Recognize and respond to a fire, disaster, hazard, and medical emergency; 	</td>
    <td style="width:30%; padding: 5px;"><b>'.$RecognizeRespond.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Provide the activities or behavioral health services identified in the staff member’s job description or TRUE HAND BEHAVIORAL AGENCY Policy and Procedure. 	</td>
    <td style="width:30%; padding: 5px;"><b>'.$ProvideActivities.'</b></td>
  </tr>
  <tr>
    <td colspan="2" style="width:70%"><b>Verification of Education</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Examination and copy of diplomas/certificates</td>
    <td style="width:30%; padding: 5px;"><b>'.$ExaminationCopy.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Telephone/Fax/Letter communication with institution(s)</td>
    <td style="width:30%; padding: 5px;"><b>'.$TelephoneFax.'</b></td>
  </tr>
  <tr>
    <td colspan="2" style="width:70%"><b>Verification of Experience</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Review of application information</td>
    <td style="width:30%; padding: 5px;"><b>'.$ReviewApplication.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Telephone/Fax/Letter communication with previous employer(s)</td>
    <td style="width:30%; padding: 5px;"><b>'.$TelephoneLetter.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Personnel Interview</td>
    <td style="width:30%; padding: 5px;"><b>'.$PersonnelInterview.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Written Examination</td>
    <td style="width:30%; padding: 5px;"><b>'.$WrittenExamination.'</b></td>
  </tr>
  <tr>
    <td style="width:70%; padding: 5px;">o	Role Playing Exercises</td>
    <td style="width:30%; padding: 5px;"><b>'.$RolePlaying.'</b></td>
  </tr>
</table>

<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:50%"> '.$DirectorClinicalSupervisor.' <br> <b>Director/ Clinical Supervisor </b></td>
    <td style="width:50%"> <img src="./../../signatures/'.$SupervisorSignature.'" width="200"/> <br> <b>Supervisor Signature</b></td>
  </tr> 
  
</table>  


<p>
');
$mpdf->Output();

?>