<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printmoneylog'];
$sel=$conn->query("SELECT * from moneylog where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$resident=$row['resident'];
$residents=explode (",",strval($resident));
$personnel=$row['personnel'];
$personnels=explode (",",strval($personnel));
$datelog=$row['datelog'];
$date_log=explode (",",strval($datelog));
$allowamount=$row['allowamount'];
$allow_amount=explode (",",strval($allowamount));
$clothingamount=$row['clothingamount'];
$clothing_amount=explode (",",strval($clothingamount));
$personalamount=$row['personalamount'];
$personal_amount=explode (",",strval($personalamount));

}
$html='
<h2> Money Log </h2>

<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
    <th >Resident Signature</th>
    <th >Personnel Signature</th>
    <th >Date</th>
    <th >Allowance Amount</th>
    <th >Clothing Amount</th>
    <th >Personal Amount</th>
  </tr>';
 foreach($residents as $tablesIndex => $residentss) {
    $html .='
  <tr>
    <td>'.$residentss.'</td>
    <td>'.$personnels[$tablesIndex].'</td>
    <td>'.$date_log[$tablesIndex].'</td>
    <td>'.$allow_amount[$tablesIndex].'</td>
    <td>'.$clothing_amount[$tablesIndex].'</td>
    <td>'.$personal_amount[$tablesIndex].'</td>
  </tr>';
  }
  $html .='
</table>
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>