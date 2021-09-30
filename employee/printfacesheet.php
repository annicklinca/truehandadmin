<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf();


$id=$_GET['id'];
$sel=$conn->query("SELECT * from  facesheet where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {

$revisedate=date("m-d-Y", strtotime($row['revisedate']));
$printdate=date("m-d-Y", strtotime($row['printdate']));
$casemanager=$row['casemanager'];
$title=$row['title'];
$site=$row['site'];
$phonenumber=$row['phonenumber'];
$residentname=$row['residentname'];
$ssn=$row['ssn'];
$gender=$row['gender'];
$dob=date("m-d-Y", strtotime($row['dob']));
$name=$row['name'];
$gender1=$row['gender1'];
$ssn1=$row['ssn1'];
$dob2=date("m-d-Y", strtotime($row['dob2']));
$address=$row['address'];
$apt=$row['apt'];
$az=$row['az'];
$phone2=$row['phone2'];
$aka=$row['aka'];
$intakedate=date("m-d-Y", strtotime($row['intakedate']));
$printlanguage=$row['printlanguage'];
$ethn=$row['ethn'];
$haircolor=$row['haircolor'];
$status=$row['status'];
$eyecolor=$row['eyecolor'];
$weight=$row['weight'];
$height=$row['height'];
$marks=$row['marks'];
$phase=$row['phase'];
$diagnosis=$row['diagnosis'];
$mh_status=$row['mh_status'];
$needasst=$row['needasst'];
$cotdate=date("m-d-Y", strtotime($row['cotdate']));
$cotto=date("m-d-Y", strtotime($row['cotto']));
$directive=$row['directive'];
$executed=$row['executed'];
$last_hosp=$row['last_hosp'];
$hosp_name=$row['hosp_name'];
$reactions=$row['reactions'];
$insurance=$row['insurance'];
$policy=$row['policy'];
$healthplan=$row['healthplan'];
$healthid=$row['healthid'];
$ph=$row['ph'];
$ahcc_id=$row['ahcc_id'];
$eligstatus=$row['eligstatus'];
$effrom=$row['effrom'];
$effto=$row['effto'];
$copay_percentage=$row['copay_percentage'];
$copay_category=$row['copay_category'];
$monthly_income=$row['monthly_income'];
$member_parent=$row['member_parent'];
$phh=$row['phh'];
$w=$row['w'];
$cell=$row['cell'];
$addresses=$row['addresses'];
$guardian=$row['guardian'];
$phh1=$row['phh1'];
$w1=$row['w1'];
$cell1=$row['cell1'];
$address2=$row['address2'];
$emerg_contact=$row['emerg_contact'];
$phh2=$row['phh2'];
$w2=$row['w2'];
$cell3=$row['cell3'];
$address4=$row['address4'];
$designrep=$row['designrep'];
$phh3=$row['phh3'];
$w3=$row['w3'];
$cell7=$row['cell7'];
$address5=$row['address5'];
$pyschiatrist=$row['pyschiatrist'];
$phh4=$row['phh4'];
$w4=$row['w4'];
$cell4=$row['cell4'];
$parole=$row['parole'];
$ph1=$row['ph1'];
$fax=$row['fax'];
$member_pcp=$row['member_pcp'];
$ph2=$row['ph2'];
$fax1=$row['fax1'];
$school=$row['school'];
$ph3=$row['ph3'];
$fax2=$row['fax2'];
$pract=$row['pract'];
$ph5=$row['ph5'];
$fax4=$row['fax4'];
$prim=$row['prim'];
$ph6=$row['ph6'];
$e=$row['e'];
$fax5=$row['fax5'];
$name3=$row['name3'];
$eds_id=$row['eds_id'];



}

