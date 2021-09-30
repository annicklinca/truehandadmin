<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['printresidence'];
$sel=$conn->query("SELECT * from residence where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$representative=$row['representative'];
$resident=$row['resident'];
$day_admission=$row['day_admission'];
$date_admission=date("m-d-Y", strtotime($row['date_admission']));
$fees_house=$row['fees_house'];

}

$mpdf->WriteHTML('
<h3>RESIDENCY AGREEMENT</h3>
<p>
This agreement is made between TRUE HAND BEHAVIORAL AGENCY and '.$representative.' (resident or representative) for
'.$resident.' (resident’s name) on this '.$day_admission.' day .    Date of Admission: '.$date_admission.' 


</p>
<br>
<p>
<u>Monthly Fees and Service Provided </u><br>
The fees for housing and basic services are $'.$fees_house.' per month.  Basic services include the following: 
1.  A room with basic furnishings including single bed, storage space for clothing, private storage space for personal effects, window covers, and a bedside lamp. 
2.  Use of all common areas. 
3.  General housekeeping and linen and laundry service as needed. 
4.  Daily supervision 24 hours per day. 
5.  Three meals plus three snacks daily. 
6.  Monitoring of medications and assistance and/or administration of medications as directed in the service plan. 
7.  Supervision of activities of daily living (eating, bathing, dressing, etc.) as required. 
8.  Recreational activities and supplies including daily newspapers, current magazines, and other reading materials. 
9.  Physician coordination as required. 
10. Other arrangements as determined by the resident, the representative, and our family. 
The first month rent is due upon move in, and is not refundable and the next month’s payment will be pro-rated as necessary. In the event of a temporary absence from the home, ______% of all monthly fees shall continue if the resident wishes to retain his or her room. This agreement shall be on a month—to-month basis. The therapeutic home shall provide at least 30 day written notice prior to the effective date of any change in a fee or charge, except when a resident’s service needs change as documented in their service plan. 

Additional Services at Additional Costs 
1.  Service Plans (as required by the State OBHL Department) 
2.  Optional Beautician Services: (Haircuts, Permanent, Manicure, Pedicures, etc.) 
3.  Additional Health Care Professionals: (optional) 
o Podiatrist 
o On-Call Physician 
o Nursing Service 
o Others 

</p>
');
$mpdf->Output();

?>