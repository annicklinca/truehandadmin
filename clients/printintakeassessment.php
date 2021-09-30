<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from intakeassessment where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
    $ResidentName=$row['ResidentName'];
    $Dob=$row['Dob'];
    $AHCCCS=$row['AHCCCS'];
    $Diagnosis=$row['Diagnosis'];
    $AdmissionDate=$row['AdmissionDate'];
    $SocialSecurity=$row['SocialSecurity'];
    $Language=$row['Language'];
    $DateBirth=$row['DateBirth'];
    $Ethnicity=$row['Ethnicity'];
    $Sex=$row['Sex'];
    $Religion=$row['Religion'];
    $InsuranceInformation=$row['InsuranceInformation'];
    $DNR=$row['DNR'];
    $DNRs=explode (",",strval($DNR));
    if(in_array("yes",$DNRs)){
    $DNRyes  ='Yes';
    }else{
    $DNRyes ='';
    }
    if(in_array("no",$DNRs)){
    $DNRno  ='No';
    }else{
    $DNRno ='';
    }
    if(in_array("unknown",$DNRs)){
    $DNRunknown  ='unknown';
    }else{
    $DNRunknown ='';
    }
    $DNRComment=$row['DNRComment'];

    $ADVANCEDDIRECTIVES=$row['ADVANCEDDIRECTIVES'];
    $ADVANCEDDIRECTIVESs=explode (",",strval($ADVANCEDDIRECTIVES));
    if(in_array("yes",$ADVANCEDDIRECTIVESs)){
    $ADVANCEDDIRECTIVESyes  ='Yes';
    }else{
    $ADVANCEDDIRECTIVESyes ='';
    }
    if(in_array("no",$ADVANCEDDIRECTIVESs)){
    $ADVANCEDDIRECTIVESno  ='No';
    }else{
    $ADVANCEDDIRECTIVESno ='';
    }
    if(in_array("unknown",$ADVANCEDDIRECTIVESs)){
    $ADVANCEDDIRECTIVESknown  ='unknown';
    }else{
    $ADVANCEDDIRECTIVESknown ='';
    }
    $ADVANCEDDIRECTIVESComment=$row['ADVANCEDDIRECTIVESComment'];

    $WILL=$row['WILL'];
    $WILLs=explode (",",strval($WILL));
    if(in_array("yes",$WILLs)){
    $WILLyes  ='Yes';
    }else{
    $WILLyes ='';
    }
    if(in_array("no",$WILLs)){
    $WILLno  ='No';
    }else{
    $WILLno ='';
    }
    if(in_array("unknown",$WILLs)){
    $WILLunknown  ='unknown';
    }else{
    $WILLunknown ='';
    }
    $WILLComment=$row['WILLComment'];

    $POALEGAL=$row['POALEGAL'];
    $POALEGALs=explode (",",strval($POALEGAL));
    if(in_array("yes",$POALEGALs)){
    $POALEGALyes  ='Yes';
    }else{
    $POALEGALyes ='';
    }
    if(in_array("no",$POALEGALs)){
    $POALEGALno  ='No';
    }else{
    $POALEGALno ='';
    }
    if(in_array("unknown",$POALEGALs)){
    $POALEGALunknown  ='unknown';
    }else{
    $POALEGALunknown ='';
    }
    $POALEGALComment=$row['POALEGALComment'];

    $ResidentExpected=$row['ResidentExpected'];
    $ClinicalTeam=$row['ClinicalTeam'];
    $Strengths=$row['Strengths'];
    $Limitations=$row['Limitations'];
    $FamilyOthers=$row['FamilyOthers'];
    $Allergies=$row['Allergies'];

    $Axis=$row['Axis'];
    $Axiss=explode (",",strval($Axis));
    $Code=$row['Code'];
    $Codes=explode (",",strval($Code));
    $DiagnosisMedical=$row['DiagnosisMedical'];
    $DiagnosisMedicals=explode (",",strval($DiagnosisMedical));

    $MedicationName=$row['MedicationName'];
    $MedicationNames=explode (",",strval($MedicationName));
    $MedicationDose=$row['MedicationDose'];
    $MedicationDoses=explode (",",strval($MedicationDose));
    $MedicationFrequency=$row['MedicationFrequency'];
    $MedicationFrequencys=explode (",",strval($MedicationFrequency));
    
    $HistoryNonCompliance=$row['HistoryNonCompliance'];
    $PresentStatus=$row['PresentStatus'];
    $MedicalPresentationPersonal=$row['MedicalPresentationPersonal'];
    $MedicalPresentationFamilyHX=$row['MedicalPresentationFamilyHX'];
    $MedicalPresentationUrgentEmergent=$row['MedicalPresentationUrgentEmergent'];
    $PsychiatricPresentationPersonal=$row['PsychiatricPresentationPersonal'];
    $PsychiatricPresentationFamilyHX=$row['PsychiatricPresentationFamilyHX'];
    $PsychiatricPresentationCOT=$row['PsychiatricPresentationCOT'];
    $HistorySwicide=$row['HistorySwicide'];
    $HistoryIdeation=$row['HistoryIdeation'];
    $CurrentIdeation=$row['CurrentIdeation'];
    $HistoryHarming=$row['HistoryHarming'];
    $HistorySelfHarming=$row['HistorySelfHarming'];
    $Hospitalizations=$row['Hospitalizations'];

    $PresentsNeat=$row['PresentsNeat'];
    $PresentsNeats=explode (",",strval($PresentsNeat));
    if(in_array("yes",$PresentsNeats)){
    $PresentsNeatyes  ='Yes';
    }else{
    $PresentsNeatyes ='';
    }
    if(in_array("no",$PresentsNeats)){
    $PresentsNeatno  ='No';
    }else{
    $PresentsNeatno ='';
    }

    $Presentsfree=$row['Presentsfree'];
    $Presentsfrees=explode (",",strval($Presentsfree));
    if(in_array("yes",$Presentsfrees)){
    $Presentsfreeyes  ='Yes';
    }else{
    $Presentsfreeyes ='';
    }
    if(in_array("no",$Presentsfrees)){
    $Presentsfreeno  ='No';
    }else{
    $Presentsfreeno ='';
    }

    $WearingAppropriate=$row['WearingAppropriate'];
    $WearingAppropriates=explode (",",strval($WearingAppropriate));
    if(in_array("yes",$WearingAppropriates)){
    $WearingAppropriateyes  ='Yes';
    }else{
    $WearingAppropriateyes ='';
    }
    if(in_array("no",$WearingAppropriates)){
    $WearingAppropriateno  ='No';
    }else{
    $WearingAppropriateno ='';
    }

    $DressedAppropriate=$row['DressedAppropriate'];
    $DressedAppropriates=explode (",",strval($DressedAppropriate));
    if(in_array("yes",$DressedAppropriates)){
    $DressedAppropriateyes  ='Yes';
    }else{
    $DressedAppropriateyes ='';
    }
    if(in_array("no",$DressedAppropriates)){
    $DressedAppropriateno  ='No';
    }else{
    $DressedAppropriateno ='';
    }

    $SkillsComment=$row['SkillsComment'];

    $TakeMedications=$row['TakeMedications'];
    $TakeMedicationss=explode (",",strval($TakeMedications));
    if(in_array("yes",$TakeMedicationss)){
    $TakeMedicationsyes  ='Yes';
    }else{
    $TakeMedicationsyes ='';
    }
    if(in_array("no",$TakeMedicationss)){
    $TakeMedicationsno  ='No';
    }else{
    $TakeMedicationsno ='';
    }
    $TakeMedicationsComment=$row['TakeMedicationsComment'];
    
    $YourDx=$row['YourDx'];
    $YourDxs=explode (",",strval($YourDx));
    if(in_array("yes",$YourDxs)){
    $YourDxyes  ='Yes';
    }else{
    $YourDxyes ='';
    }
    if(in_array("no",$YourDxs)){
    $YourDxno  ='No';
    }else{
    $YourDxno ='';
    }

    $YourDxComment=$row['YourDxComment'];

    $RecognizeSymptoms=$row['RecognizeSymptoms'];
    $RecognizeSymptomss=explode (",",strval($RecognizeSymptoms));
    if(in_array("yes",$RecognizeSymptomss)){
    $RecognizeSymptomsyes  ='Yes';
    }else{
    $RecognizeSymptomsyes ='';
    }
    if(in_array("no",$RecognizeSymptomss)){
    $RecognizeSymptomsno  ='No';
    }else{
    $RecognizeSymptomsno ='';
    }
    $RecognizeSymptomsComment=$row['RecognizeSymptomsComment'];

    $PublicTransportation=$row['PublicTransportation'];
    $PublicTransportations=explode (",",strval($PublicTransportation));
    if(in_array("yes",$PublicTransportations)){
    $PublicTransportationyes  ='Yes';
    }else{
    $PublicTransportationyes ='';
    }
    if(in_array("no",$PublicTransportations)){
    $PublicTransportationno  ='No';
    }else{
    $PublicTransportationno ='';
    }
    $PublicTransportationComment=$row['PublicTransportationComment'];

    $YourSpending=$row['YourSpending'];
    $YourSpendings=explode (",",strval($YourSpending));
    if(in_array("yes",$YourSpendings)){
    $YourSpendingyes  ='Yes';
    }else{
    $YourSpendingyes ='';
    }
    if(in_array("no",$YourSpendings)){
    $YourSpendingno  ='No';
    }else{
    $YourSpendingno ='';
    }
    $YourSpendingComment=$row['YourSpendingComment'];

    $ResidentWants=$row['ResidentWants'];
    $AnyAssets=$row['AnyAssets'];
    $IncomeType=$row['IncomeType'];
    $CriminalHistory=$row['CriminalHistory'];
    $SubstanceDrug=$row['SubstanceDrug'];
    $NicotineUse=$row['NicotineUse'];
    $LegalHistory=$row['LegalHistory'];
    $HistoryAbuse=$row['HistoryAbuse'];

    $ADLs=$row['ADLs'];
    $ADLss=explode (",",strval($ADLs));
    if(in_array("Alert",$ADLss)){
    $Alert  ='<input type="checkbox" checked="checked"/>Alert';
    }else{
    $Alert ='<input type="checkbox" />Alert';
    }
    if(in_array("Inappropriate",$ADLss)){
    $Inappropriate  ='<input type="checkbox" checked="checked"/>Inappropriate social norms';
    }else{
    $Inappropriate ='<input type="checkbox" />Inappropriate social norms';
    }
    if(in_array("Independent",$ADLss)){
    $Independent  ='<input type="checkbox" checked="checked"/>Independent all';
    }else{
    $Independent ='<input type="checkbox" />Independent all';
    }
    if(in_array("Responsive",$ADLss)){
    $Responsive  ='<input type="checkbox" checked="checked"/>Responsive';
    }else{
    $Responsive ='<input type="checkbox" />Responsive';
    }
    if(in_array("Disheveled",$ADLss)){
    $Disheveled  ='<input type="checkbox" checked="checked"/>Disheveled appearance';
    }else{
    $Disheveled ='<input type="checkbox" />Disheveled appearance';
    }
    if(in_array("Moderate",$ADLss)){
    $Moderate  ='<input type="checkbox" checked="checked"/>Moderate assistance';
    }else{
    $Moderate ='<input type="checkbox" />Moderate assistance';
    }
    if(in_array("Confused",$ADLss)){
    $Confused  ='<input type="checkbox" checked="checked"/>Confused';
    }else{
    $Confused ='<input type="checkbox" />Confused';
    }
    if(in_array("Ambulatory",$ADLss)){
    $Ambulatory  ='<input type="checkbox" checked="checked"/>Ambulatory';
    }else{
    $Ambulatory ='<input type="checkbox" />Ambulatory';
    }
    if(in_array("Requires",$ADLss)){
    $Requires  ='<input type="checkbox" checked="checked"/>Requires prompting';
    }else{
    $Requires ='<input type="checkbox" />Requires prompting';
    }
    if(in_array("Verbal",$ADLss)){
    $Verbal  ='<input type="checkbox" checked="checked"/>Non-Verbal';
    }else{
    $Verbal ='<input type="checkbox" />Non-Verbal';
    }
    if(in_array("Ambulatory",$ADLss)){
    $Ambulatory  ='<input type="checkbox" checked="checked"/>Ambulatory w/ assistance';
    }else{
    $Ambulatory ='<input type="checkbox" />Ambulatory w/ assistance';
    }
    if(in_array("Supervision",$ADLss)){
    $Supervision  ='<input type="checkbox" checked="checked"/>Supervision';
    }else{
    $Supervision ='<input type="checkbox" />Supervision';
    }
    if(in_array("Oriented",$ADLss)){
    $Oriented  ='<input type="checkbox" checked="checked"/>Oriented x#';
    }else{
    $Oriented ='<input type="checkbox" />Oriented x#';
    }
    if(in_array("Incontinent",$ADLss)){
    $Incontinent  ='<input type="checkbox" checked="checked"/>Incontinent of bowel';
    }else{
    $Incontinent ='<input type="checkbox" />Incontinent of bowel';
    }
    if(in_array("Self",$ADLss)){
    $Self  ='<input type="checkbox" checked="checked"/>Self-Dress';
    }else{
    $Self ='<input type="checkbox" />Self-Dress';
    }
    if(in_array("Delusional",$ADLss)){
    $Delusional  ='<input type="checkbox" checked="checked"/>Delusional';
    }else{
    $Delusional ='<input type="checkbox" />Delusional';
    }
    if(in_array("bladder",$ADLss)){
    $bladder  ='<input type="checkbox" checked="checked"/>Incontinent of bladder';
    }else{
    $bladder ='<input type="checkbox" />Incontinent of bladder';
    }
    if(in_array("grooming",$ADLss)){
    $grooming  ='<input type="checkbox" checked="checked"/>Self-bathing/grooming';
    }else{
    $grooming ='<input type="checkbox" />Self-bathing/grooming';
    }
    if(in_array("Cooperative",$ADLss)){
    $Cooperative  ='<input type="checkbox" checked="checked"/>Cooperative';
    }else{
    $Cooperative ='<input type="checkbox" />Cooperative';
    }
    if(in_array("Feeds",$ADLss)){
    $Feeds  ='<input type="checkbox" checked="checked"/>Feeds self';
    }else{
    $Feeds ='<input type="checkbox" />Feeds self';
    }
    if(in_array("toileting",$ADLss)){
    $toileting  ='<input type="checkbox" checked="checked"/>Self-toileting';
    }else{
    $toileting ='<input type="checkbox" />Self-toileting';
    }
    if(in_array("Wanders",$ADLss)){
    $Wanders  ='<input type="checkbox" checked="checked"/>Wanders';
    }else{
    $Wanders ='<input type="checkbox" />Wanders';
    }
    if(in_array("Prepares",$ADLss)){
    $Prepares  ='<input type="checkbox" checked="checked"/>Prepares food independently';
    }else{
    $Prepares ='<input type="checkbox" />Prepares food independently';
    }
    if(in_array("Total",$ADLss)){
    $Total  ='<input type="checkbox" checked="checked"/>Total Care';
    }else{
    $Total ='<input type="checkbox" />Total Care';
    }
    if(in_array("NonResponsive",$ADLss)){
    $NonResponsive  ='<input type="checkbox" checked="checked"/>Non-Responsive';
    }else{
    $NonResponsive ='<input type="checkbox" />Non-Responsive';
    }
    if(in_array("PreparesFood",$ADLss)){
    $PreparesFood  ='<input type="checkbox" checked="checked"/>Prepares food with assistance';
    }else{
    $PreparesFood ='<input type="checkbox" />Prepares food with assistance';
    }
    if(in_array("Independentchores",$ADLss)){
    $Independentchores  ='<input type="checkbox" checked="checked"/>Independent chores';
    }else{
    $Independentchores ='<input type="checkbox" />Independent chores';
    }

    $PreferredActivities=$row['PreferredActivities'];
    $SignificantOthers=$row['SignificantOthers'];
    $HealthNutritional=$row['HealthNutritional'];
    $SpiritualCultural=$row['SpiritualCultural'];
    $Education=$row['Education'];
    $VocationalWork=$row['VocationalWork'];
    $DischargePlanning=$row['DischargePlanning'];
    $PreferreddActivities=$row['PreferreddActivities'];
    $Objectives=$row['Objectives'];
    $Client=$row['Client'];
    $ClientDate=$row['ClientDate'];
    $ClinicalOversight=$row['ClinicalOversight'];
    $ClinicalOversightDate=$row['ClinicalOversightDate'];
    $ClientSign=$row['ClientSign'];
    $OversightSign=$row['OversightSign'];
}