$mpdf->WriteHTML('
<h3><center>TRUE HAND BEHAVIORAL AGENCY</center></h3>
<h3>FACE SHEET </h3>

<p><b>Revised Date:</b>'.$revisedate.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Print Date:</b>'.$printdate.'</p>
<p><b>Case Manager:</b>'.$casemanager.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Title:</b>'.$title.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Site:</b>'.$site.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Phone:</b>'.$phonenumber.'</p>

<p><b>Resident Name:</b>'.$residentname.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>SSN:</b>'.$ssn.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Gender:</b>'.$gender.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>DOB:</b>'.$dob.'</p>
<h3>Alternate AHCCCS**** </h3>
<p><b>Name:</b>'.$name.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>SSN:</b>'.$ssn1.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Gender:</b>'.$gender1.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>DOB:</b>'.$dob2.'</p>

<p><b>Address:</b>'.$address.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Apt:</b>'.$apt.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Az:</b>'.$az.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Phone:</b>'.$phone2.'</p>

<p><b>AKA:</b>'.$aka.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Intake Date:</b>'.$intakedate.'</p>

<p><b>Prim Language:</b>'.$printlanguage.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Ethn:</b>'.$ethn.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Marital Status:</b>'.$status.'</p>

<p><b>Hair Color:</b>'.$haircolor.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Eye Color:</b>'.$eyecolor.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Weight:</b>'.$weight.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Height:</b>'.$height.'</p>

<p><b>Identifying Marks</b>:'.$marks.'</p>

<p><b>Phase:</b>'.$phase.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Diagnosis:</b>'.$diagnosis.'</p>

<p><b>Legal/MH Status:</b>'.$mh_status.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>COT DATE:</b>'.$cotdate.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>To:</b>'.$cotto.' </p>


<p><b>Need Special Asst</b>:'.$needasst.'</p>

<p><b>Advance Directive:</b>'.$directive.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Date Executed:</b>'.$executed.'</p>

<p><b>Last Hosp. Date:</b>'.$last_hosp.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Hospital Name:</b>'.$hosp_name.'</p>

<b>Medication Allergies/ Adverse Reactions: </b><br>
'.$reactions.'

<p><b>Insurance:</b>'.$insurance.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Policy#:</b>'.$policy.'</p>

<p><b>Health Plan:</b>'.$healthplan.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Health ID:</b>'.$healthid.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>PH#:</b>'.$ph.' </p>

<p><b>AHCCCS ID:</b>'.$ahcc_id.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Elig Status:</b>'.$eligstatus.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Eff From:</b>'.$effrom.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>To:</b>'.$effto.'</p>

<p><b>Copay Percentage:</b>'.$copay_percentage.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Copay Category:</b>'.$copay_category.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>djusted Monthly Income:</b>'.$monthly_income.'</p>

<p><b>Member Parent:</b>'.$member_parent.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>PH#h:</b>'.$phh.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>W:</b>'.$w.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cell:</b>'.$cell.'</p>

<p><b>Address</b>:'.$addresses.'</p>

<p><b>Mbr.Guardian:</b>'.$guardian.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>PH#h:</b>'.$phh1.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>W:</b>'.$w1.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cell:</b>'.$cell1.'</p>

<p><b>Address</b>:'.$address2.'</p>

<p><b>Emerg. Contact:</b>'.$emerg_contact.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>PH#h:</b>'.$phh2.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>W:</b>'.$w2.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cell:</b>'.$cell3.'</p>

<p><b>Address</b>:'.$address4.'</p>

<p><b>Design Rep:</b>'.$designrep.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>PH#h:</b>'.$phh3.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>W:</b>'.$w3.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cell:</b>'.$cell7.'</p>

<p><b>Address</b>:'.$address5.'</p>

<p><b>Psychiatrist:</b>'.$pyschiatrist.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>PH#h:</b>'.$phh4.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>e:</b>'.$w4.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cell:</b>'.$cell4.'</p>
<p><b>Prob/Parole:</b>'.$parole.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Ph:</b>'.$ph1.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Fax:</b>'.$fax.' </p>

<p><b>Member PCP:</b>'.$member_pcp.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Ph:</b>'.$ph2.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Fax:</b>'.$fax1.' </p>

<p><b>Member School:</b>'.$school.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Ph:</b>'.$ph3.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Fax:</b>'.$fax2.' </p>

<p><b>Nurse Pract:</b>'.$pract.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Ph:</b>'.$ph5.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Fax:</b>'.$fax4.' </p>

<p><b>Prim Provider:</b>'.$prim.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Ph:</b>'.$ph6.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>e:</b>'.$e.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Fax:</b>'.$fax5.'</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Name:</b>'.$name3.'</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>EDS ID:</b>'.$eds_id.'</p>
');
$mpdf->Output();

?>