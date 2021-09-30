<?php
include './../../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from personnel_information where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {

$first_name=$row['first_name'];
$last_name=$row['last_name'];
$mi1=$row['mi1'];
$street_address=$row['street_address'];
$appartment=$row['appartment'];
$city=$row['city'];
$state=$row['state'];
$zip_code=$row['zip_code'];
$home_phone=$row['home_phone'];
$alternate_phone=$row['alternate_phone'];
$email=$row['email'];
$security_no=$row['security_no'];
$birth_date=$row['birth_date'];
$marital_status=$row['marital_status'];
$spouse_name=$row['spouse_name'];
$spouse_emp=$row['spouse_emp'];
$spouse_phone=$row['spouse_phone'];
$title=$row['title'];
$personnel_id=$row['personnel_id'];
$supervisor=$row['supervisor'];
$department=$row['department'];
$work_location=$row['work_location'];
$email_address=$row['email_address'];
$work_phone=$row['work_phone'];
$cellphone=$row['cellphone'];
$start_date=$row['start_date'];
$salary=$row['salary'];
$zip_code=$row['zip_code'];
$home_phone=$row['home_phone'];
$alternate_phone=$row['alternate_phone'];
$email=$row['email'];
$security_no=$row['security_no'];
$birth_date=$row['birth_date'];
$marital_status=$row['marital_status'];
$spouse_name=$row['spouse_name'];
$spouse_emp=$row['spouse_emp'];
$spouse_phone=$row['spouse_phone'];
$title=$row['title'];
$personnel_id=$row['personnel_id'];
$first_name1=$row['first_name1'];
$last_name1=$row['last_name1'];
$mi2=$row['mi2'];
$street_address1=$row['street_address1'];
$appartment1=$row['appartment1'];
$city1=$row['city1'];
$state1=$row['state1'];
$zip_code1=$row['zip_code1'];
$home_phone1=$row['home_phone1'];
$alternate_phone1=$row['alternate_phone1'];
$relationship=$row['relationship'];

}

$mpdf->WriteHTML('
<h3 style="text-align:center;">TRUE HAND BEHAVIORAL AGENCY</h3>
<br><br>
<h4>Personnel Information</h4>

<p>
<table border="0" style="width:100%;border-collapse: collapse;">
<tr>
<td style="text-align:center;"><b>Personal Information</b></td>
</tr>
<br>
<br>
<tr>
<td><b>Fullname</b></td>
</tr>
<tr>
<td>'.$first_name.'<br><b>Last</b></td>
<td>'.$last_name.'<br><b>First</b></td>
<td>'.$mi1.'<br><b>M.I</b></td>
</tr>

<tr>
<td><b>Address</b></td>
</tr>
<tr>
<td>'.$street_address.'<br><b>Street Address</b></td>
<td></td>
<td>'.$appartment.'<br><b>Apartment/Unit #</b></td>
</tr>

<tr>
<td>'.$city.'<br><b>City</b></td>
<td>'.$state.'<br><b>State</b></td>
<td>'.$zip_code.'<br><b>Zip Code</b></td>
</tr>

<tr>
<td><b>Home Phone</b>&nbsp;&nbsp;&nbsp; '.$home_phone.'</td>
<td></td>
<td><b>Alternate Phone:</b>&nbsp;&nbsp;&nbsp; '.$alternate_phone.'</td>
</tr>

<tr>
<td><b>E-mail Address</b> &nbsp;&nbsp;&nbsp;'.$email.'</td>
</tr>

<tr>
<td><b>Social Security Number or Government ID</b>&nbsp;&nbsp;&nbsp; '.$security_no.'</td>
</tr>

<tr>
<td><b>Birth Date:</b> '.$birth_date.'</td>
<td></td>
<td><b>Marital Status</b> '.$marital_status.'</td>
</tr>
<tr>
<td><b>Spouses name</b>&nbsp;&nbsp;&nbsp; '.$spouse_name.' </td>
</tr>
<tr>
<td><b>Spouse’s Employer:</b>  '.$spouse_emp.'</td>
<td></td>
<td><b>Spouse’s Work Phone</b>'.$spouse_phone.'</td>
</tr>
<br>
<br>
<br>
<tr>
<td style="text-align:center;"><b>Job Information</b></td>
</tr>

<br>
<br>

<tr>
<td><b>Title</b>  '.$title.'</td>
<td></td>
<td><b>Personnel Id</b> '.$personnel_id.'</td>
</tr>

<tr>
<td><b>Supervisor</b>  '.$supervisor.'</td>
<td></td>
<td><b>Department</b> '.$department.'</td>
</tr>

<tr>
<td><b>Work Location</b>  '.$work_location.'</td>
<td></td>
<td><b>E-mail Address</b> '.$email_address.'</td>
</tr>

<tr>
<td><b>Work Phone</b>  '.$work_phone.'</td>
<td></td>
<td><b>Cell Phone</b> '.$cellphone.'</td>
</tr>

<tr>
<td><b>Start Date</b>  '.$start_date.'</td>
<td></td>
<td><b>Salary</b> '.$salary.'</td>
</tr>

<br>
<br>

<tr>
<td style="text-align:center;"><b>Emergency Contact Information</b></td>
</tr>

<tr>
<td><b>Fullname</b></td>
</tr>
<tr>
<td>'.$first_name1.'<br><b>Last</b></td>
<td>'.$last_name1.'<br><b>First</b></td>
<td>'.$mi2.'<br><b>M.I</b></td>
</tr>

<tr>
<td><b>Address</b></td>
</tr>
<tr>
<td>'.$street_address1.'<br><b>Street Address</b></td>
<td></td>
<td>'.$appartment1.'<br><b>Apartment/Unit #</b></td>
</tr>

<tr>
<td>'.$city1.'<br><b>City</b></td>
<td>'.$state1.'<br><b>State</b></td>
<td>'.$zip_code1.'<br><b>Zip Code</b></td>
</tr>

<tr>
<td><b>Home Phone</b>&nbsp;&nbsp;&nbsp; '.$home_phone1.'</td>
<td></td>
<td><b>Alternate Phone:</b>&nbsp;&nbsp;&nbsp; '.$alternate_phone1.'</td>
</tr>

<tr>
<td><b>Relationship</b>&nbsp;&nbsp; '.$relationship.'</td>
</tr>

</table>



<p>
');
$mpdf->Output();

?>