$html='
<h2>intake assessment</h2>
<br>
<table border="0" style="width:100%; border-collapse: collapse;">
  <tr>
    <td style="width:50%">Resident Name:  <b>'.$ResidentName.'</b></td>
    <td style="width:50%">DOB: <b>'.$Dob.'</td>
    <td style="width:50%"></td>
  </tr> 
  <tr>
  <td style="width:50%">AHCCCS #:<b>'.$AHCCCS.'</b></td>
  <td style="width:50%">Diagnosis:<b>'.$Diagnosis.'</b></td>
  <td style="width:50%">Admission Date:<b>'.$AdmissionDate.'</b></td>
  </tr> 
</table><br>

<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td style="width:20%">Social Security #</td>
    <td style="width:20%"><b>'.$SocialSecurity.'</b></td>
    <td style="width:20%">Language</td>
    <td style="width:20%"><b>'.$Language.'</b></td>
  </tr> 
  <tr>
    <td style="width:20%">Date of Birth</td>
    <td style="width:20%"><b>'.$DateBirth.'</b></td>
    <td style="width:20%">Ethnicity</td>
    <td style="width:20%"><b>'.$Ethnicity.'</b></td>
  </tr> 
  <tr>
    <td style="width:20%">Sex</td>
    <td style="width:20%"><b>'.$Sex.'</b></td>
    <td style="width:20%">Religion</td>
    <td style="width:20%"><b>'.$Religion.'</b></td>
  </tr> 
  <tr>
    <td style="width:20%">Insurance Information</td>
    <td style="width:20%" colspan="3"><b>'.$InsuranceInformation.'</b></td>
  </tr>  
