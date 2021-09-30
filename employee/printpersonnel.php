<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf();


$id=$_GET['id'];
$sel=$conn->query("SELECT * from  personnelorientation where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {

$employeename=$row['employeename'];
$date=date("m-d-Y", strtotime($row['date']));
$firstdate=date("m-d-Y", strtotime($row['firstdate']));



$personelead=$row['personelead'];
$personelcomments=$row['personelcomments'];
$personelinitials=$row['personelinitials'];

$residentlead=$row['residentlead'];
$residentcomments=$row['residentcomments'];
$residentinitials=$row['residentinitials'];

$leadfile=$row['leadfile'];
$filecomments=$row['filecomments'];
$fileinitials=$row['fileinitials'];


$joblead=$row['joblead'];
$jobcomments=$row['jobcomments'];
$jobinitials=$row['jobinitials'];


$leadcode=$row['leadcode'];
$codecomments=$row['codecomments'];
$codeinitials=$row['codeinitials'];

$employeelead=$row['employeelead'];
$employeecomments=$row['employeecomments'];
$employeeinitials=$row['employeeinitials'];

$pathlead=$row['pathlead'];
$pathcomments=$row['pathcomments'];
$employeepath=$row['employeepath'];

$firelead=$row['firelead'];
$firecomments=$row['firecomments'];
$fireinitials=$row['fireinitials'];

$crisislead=$row['crisislead'];
$crisiscomments=$row['crisiscomments'];
$crisisinitials=$row['crisisinitials'];


$neglectlead=$row['neglectlead'];
$neglectcomments=$row['neglectcomments'];
$neglectinitials=$row['neglectinitials'];


$policieslead=$row['policieslead'];
$policiescomments=$row['policiescomments'];
$policiesinitials=$row['policiesinitials'];


$houselead=$row['houselead'];
$housecomments=$row['housecomments'];
$houseinitials=$row['houseinitials'];



$rightlead=$row['rightlead'];
$rightcomments=$row['rightcomments'];
$rightinitials=$row['rightinitials'];


$protectionlead=$row['protectionlead'];
$protectioncomments=$row['protectioncomments'];
$protectioninitials=$row['protectioninitials'];



$timelead=$row['timelead'];
$timecomments=$row['timecomments'];
$timeinitials=$row['timeinitials'];


$recordslead=$row['recordslead'];
$recordcomments=$row['recordcomments'];
$recordinitials=$row['recordinitials'];
$clinicalsupervisor=$row['clinicalsupervisor'];
$clinicalsupervisorsign=$row['clinicalsupervisorsign'];





}

