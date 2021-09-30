<?php

include './../../../connection.php'; 
require_once __DIR__ . '/../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$user_id=$user_id;
$id=$_GET['id'];
$sel=$conn->query("SELECT * from medication where id='$id' order by id desc ");
while ($row=mysqli_fetch_array($sel)) {
$per_name=$row['per_name'];
$prescribed=$row['prescribed'];
$prescribed_sucess=$row['prescribed_sucess'];
$reference=$row['reference'];
$reference_sucess=$row['reference_sucess'];
$explain1=$row['explain1'];
$explain_sucess=$row['explain_sucess'];
$procedure1=$row['procedure1'];
$procedure_success=$row['procedure_success'];
$verbalize=$row['verbalize'];
$verbalize_success=$row['verbalize_success'];
$medical=$row['medical'];
$medical_success=$row['medical_success'];
$symptom=$row['symptom'];
$symptom_success=$row['symptom_success'];
$demonstrate=$row['demonstrate'];
$demonstrate_success=$row['demonstrate_success'];
$safely=$row['safely'];
$safely_success=$row['safely_success'];
$document=$row['document'];
$document_sucess=$row['document_sucess'];
$compliance=$row['compliance'];
$compliance_success=$row['compliance_success'];
$refuses=$row['refuses'];
$refuse_success=$row['refuse_success'];
$contact=$row['contact'];
$contact_success=$row['contact_success'];
$proper=$row['proper'];
$proper_success=$row['proper_success'];
$manager_name=$row['manager_name'];
$trainer_name=$row['trainer_name'];
$dtraining=$row['dtraining'];
$time_training=$row['time_training'];
$med_signature=$row['med_signature'];
}

$mpdf->WriteHTML('
  <h3><center>TRUE HAND BEHAVIORAL AGENCY</center></h3>
<h5>Medication Management Training Checklist</h5>
<p>
Personnel Name:  '.$per_name.'
</p>
<table border="1" style="width:100%;border-collapse: collapse;">

  <tr>
    <th></th>
    <th style="width:50%"></th>
    <th>Written <br> Verbal <br> Visual</th>
    <th>CompletedSuccessfully <br> Yes &nbsp; No</th>
  </tr> 

   <tr>
   <td>1</td>
    <td style="width:50%">Demonstrates knowledge of medications commonly prescribed for residents with behavioral health issues by explaining the common benefits, side effects and adverse reactions of medication.</td>
    <td>'.$prescribed.'</td>
    <td>'.$prescribed_sucess.'</td>
  </tr> 

  <tr>
   <td>2</td>
    <td style="width:50%">Able to name a reference to obtain medication information, i.e. approved drug reference book.</td>
    <td>'.$reference.'</td>
    <td>'.$reference_sucess.'</td>
  </tr>

 <tr>
   <td>3</td>
    <td style="width:50%">Able to explain the difference between assisting in self-administration of medication, and medication administration.</td>
    <td>'.$explain1.'</td>
    <td>'.$explain_sucess.'</td>
  </tr>

  <tr>
   <td>4</td>
    <td style="width:50%">Able to explain procedure for procurement of medication from Pharmacy.</td>
    <td>'.$procedure1.'</td>
    <td>'.$procedure_success.'</td>
  </tr>

   <tr>
   <td>5</td>
    <td style="width:50%">Verbalize procedure for assisting a participant to self-medicate.</td>
    <td>'.$verbalize.'</td>
    <td>'.$verbalize_success.'</td>
  </tr>

    <tr>
   <td>6</td>
    <td style="width:50%">Understands the medical terminaology used in assisting in the self administration of medication.</td>
    <td>'.$medical.'</td>
    <td>'.$medical_success.'</td>
  </tr>

    <tr>
   <td>7</td>
    <td style="width:50%">Verbalizes knowledge of signs, symptoms, and indicators of toxicity of overdose.</td>
    <td>'.$symptom.'</td>
    <td>'.$symptom_success.'</td>
  </tr>

    <tr>
   <td>8</td>
    <td style="width:50%">Able to verbalize and demonstrate proper use of medication-related forms.</td>
    <td>'.$demonstrate.'</td>
    <td>'.$demonstrate_success.'</td>
  </tr>

   <tr>
   <td>9</td>
    <td style="width:50%">Verbalize proper procedure for storing medication safely.</td>
    <td>'.$safely.'</td>
    <td>'.$safely_success.'</td>
  </tr>

    <tr>
   <td>10</td>
    <td style="width:50%">Verbalizes understanding of the proper usage of PRN medication and documentation.</td>
    <td>'.$document.'</td>
    <td>'.$document_sucess.'</td>
  </tr>

    <tr>
   <td>11</td>
    <td style="width:50%">Able to explain procedure for reporting non-compliance, medication errors and adverse side effects.</td>
    <td>'.$compliance.'</td>
    <td>'.$compliance_success.'</td>
  </tr>

  <tr>
   <td>12</td>
    <td style="width:50%">Explain procedure when resident refuses medication and the responsibilities to inform resident of potential outcome of non-compliance.</td>
    <td>'.$refuses.'</td>
    <td>'.$refuse_success.'</td>
  </tr>

   <tr>
   <td>13</td>
    <td style="width:50%">Able to verbalize knowledge of the signs & symptoms or circumstances indicating that resident should not take medication and appropriate contact for review and addressing the situation.</td>
    <td>'.$contact.'</td>
    <td>'.$contact_success.'</td>
  </tr>

   <tr>
   <td>14</td>
    <td style="width:50%">Verbalize knowledge of proper response to a medical emergency or Medication error.</td>
    <td>'.$proper.'</td>
    <td>'.$procedure_success.'</td>
  </tr>

 

</table>

  

</table>
<p>Manager Name: '.$manager_name.' &nbsp;&nbsp;&nbsp;&nbsp; Trainer Name: '.$trainer_name.'</p>
<p>Date Training: '.$dtraining.' &nbsp;&nbsp;&nbsp;&nbsp; Time (hmm): '.$time_training.'</p>
<p>Signature '.$med_signature.'</p>

<p>
');
$mpdf->Output();

?>