</table><br>
<b>Are there any PREARRANGED DIRECTIVES:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td style="width:20%"></td>
    <td style="width:20%">YES</td>
    <td style="width:20%">NO</td>
    <td style="width:20%">UNKNOWN</td>
    <td style="width:20%">COMMENTS</td>
  </tr> 
  <tr>
    <td style="width:20%">DNR</td>
    <td style="width:20%">'.$DNRyes.'</td>
    <td style="width:20%">'.$DNRno.'</td>
    <td style="width:20%">'.$DNRunknown.'</td>
    <td style="width:20%">'.$DNRComment.'</td>
  </tr> 
  <tr>
    <td style="width:20%">ADVANCED DIRECTIVES</td>
    <td style="width:20%">'.$ADVANCEDDIRECTIVESyes.'</td>
    <td style="width:20%">'.$ADVANCEDDIRECTIVESno.'</td>
    <td style="width:20%">'.$ADVANCEDDIRECTIVESknown.'</td>
    <td style="width:20%">'.$ADVANCEDDIRECTIVESComment.'</td>
  </tr> 
  <tr>
    <td style="width:20%">WILL</td>
    <td style="width:20%">'.$WILLyes.'</td>
    <td style="width:20%">'.$WILLno.'</td>
    <td style="width:20%">'.$WILLunknown.'</td>
    <td style="width:20%">'.$WILLComment.'</td>
  </tr> 
  <tr>
    <td style="width:20%">POA/LEGAL GUARDIAN</td>
    <td style="width:20%">'.$POALEGALyes.'</td>
    <td style="width:20%">'.$POALEGALno.'</td>
    <td style="width:20%">'.$POALEGALunknown.'</td>
    <td style="width:20%">'.$POALEGALComment.'</td>
  </tr> 
