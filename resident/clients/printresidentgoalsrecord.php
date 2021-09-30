<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from residentgoalsrecord where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
     $Name=$row['Name'];
     $WeekBeginning=$row['WeekBeginning'];
     $Goal=$row['Goal'];
        $Goals=explode (",",strval($Goal));
     $Mon=$row['Mon'];
        $Mons=explode (",",strval($Mon));
     $Tue=$row['Tue'];
        $Tues=explode (",",strval($Tue));
     $Wed=$row['Wed'];
        $Weds=explode (",",strval($Wed));
     $Thur=$row['Thur'];
        $Thurs=explode (",",strval($Thur));
     $Fri=$row['Fri'];
        $Fris=explode (",",strval($Fri));
     $Sat=$row['Sat'];
        $Sats=explode (",",strval($Sat));
     $Sun=$row['Sun'];
        $Suns=explode (",",strval($Sun));


}

$html='
<h2>Monthly Activity Form</h2>
<br>
<table border="0" style="width:100%; border-collapse: collapse;">
  <tr>
    <td style="width:50%">Name:  <b>'.$Name.'</b></td>
    <td style="width:50%">Week Beginning: <b>'.$WeekBeginning.'</td>
  </tr> 
</table><br>
<h4>One-on-one Activities:</h4>
<table border="1" style="width:100%; border-collapse: collapse;">
    <tr>
      <td >Goal</b></td>
      <td >Mon</b></td>
      <td >Tue</b></td>
      <td >Wed</b></td>
      <td >Thur</b></td>
      <td >Fri</b></td>
      <td >Sat</b></td>
      <td >Sun</b></td>
    </tr>
  ';
  foreach($Goals as $tablesIndex => $Goalsone) {
    $html .='
    <tr>
      <td ><b>'.$Goalsone.'</b></td>
      <td ><b>'.$Mons[$tablesIndex].'</b></td>
      <td ><b>'.$Tues[$tablesIndex].'</b></td>
      <td ><b>'.$Weds[$tablesIndex].'</b></td>
      <td ><b>'.$Thurs[$tablesIndex].'</b></td>
      <td ><b>'.$Fris[$tablesIndex].'</b></td>
      <td ><b>'.$Sats[$tablesIndex].'</b></td>
      <td ><b>'.$Suns[$tablesIndex].'</b></td>
    </tr>
  ';
  }
  $html .='
</table><br>
  
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>