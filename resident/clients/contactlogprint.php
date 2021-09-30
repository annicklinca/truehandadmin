<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printcontact'];
$sel=$conn->query("SELECT * from contactlog where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$resident_name=$row['resident_name'];
$dob=date("m-d-Y", strtotime($row['dob']));
$contactlogdate=date("m-d-Y", strtotime($row['contactlogdate']));
$contactlogsummary=$row['contactlogsummary'];
$contactloginitials=$row['contactloginitials'];
$resident_response=$row['resident_response'];


}

$mpdf->WriteHTML('
<h2> Contact Log </h2>
<p>Resident Name:&nbsp;  '.$resident_name.'  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Birth:'.$dob.'<p>

<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <th style="width:20%">Date</th>
     <th style="width:40%">Summary</th>
      <th style="width:40%">Staff Initials</th>
  </tr>
  <tr>
    <td>'.$contactlogdate.'</td>
    <td>'.$contactlogsummary.'</td>
    <td>'.$contactloginitials.'</td>

  </tr> 

   <tr>
    <td>'.$contactlogdate.'</td>
    <td>'.$contactlogsummary.'</td>
    <td>'.$contactloginitials.'</td>

  </tr> 
</table>
');
$mpdf->Output();

?>