</table><br>
<b>REASONS FOR REFERRAL/RESIDENT NEEDS:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">1). Resident’s Expected Length of Stay:</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$ResidentExpected.'</td>
  </tr> 
  <tr>
    <td  colspan="2">2). Clinical Team’s Expected Length of Stay:</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$ClinicalTeam.'</td>
  </tr> 
  <tr>
    <td  colspan="2">3). Strengths and Limitations:</td>
  </tr> 
  <tr>
    <td >Strengths</td>
    <td >'.$Strengths.'</td>
  </tr> 
  <tr>
    <td >Limitations</td>
    <td >'.$Limitations.'</td>
  </tr> 
  <tr>
    <td  colspan="2">4). Family/Others Involved in Treatment:</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$FamilyOthers.'</td>
  </tr> 
  <tr>
    <td  colspan="2">5). Allergies:</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$Allergies.'</td>
  </tr> 
</table><br>
<b>Identified Need To Address: Skill Development </b>
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <td>AXIS</td>
    <td>CODE</td>
    <td> DIAGNOSIS</td>
  </tr>';
  foreach($Axiss as $tablesIndex => $Axisone) {
    $html .='
<tr>
  <td>'.$Axisone.'</td>
  <td>'.$Codes[$tablesIndex].'</td>
  <td>'.$DiagnosisMedicals[$tablesIndex].'</td>
</tr>';
  }
  $html .='
