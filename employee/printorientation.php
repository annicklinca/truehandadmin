<?php
include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printorientation'];

$sel=$conn->query("SELECT * from orientationdocumentation where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {

$ResidentName=$row['ResidentName'];
$Date=date("m-d-Y", strtotime($row['Date']));


$GrievanceItemdate=date("m-d-Y", strtotime($row['GrievanceItemdate']));
$GrievanceComment=$row['GrievanceComment'];
$GrievancePersonalinitial=$row['GrievancePersonalinitial'];
$GrievanceResidentinitial=$row['GrievanceResidentinitial'];

$ResidentrightItemdate=date("m-d-Y", strtotime($row['ResidentrightItemdate']));
$ResidentrightComment=$row['ResidentrightComment'];
$ResidentrightPersonalinitial=$row['ResidentrightPersonalinitial'];
$ResidentrightResidentinitial=$row['ResidentrightResidentinitial'];

$HomeprogramItemdate=date("m-d-Y", strtotime($row['HomeprogramItemdate']));
$HomeprogramComment=$row['HomeprogramComment'];
$HomeprogramPersonalinitial=$row['HomeprogramPersonalinitial'];
$HomeprogramResidentinitial=$row['HomeprogramResidentinitial'];


$BehaviorExpectationsItemdate=date("m-d-Y", strtotime($row['BehaviorExpectationsItemdate']));
$BehaviorExpectationsComment=$row['BehaviorExpectationsComment'];
$BehaviorExpectationsPersonalinitial=$row['BehaviorExpectationsPersonalinitial'];
$BehaviorExpectationsResidentinitial=$row['BehaviorExpectationsResidentinitial'];


$ConsentPhotographedItemdate=date("m-d-Y", strtotime($row['ConsentPhotographedItemdate']));
$ConsentPhotographedComment=$row['ConsentPhotographedComment'];
$ConsentPhotographedPersonalinitial=$row['ConsentPhotographedPersonalinitial'];
$ConsentPhotographedResidentinitial=$row['ConsentPhotographedResidentinitial'];

$HealthServicesItemdate=date("m-d-Y", strtotime($row['HealthServicesItemdate']));
$HealthServicesComment=$row['HealthServicesComment'];
$HealthServicesPersonalinitial=$row['HealthServicesPersonalinitial'];
$HealthServicesResidentinitial=$row['HealthServicesResidentinitial'];

$OrientationNeighborhoodItemdate=date("m-d-Y", strtotime($row['OrientationNeighborhoodItemdate']));
$OrientationNeighborhoodComment=$row['OrientationNeighborhoodComment'];
$OrientationNeighborhoodPersonalinitial=$row['OrientationNeighborhoodPersonalinitial'];
$OrientationNeighborhoodResidentinitial=$row['OrientationNeighborhoodResidentinitial'];

$ResidentPreferencesItemdate=date("m-d-Y", strtotime($row['ResidentPreferencesItemdate']));
$ResidentPreferencesComment=$row['ResidentPreferencesComment'];
$ResidentPreferencesPersonalinitial=$row['ResidentPreferencesPersonalinitial'];
$ResidentPreferencesResidentinitial=$row['ResidentPreferencesResidentinitial'];

$HouseGroupsItemdate=date("m-d-Y", strtotime($row['HouseGroupsItemdate']));
$HouseGroupsComment=$row['HouseGroupsComment'];
$HouseGroupsPersonalinitial=$row['HouseGroupsPersonalinitial'];
$HouseGroupsResidentinitial=$row['HouseGroupsResidentinitial'];


$FireSafetyItemdate=date("m-d-Y", strtotime($row['FireSafetyItemdate']));
$FireSafetyComment=$row['FireSafetyComment'];
$FireSafetyPersonalinitial=$row['FireSafetyPersonalinitial'];
$FireSafetyResidentinitial=$row['FireSafetyResidentinitial'];


$SelfAdministrationItemdate=date("m-d-Y", strtotime($row['SelfAdministrationItemdate']));
$SelfAdministrationComment=$row['SelfAdministrationComment'];
$SelfAdministrationPersonalinitial=$row['SelfAdministrationPersonalinitial'];
$SelfAdministrationResidentinitial=$row['SelfAdministrationResidentinitial'];


$HouseRoutineItemdate=date("m-d-Y", strtotime($row['HouseRoutineItemdate']));
$HouseRoutineComment=$row['HouseRoutineComment'];
$HouseRoutinePersonalinitial=$row['HouseRoutinePersonalinitial'];
$HouseRoutineResidentinitial=$row['HouseRoutineResidentinitial'];


$PersonnelResidentItemdate=date("m-d-Y", strtotime($row['PersonnelResidentItemdate']));
$PersonnelResidentComment=$row['PersonnelResidentComment'];
$PersonnelResidentPersonalinitial=$row['PersonnelResidentPersonalinitial'];
$PersonnelResidentResidentinitial=$row['PersonnelResidentResidentinitial'];


$TourAgencyItemdate=date("m-d-Y", strtotime($row['TourAgencyItemdate']));
$TourAgencyComment=$row['TourAgencyComment'];
$TourAgencyPersonalinitial=$row['TourAgencyPersonalinitial'];
$TourAgencyResidentinitial=$row['TourAgencyResidentinitial'];


$TreatmentPlanItemdate=date("m-d-Y", strtotime($row['TreatmentPlanItemdate']));
$TreatmentPlanComment=$row['TreatmentPlanComment'];
$TreatmentPlanPersonalinitial=$row['TreatmentPlanPersonalinitial'];
$TreatmentPlanResidentinitial=$row['TreatmentPlanResidentinitial'];

$DischargeCriteriaItemdate=date("m-d-Y", strtotime($row['DischargeCriteriaItemdate']));
$DischargeCriteriaComment=$row['DischargeCriteriaComment'];
$DischargeCriteriaPersonalinitial=$row['DischargeCriteriaPersonalinitial'];
$DischargeCriteriaResidentinitial=$row['DischargeCriteriaResidentinitial'];



$Itemdate=date("m-d-Y", strtotime($row['Itemdate']));
$Comment=$row['Comment'];
$Personalinitial=$row['Personalinitial'];
$Residentinitial=$row['Residentinitial'];


}

