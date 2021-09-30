<?php
include './../../connection.php'; 
require_once __DIR__ . './../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$id=$_GET['id'];
$sel=$conn->query("SELECT * from groupactivity where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {

$residentname=$row['clientinfo'];
$date1=date("m-d-Y", strtotime($row['date1']));
$time1=$row['time1'];
$todaytopic=$row['todaytopic'];
$behaviour=$row['behaviour'];
$feelings=$row['feelings'];
$goals=$row['goals'];
$comments=$row['comments'];
$staffname=$row['staffname'];
$staffSignature=$row['staffSignature'];
$date2=date("m-d-Y", strtotime($row['date2']));



}

$mpdf->WriteHTML('
<h3><center>TRUE HAND BEHAVIORAL AGANECY</center></h3>
<h3><center> Group activity note Form</center></h3>
<h3><center>   Addiction Education</center></h3>
<br>
<br>

<p><b>Resident name:</b>'.$residentname.'</p>
<p><b>Date:</b>'.$date1.'</p>
<p><b> Time</b>'.$time1.'</p>
<p><b> Today’s Topic:</b>'.$todaytopic.'</p>
<p><b>Behavior (Present or Previous)</b>'.$behaviour.'</p>
<p><b>Feelings / Resident Response:</b>'.$feelings.'</p>
<p><b>Goal:</b> The therapeutic purposes of this Group session for the client is to understand '.$goals.'</p>
<p><b>Comments / Resident Contribution</b> '.$comments.'</p>
<br><br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%"><b>Staff Name</b>'.$staffname.'</td>
    <td style="width:20%"><b>Signature</b> <img src="./../signatures/'.$staffSignature.'" width="200"/></td>
     <td style="width:20%"><b>Date</b>'.$date2.'</td>

  </tr> 
  

</table>


<p>
');
$mpdf->Output();

?>