</table><br>
<b>1). Medications:</b>
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <td>NAME</td>
    <td>DOSE</td>
    <td>FREQUENCY</td>
  </tr>';
  foreach($MedicationNames as $tablesIndex => $MedicationNamesone) {
    $html .='
<tr>
  <td>'.$MedicationNamesone.'</td>
  <td>'.$MedicationDoses[$tablesIndex].'</td>
  <td>'.$MedicationFrequencys[$tablesIndex].'</td>
</tr>';
  }
  $html .='
</table><br>
<b>2). History of Non-Compliance with Medication/Treatment:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$HistoryNonCompliance.'</td>
  </tr> 
</table><br>
<b>3). Present Status of Potential for violent Behaviors:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$PresentStatus.'</td>
  </tr> 
</table><br>
<b>4). Medical Presentation, Symptoms, pending Medical:		</b>Urgent or Emergent:'.$MedicalPresentationPersonal.'
<table border="1" style="width:100%; border-collapse: collapse;">
    <tr>
    <td>Personal</td>
    <td>'.$MedicalPresentationFamilyHX.'</td>
    </tr> 
    <tr>
    <td>Family HX:</td>
    <td>'.$MedicalPresentationUrgentEmergent.'</td>
    </tr> 
</table><br>
<b>5). Psychiatric Presentation and Symptoms:			</b>COT:'.$PsychiatricPresentationPersonal.'
<table border="1" style="width:100%; border-collapse: collapse;">
    <tr>
    <td>Personal</td>
    <td>'.$PsychiatricPresentationFamilyHX.'</td>
    </tr> 
    <tr>
    <td>Family HX:</td>
    <td>'.$PsychiatricPresentationCOT.'</td>
    </tr> 