$mpdf->WriteHTML('
<h3 style="text-align:center;">TRUE HAND BEHAVIORAL AGENCY</h3>
<h3>Orientation</h3>
<p>Within 24 hours of your arrival the agency shall provide you with an orientation to your new 
environment. This orientation is designed to acquaint you with the new surroundings, personnel, 
other residents, the agency s procedures, house routine and responsibilities, and your rights as a 
resident. You are welcome to ask any questions.</p>
<p>The agency requires the personnel initials to verify that they have shared the infonnation with 
you. Your initials are to verify that the personnel has shared with you the infonnation and that 
you understand the content of what was shared.  </p>

<p>See attached form.</p>
<h3>Orientation Documentation</h3>
<p>
<b> Date: </b> '.$Date.' <br>
<b> Resident Name: </b> '.$ResidentName.'
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%"><b>Item</b></td>
    <td style="width:15%"><b>Date</b></td>
    <td style="width:25%"><b>Comments</b></td>
    <td style="width:20%"><b>Personnel Initials</b></td>
    <td style="width:20%"><b>Resident Initials</b></td>
  </tr>
  <tr>
    <td style="width:20%">Grievance Forms</td>
    <td style="width:15%">'.$GrievanceItemdate.'</td>
    <td style="width:25%">'.$GrievanceComment.'</td>
    <td style="width:20%">'.$GrievancePersonalinitial.'</td>
    <td style="width:20%">'.$GrievanceResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Resident Rights</td>
    <td style="width:15%">'.$ResidentrightItemdate.'</td>
    <td style="width:25%">'.$ResidentrightComment.'</td>
    <td style="width:20%">'.$ResidentrightPersonalinitial.'</td>
    <td style="width:20%">'.$ResidentrightResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">House & Program Rules</td>
    <td style="width:15%">'.$HomeprogramItemdate.'</td>
    <td style="width:25%">'.$HomeprogramComment.'</td>
    <td style="width:20%">'.$HomeprogramPersonalinitial.'</td>
    <td style="width:20%">'.$HomeprogramResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Behavior Expectations</td>
    <td style="width:15%">'.$BehaviorExpectationsItemdate.'</td>
    <td style="width:25%">'.$BehaviorExpectationsComment.'</td>
    <td style="width:20%">'.$BehaviorExpectationsPersonalinitial.'</td>
    <td style="width:20%">'.$BehaviorExpectationsResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Consent to be Photographed</td>
    <td style="width:15%">'.$ConsentPhotographedItemdate.'</td>
    <td style="width:25%">'.$ConsentPhotographedComment.'</td>
    <td style="width:20%">'.$ConsentPhotographedPersonalinitial.'</td>
    <td style="width:20%">'.$ConsentPhotographedResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Health Services </td>
    <td style="width:15%">'.$HealthServicesItemdate.'</td>
    <td style="width:25%">'.$HealthServicesComment.'</td>
    <td style="width:20%">'.$HealthServicesPersonalinitial.'</td>
    <td style="width:20%">'.$HealthServicesResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Orientation to the Neighborhood if not contraindicated</td>
    <td style="width:15%">'.$OrientationNeighborhoodItemdate.'</td>
    <td style="width:25%">'.$OrientationNeighborhoodComment.'</td>
    <td style="width:20%">'.$OrientationNeighborhoodPersonalinitial.'</td>
    <td style="width:20%">'.$OrientationNeighborhoodResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Resident Preferences</td>
    <td style="width:15%">'.$ResidentPreferencesItemdate.'</td>
    <td style="width:25%">'.$ResidentPreferencesComment.'</td>
    <td style="width:20%">'.$ResidentPreferencesPersonalinitial.'</td>
    <td style="width:20%">'.$ResidentPreferencesResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">House Groups </td>
    <td style="width:15%">'.$HouseGroupsItemdate.'</td>
    <td style="width:25%">'.$HouseGroupsComment.'</td>
    <td style="width:20%">'.$HouseGroupsPersonalinitial.'</td>
    <td style="width:20%">'.$HouseGroupsResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Fire & Safety Evacuation Plan</td>
    <td style="width:15%">'.$FireSafetyItemdate.'</td>
    <td style="width:25%">'.$FireSafetyComment.'</td>
    <td style="width:20%">'.$FireSafetyPersonalinitial.'</td>
    <td style="width:20%">'.$FireSafetyResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Self-administration of Medication</td>
    <td style="width:15%">'.$SelfAdministrationItemdate.'</td>
    <td style="width:25%">'.$SelfAdministrationComment.'</td>
    <td style="width:20%">'.$SelfAdministrationPersonalinitial.'</td>
    <td style="width:20%">'.$SelfAdministrationResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">House Routine & Activities</td>
    <td style="width:15%">'.$HouseRoutineItemdate.'</td>
    <td style="width:25%">'.$HouseRoutineComment.'</td>
    <td style="width:20%">'.$HouseRoutinePersonalinitial.'</td>
    <td style="width:20%">'.$HouseRoutineResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Personnel & Resident Introduction</td>
    <td style="width:15%">'.$PersonnelResidentItemdate.'</td>
    <td style="width:25%">'.$PersonnelResidentComment.'</td>
    <td style="width:20%">'.$PersonnelResidentPersonalinitial.'</td>
    <td style="width:20%">'.$PersonnelResidentResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Tour of the Agency</td>
    <td style="width:15%">'.$TourAgencyItemdate.'</td>
    <td style="width:25%">'.$TourAgencyComment.'</td>
    <td style="width:20%">'.$TourAgencyPersonalinitial.'</td>
    <td style="width:20%">'.$TourAgencyResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Treatment Plan Process</td>
    <td style="width:15%">'.$TreatmentPlanItemdate.'</td>
    <td style="width:25%">'.$TreatmentPlanComment.'</td>
    <td style="width:20%">'.$TreatmentPlanPersonalinitial.'</td>
    <td style="width:20%">'.$TreatmentPlanResidentinitial.'</td>
  </tr>
  <tr>
    <td style="width:20%">Discharge criteria & procedures</td>
    <td style="width:15%">'.$DischargeCriteriaItemdate.'</td>
    <td style="width:25%">'.$DischargeCriteriaComment.'</td>
    <td style="width:20%">'.$DischargeCriteriaPersonalinitial.'</td>
    <td style="width:20%">'.$DischargeCriteriaResidentinitial.'</td>
  </tr>
</table>



<p>
');
$mpdf->Output();

?>