$mpdf->WriteHTML('
<h3><center>TRUE HAND BEHAVIORAL AGENCY</center></h3>
<h3>Personnel Orientation </h3>
<p>The topics covered during your orientation are designed to acquaint you with True Hand Behavioral Agency, its personnel, residents, policies, procedures, routines, the surrounding area, and other related procedures to ensure the highest quality of care for residents within a safe and responsive environment. 
 </p>

<p>
<p><b> Enployee Name: </b> '.$employeename.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Date of Hire:</b>'.$date.' </p>
<b> First Date Providing Behavioral Services: </b> '.$firstdate.'
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%"><b>Subject</b></td>
    <td style="width:15%"><b>Lead Person</b></td>
    <td style="width:25%"><b>Comments(include methods and hours applied) </b></td>
    <td style="width:20%"><b>Employee Initials</b></td>
   
  </tr>
  <tr>
    <td style="width:20%">Personnel Introductions </td>
    <td style="width:15%">'.$personelead.'</td>
    <td style="width:25%">'.$personelcomments.'</td>
    <td style="width:20%">'.$personelinitials.'</td>

  </tr>
  <tr>
    <td style="width:20%">Resident Introductions</td>
    <td style="width:15%">'.$residentlead.'</td>
    <td style="width:25%">'.$residentcomments.'</td>
    <td style="width:20%">'.$residentinitials.'</td>
  
  </tr>
  <tr>
    <td style="width:20%">Personnel File</td>
    <td style="width:15%">'.$leadfile.'</td>
    <td style="width:25%">'.$filecomments.'</td>
    <td style="width:20%">'.$fileinitials.'</td>

  </tr>
  <tr>
    <td style="width:20%">Job Description </td>
    <td style="width:15%">'.$joblead.'</td>
    <td style="width:25%">'.$jobcomments.'</td>
    <td style="width:20%">'.$jobinitials.'</td>

  </tr>
  <tr>
    <td style="width:20%">Code of Conduct</td>
    <td style="width:15%">'.$leadcode.'</td>
    <td style="width:25%">'.$codecomments.'</td>
    <td style="width:20%">'.$codeinitials.'</td>

  </tr>
  <tr>
    <td style="width:20%">Employee Competencies </td>
    <td style="width:15%">'.$employeelead.'</td>
    <td style="width:25%">'.$employeecomments.'</td>
    <td style="width:20%">'.$employeeinitials.'</td>
  </tr>
  <tr>
    <td style="width:20%">Evacuation Path</td>
    <td style="width:15%">'.$pathlead.'</td>
    <td style="width:25%">'.$pathcomments.'</td>
    <td style="width:20%">'.$employeepath.'</td>

  </tr>
  <tr>
    <td style="width:20%">Fire, Disaster, Hazard, & Medical Emergency Procedures</td>
    <td style="width:15%">'.$firelead.'</td>
    <td style="width:25%">'.$firecomments.'</td>
    <td style="width:20%">'.$fireinitials.'</td>
  </tr>
  <tr>
    <td style="width:20%">Responding to a Resident in a Crisis Situation </td>
    <td style="width:15%">'.$crisislead.'</td>
    <td style="width:25%">'.$crisiscomments.'</td>
    <td style="width:20%">'.$crisisinitials.'</td>
  </tr>
  <tr>
    <td style="width:20%">Immediate Reporting of Abuse, Neglect, Exploitation, Violation of Residents Rights</td>
    <td style="width:15%">'.$neglectlead.'</td>
    <td style="width:25%">'.$neglectcomments.'</td>
    <td style="width:20%">'.$neglectinitials.'</td>
  </tr>
  <tr>
    <td style="width:20%">Policies and ln Procedures </td>
    <td style="width:15%">'.$policieslead.'</td>
    <td style="width:25%">'.$policiescomments.'</td>
    <td style="width:20%">'.$policiesinitials.'</td>
  </tr>
  <tr>
    <td style="width:20%">House Rules</td>
    <td style="width:15%">'.$houselead.'</td>
    <td style="width:25%">'.$housecomments.'</td>
    <td style="width:20%">'.$houseinitials.'</td>
  </tr>
  <tr>
    <td style="width:20%"> Resident Rights</td>
    <td style="width:15%">'.$rightlead.'</td>
    <td style="width:25%">'.$rightcomments.'</td>
    <td style="width:20%">'.$rightinitials.'</td>
  </tr>
  <tr>
    <td style="width:20%">Resident Records:Location and 
Protection </td>
    <td style="width:15%">'.$protectionlead.'</td>
    <td style="width:25%">'.$protectioncomments.'</td>
    <td style="width:20%">'.$protectioninitials.'</td>
  </tr>
  <tr>
    <td style="width:20%">Work Schedules/ Time Sheets </td>
    <td style="width:15%">'.$timelead.'</td>
    <td style="width:25%">'.$timecomments.'</td>
    <td style="width:20%">'.$timeinitials.'</td>
  </tr>
  <tr>
    <td style="width:20%">Resident Records </td>
    <td style="width:15%">'.$recordslead.'</td>
    <td style="width:25%">'.$recordcomments.'</td>
    <td style="width:20%">'.$recordinitials.'</td>
  </tr>
</table>
<p><b>Director/Clinical Supervisor:</b>'.$clinicalsupervisor.'</p><BR>
<p><b>Director/Clinical Supervisor Signature/Date :</b><img src="./../signatures/'.$clinicalsupervisorsign.'" width="200"/></p>



<p>
');
$mpdf->Output();

?>