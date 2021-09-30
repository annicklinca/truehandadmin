<?php

include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printwarning'];
$sel=$conn->query("SELECT * from warning where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$name=$row['name'];
$date_incident=date("m-d-Y", strtotime($row['date_incident']));
$incident=$row['incident'];
$initials=$row['initials'];
$resident_response=$row['resident_response'];
$resident=$row['resident'];
$residentdate=date("m-d-Y", strtotime($row['residentdate']));
$director=$row['director'];
$directordate=date("m-d-Y", strtotime($row['directordate']));


}

$mpdf->WriteHTML('
<h2>Written Warning  </h2>
<h4>Offender Name:  '.$name.'</h4>
<p>
<b><i>
The safety and well-being of all residents, consumers and staff is a primary goal for management at TRUE HAND BEHAVIORAL AGENCY.  Therefore, any action taken by a resident or staff member that harms or endangers another resident or staff member cannot be tolerated.
</i></b>
</p>
<br>
<h4>Date of Incident: '.$date_incident.'</h4>
<h4> Incident:<br> '.$incident.'</h4>
<p>
I understand that if I repeat this behavior that I may be terminated from the .  Your case manager will be notified of  TRUE HAND BEHAVIORAL AGENCY his incident and the consequences of repeating it explained. Initials '.$initials.'

If I disagree with this warning or otherwise wish to respond I should do so in writing.	
</p>
<h4> Resident Response:<br> '.$resident_response.'</h4>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%">'.$resident.' <img src="./../signatures/'.$residentsign.'" width="200"/><br><b>Resident Signature</b></td>
    <td style="width:20%">'.$residentdate.'<br><b>Date</b><br></td>
  </tr>
  <tr>
    <td style="width:20%">'.$director.' <img src="./../signatures/'.$directorsign.'" width="200"/><br> <br><b>Agent Signature</b><br></td>
    <td style="width:20%">'.$directordate.'<br><b>Date</b><br></td>
  </tr> 
</table>
');
$mpdf->Output();

?>