</table><br>
<b>6).  Risk Assessment:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
    <tr>
    <td>History of suicide, plan or intent</td>
    <td>'.$HistorySwicide.'</td>
    </tr> 
    <tr>
    <td>History of ideation</td>
    <td>'.$HistoryIdeation.'</td>
    </tr>  
    <tr> 
    <td>Current ideation</td>
    <td>'.$CurrentIdeation.'</td>
    </tr>  
    <tr> 
    <td>History of harming others</td>
    <td>'.$HistoryHarming.'</td>
    </tr>  
    <tr> 
    <td>History of self-harming behaviors</td>
    <td>'.$HistorySelfHarming.'</td>
    </tr>  
    <tr> 
    <td>Hospitalizations (When, Where, why)</td>
    <td>'.$Hospitalizations.'</td>
    </tr>   
</table><br>
<b>
INTAKE ASSESSMENT OF SKILLS: (Check what applies):
</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td>SKILLS</td>
    <td>YES</td>
    <td>NO</td>
  </tr> 
  <tr>
    <td>Presents neat and Clean</td>
    <td>'.$PresentsNeatyes.'</td>
    <td>'.$PresentsNeatno.'</td>
  </tr> 
  <tr>
    <td>Presents free from body odor</td>
    <td>'.$Presentsfreeyes.'</td>
    <td>'.$Presentsfreeno.'</td>
  </tr> 
  <tr>
    <td>Wearing appropriate size</td>
    <td>'.$WearingAppropriateyes.'</td>
    <td>'.$WearingAppropriateno.'</td>
  </tr> 
  <tr>
    <td>Dressed appropriate for occasion</td>
    <td>'.$DressedAppropriateyes.'</td>
    <td>'.$DressedAppropriateno.'</td>
  </tr> 
  <tr>
    <td>Comments: </td>
    <td colspan="2">'.$SkillsComment.'</td>
  </tr> 
