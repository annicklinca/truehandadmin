<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from treatmentplan where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {

$Name=$row['Name'];
$Dob=$row['Dob'];
$Age=$row['Age'];
$Sex=$row['Sex'];
$PlacingAgency=$row['PlacingAgency'];
$PlanType=$row['PlanType'];
$AdmissionsDate=$row['AdmissionsDate'];
$PlanDate=$row['PlanDate'];
$ExpDate=$row['ExpDate'];
$Diagnosis=$row['Diagnosis'];

$PresentingIssues=$row['PresentingIssues'];
$PresentingIssuess=explode (",",strval($PresentingIssues));
$TreatmentGoals=$row['TreatmentGoals'];
$TreatmentGoalss=explode (",",strval($TreatmentGoals));
$TreatmentMethods=$row['TreatmentMethods'];
$TreatmentMethodss=explode (",",strval($TreatmentMethods));
$DateStablished=$row['DateStablished'];
$DateStablisheds=explode (",",strval($DateStablished));
$ProjectedCompletionDate=$row['ProjectedCompletionDate'];
$ProjectedCompletionDates=explode (",",strval($ProjectedCompletionDate));
$CurrentMeasure=$row['CurrentMeasure'];
$CurrentMeasures=explode (",",strval($CurrentMeasure));
$DesiredMeasure=$row['DesiredMeasure'];
$DesiredMeasures=explode (",",strval($DesiredMeasure));
$Outcome=$row['Outcome'];
$Outcomes=explode (",",strval($Outcome));

$DischargePlanning=$row['DischargePlanning'];
$CodeOne=$row['CodeOne'];
$CodeTwo=$row['CodeTwo'];
$CodeThree=$row['CodeThree'];
$Agree=$row['Agree'];
    $Agrees=explode (",",strval($Agree));
    if(in_array("yes",$Agrees)){
        $Agreementyes  ='<input type="checkbox" checked="checked"/>Yes, I agree with the types and levels of services included in my treatment plan.';
        }else{
        $Agreementyes ='<input type="checkbox" />Yes, I agree with the types and levels of services included in my treatment plan.';
        }
        if(in_array("no",$Agrees)){
            $Agreementno  ='<input type="checkbox" checked="checked"/>No, I disagree with the types and/or levels of some or all the services included in my treatment plan.  By checking this box, I will receive and may appeal the treatment team’s decision to not include all types and/or levels of services that I requested.  
            ';
            }else{
            $Agreementno ='<input type="checkbox" />No, I disagree with the types and/or levels of some or all the services included in my treatment plan.  By checking this box, I will receive and may appeal the treatment team’s decision to not include all types and/or levels of services that I requested.';
            }


$BHP=$row['BHP'];
$BHPDate=$row['BHPDate'];
$ResidentName=$row['ResidentName'];
$ResidentDate=$row['ResidentDate'];
$BHT=$row['BHT'];
$BHTDate=$row['BHTDate'];
$BHPSign=$row['BHPSign'];
$ResidentSign=$row['ResidentSign'];
$BHTSign=$row['BHTSign'];
}

$html='
<h3 style="text-align:center">Treatment Plan </h3>
<br>
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">NAME:  <br><b>'.$Name.'</b></td>
    <td style="width:20%">DOB:<br><b>'.$Dob.'</td>
    <td style="width:20%">AGE:<br><b>'.$Age.'</b></td>
    <td style="width:20%">SEX:<br><b>'.$Sex.'</b></td>
    <td style="width:20%">PLACING AGENCY:<br><b>'.$PlacingAgency.'</b></td>
  </tr> 
  <tr>
    <td style="width:20%">PLAN TYPE:<br><b>'.$PlanType.'</b></td>
    <td style="width:20%">ADMISSION DATE:  <br><b>'.$AdmissionsDate.'</b></td>
    <td style="width:20%">PLAN DATE:<br><b>'.$PlanDate.'</td>
    <td style="width:20%">EXP DATE:<br><b>'.$ExpDate.'</b></td>
  </tr> 
</table><br>
Diagnosis
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">'.$Diagnosis.'</td>
  </tr> 
</table><br>

<b>Identified Need To Address: Skill Development </b>
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <td>
    Presenting Issues
    </td>
    <td>
    Treatment Goals
    </td>
    <td>Treatment Methods
    Frequency of Treatment
    
    </td>
    <td>Date Stablished
    </td>
    <td>Projected Completion Date
    </td>
    <td>Current Measure
    </td>
    <td>Desired Measure
    </td>
    <td>
    Outcome
    </td>
  </tr>';
  foreach($PresentingIssuess as $tablesIndex => $PresentingIssuessone) {
    $html .='
<tr>
  <td>'.$PresentingIssuessone.'</td>
  <td>'.$TreatmentGoalss[$tablesIndex].'</td>
  <td>'.$TreatmentMethodss[$tablesIndex].'</td>
  <td>'.$DateStablisheds[$tablesIndex].'</td>
  <td>'.$ProjectedCompletionDates[$tablesIndex].'</td>
  <td>'.$CurrentMeasures[$tablesIndex].'</td>
  <td>'.$DesiredMeasures[$tablesIndex].'</td>
  <td>'.$Outcomes[$tablesIndex].'</td>
</tr>';
  }
  $html .='
</table><br>

Discharge Planning: 
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <td colspan="3" style="width:20%">'.$DischargePlanning.'</td>
  </tr> 
  <tr>
    <td style="width:20%"><b>Outcome Codes: Code 1 – Achieved.</b>  <br><br>'.$CodeOne.'</td>
    <td style="width:20%"><b>Code  2 – Partially Achieved/Continue</b><br>'.$CodeTwo.'</td>
    <td style="width:20%"><b>Code  3 – Not achieved/Continue/Discontinue</b><br>'.$CodeThree.'</td>
  </tr> 
</table><br>
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <td>'.$Agreementyes.'</td>
    <td>'.$Agreementno.'</td>
  </tr> 
</table><br>

<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%"> '.$BHP.' <br> <b>BHP</b></td>
    <td style="width:20%"><img src="./../signatures/'.$BHPSign.'" width="200"/> <br></td>
    <td style="width:20%"> '.$BHPDate.' <br> <b>Date</b></td>
  </tr> 
   <tr>
   <td style="width:20%"> '.$ResidentName.' <br> <b>Resident</b></td>
   <td style="width:20%"><img src=".../signatures/'.$ResidentSign.'" width="200"/> <br></td>
   <td style="width:20%"> '.$ResidentDate.' <br> <b>Date</b></td>
  </tr> 
  <tr>
  <td style="width:20%"> '.$BHT.' <br> <b>BHT</b></td>
  <td style="width:20%"><img src=".../signatures/'.$BHTSign.'" width="200"/> <br></td>
  <td style="width:20%"> '.$BHTDate.' <br> <b>Date</b></td>
 </tr> 
</table>
<p>
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>