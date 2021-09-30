<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from monthlyactivity where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
    $Name=$row['Name'];
    $Month=$row['Month'];

    $OneDate=$row['OneDate'];
      $OneDates=explode (",",strval($OneDate));
    $OneActivity=$row['OneActivity'];
      $OneActivitys=explode (",",strval($OneActivity));
    $OneStaff=$row['OneStaff'];
      $OneStaffs=explode (",",strval($OneStaff));

      $GuardianDate=$row['GuardianDate'];
        $GuardianDates=explode (",",strval($GuardianDate));
      $GuardianActivity=$row['GuardianActivity'];
        $GuardianActivitys=explode (",",strval($GuardianActivity));
      $GuardianStaff=$row['GuardianStaff'];
        $GuardianStaffs=explode (",",strval($GuardianStaff));

    $GroupDate=$row['OneDate'];
        $GroupDates=explode (",",strval($GroupDate));
    $GroupActivity=$row['OneActivity'];
        $GroupActivitys=explode (",",strval($GroupActivity));
    $GroupStaff=$row['OneStaff'];
        $GroupStaffs=explode (",",strval($GroupStaff));


}

$html='
<h2>Monthly Activity Form</h2>
<br>
<table border="0" style="width:100%; border-collapse: collapse;">
  <tr>
    <td style="width:50%">Name:  <b>'.$Name.'</b></td>
    <td style="width:50%">Month: <b>'.$Month.'</td>
  </tr> 
</table><br>
<h4>One-on-one Activities:</h4>
<table border="1" style="width:100%; border-collapse: collapse;">
    <tr>
      <td style="width:20%">Date</b></td>
      <td style="width:30%">Activity</td>
      <td style="width:30%">Staff</td>
    </tr>
  ';
  foreach($OneDates as $tablesIndex => $OneDatesone) {
    $html .='
    <tr>
      <td style="width:20%"><b>'.$OneDatesone.'</b></td>
      <td style="width:30%"><b>'.$OneActivitys[$tablesIndex].'</b></td>
      <td style="width:30%"><b>'.$OneStaffs[$tablesIndex].'</b></td>
    </tr>
  ';
  }
  $html .='
</table><br>
<h4>Family/Friends/Guardian Contacts:</h4>
<table border="1" style="width:100%; border-collapse: collapse;">
    <tr>
      <td style="width:20%">Date</b></td>
      <td style="width:30%">Activity</td>
      <td style="width:30%">Staff</td>
    </tr>
  ';
  foreach($GuardianDates as $tablesIndexx => $GuardianDatesone) {
    $html .='
    <tr>
      <td style="width:20%"><b>'.$GuardianDatesone.'</b></td>
      <td style="width:30%"><b>'.$GuardianActivitys[$tablesIndexx].'</b></td>
      <td style="width:30%"><b>'.$GuardianStaffs[$tablesIndexx].'</b></td>
    </tr>
  ';
  }
  $html .='
</table><br>
<h4>Group Activities:</h4>
<table border="1" style="width:100%; border-collapse: collapse;">
    <tr>
      <td style="width:20%">Date</b></td>
      <td style="width:30%">Activity</td>
      <td style="width:30%">Staff</td>
    </tr>
  ';
  foreach($GroupDates as $tablesIndex => $GroupDatesone) {
    $html .='
    <tr>
      <td style="width:20%"><b>'.$GroupDatesone.'</b></td>
      <td style="width:30%"><b>'.$GroupActivitys[$tablesIndex].'</b></td>
      <td style="width:30%"><b>'.$GroupStaffs[$tablesIndex].'</b></td>
    </tr>
  ';
  }
  $html .='
</table><br>
  
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>