</table><br>

<b>
INTAKE ASSESSMENT OF SKILLS CONTINUATION: (Check what applies):

</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td>SKILLS</td>
    <td>YES</td>
    <td>NO</td>
    <td>NO</td>
    <td colspan="2">COMMENTS</td>
  </tr> 
  <tr>
    <td>Do you believe it is important to take medications?</td>
    <td>'.$TakeMedicationsyes.'</td>
    <td>'.$TakeMedicationsno.'</td>
    <td>What are they?</td>
    <td>'.$TakeMedicationsComment.'</td>
  </tr> 
  <tr>
    <td>Are you aware of your Dx?</td>
    <td>'.$YourDxyes.'</td>
    <td>'.$YourDxno.'</td>
    <td>Describe:</td>
    <td>'.$YourDxComment.'</td>
  </tr> 
  <tr>
    <td>Are you able to recognize symptoms?</td>
    <td>'.$RecognizeSymptomsyes.'</td>
    <td>'.$RecognizeSymptomsno.'</td>
    <td>What are they?</td>
    <td>'.$RecognizeSymptomsComment.'</td>
  </tr> 
  <tr>
    <td>Do you use public transportation</td>
    <td>'.$PublicTransportationyes.'</td>
    <td>'.$PublicTransportationno.'</td>
    <td>Explain:</td>
    <td>'.$PublicTransportationComment.'</td>
  </tr>  
  <tr>
    <td>Do you know how to budget your spending”</td>
    <td>'.$YourSpendingyes.'</td>
    <td>'.$YourSpendingno.'</td>
    <td>Explain:</td>
    <td>'.$YourSpendingComment.'</td>
  </tr> 
</table><br>
<h4>SUPPORT SYSTEM/COMMUNITY RESOURCES:</h4>
<b>1).  Resident’s Wants and Needs:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$ResidentWants.'</td>
  </tr> 
</table><br>
<b>2).  Are There any Assets:  </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$AnyAssets.'</td>
  </tr> 
</table><br>
<b>3).  Income type, Amount, and payee Status (if known):</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$IncomeType.'</td>
  </tr> 
</table><br>
<b>4).  Criminal History: </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$CriminalHistory.'</td>
  </tr> 
</table><br>
<b>5).  Substance and Drug History: </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$SubstanceDrug.'</td>
  </tr> 
</table><br>
<b>6).  Nicotine Use:  </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$NicotineUse.'</td>
  </tr> 
</table><br>
<b>7).  Legal History:  (Guardianship, Pending Litigation, etc) </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$LegalHistory.'</td>
  </tr> 
</table><br>
<b>8).  History of Abuse (victim/Perpetrator):  </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$HistoryAbuse.'</td>
  </tr> 
</table><br>
<b>9).  ADLs </b>
<table border="0" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$Alert.'</td>
    <td  colspan="2">'.$Inappropriate.'</td>
    <td  colspan="2">'.$Independent.'</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$Responsive.'</td>
    <td  colspan="2">'.$Disheveled.'</td>
    <td  colspan="2">'.$Moderate.'</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$Confused.'</td>
    <td  colspan="2">'.$Ambulatory.'</td>
    <td  colspan="2">'.$Requires.'</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$Verbal.'</td>
    <td  colspan="2">'.$Ambulatory.'</td>
    <td  colspan="2">'.$Supervision.'</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$Oriented.'</td>
    <td  colspan="2">'.$Incontinent.'</td>
    <td  colspan="2">'.$Self.'</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$Delusional.'</td>
    <td  colspan="2">'.$bladder.'</td>
    <td  colspan="2">'.$grooming.'</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$Cooperative.'</td>
    <td  colspan="2">'.$Feeds.'</td>
    <td  colspan="2">'.$toileting.'</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$Wanders.'</td>
    <td  colspan="2">'.$Prepares.'</td>
    <td  colspan="2">'.$Total.'</td>
  </tr> 
  <tr>
    <td  colspan="2">'.$NonResponsive.'</td>
    <td  colspan="2">'.$PreparesFood.'</td>
    <td  colspan="2">'.$Independentchores.'</td>
  </tr> 
</table><br>
<p>The client reports that she can manage her own self-care and complete care independently.</p>
<b>10).  Preferred activities, community groups/support services/How do you spend your time:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$PreferredActivities.'</td>
  </tr> 
</table><br>
<b>11).  Significant Others, Friends, Level of Support: </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$SignificantOthers.'</td>
  </tr> 
</table><br>
<b>12).  Health/Nutritional needs/Food or Snack Preference/Restrictions:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$HealthNutritional.'</td>
  </tr> 
</table><br>
<b>13).  Spiritual/Cultural Needs Addressed:</b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$SpiritualCultural.'</td>
  </tr> 
</table><br>
<b>14).  Education: </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$Education.'</td>
  </tr> 
</table><br>
<b>15).  Vocational/Work History: </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$VocationalWork.'</td>
  </tr> 
</table><br>
<b>16).  Discharge Planning: </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$DischargePlanning.'</td>
  </tr> 
</table><br>
<b>TREATMENT/DISCHARGE PLANNING<br>
1).  OBJECTIVES:
 </b>
<table border="1" style="width:100%; border-collapse: collapse;">
  <tr>
    <td  colspan="2">'.$Objectives.'</td>
  </tr> 
</table><br>

<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">Signature</td>
    <td style="width:20%">Printed Name</td>
    <td style="width:20%">Title</td>
    <td style="width:20%">Date</td>
  </tr> 
  <tr>
     <td style="width:20%"><img src="./../signatures/'.$ClientSign.'" width="200"/> </td>
    <td style="width:20%"> '.$Client.'</td>
    <td style="width:20%">Client</td>
    <td style="width:20%">'.$ClientDate.'</td>
  </tr> 
  <tr>
    <td style="width:20%"><img src="./../signatures/'.$OversightSign.'" width="200"/> </td>
    <td style="width:20%"> '.$ClinicalOversight.'</td>
    <td style="width:20%">Clinical Oversight/BHP</td>
    <td style="width:20%">'.$ClinicalOversightDate.'</td>
  </tr> 
</table>
  

</table>


<p>

';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>