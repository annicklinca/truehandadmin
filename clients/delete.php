<?php 
include '../../connection.php';
if (isset($_GET['delconfidentialitystatement'])){
	$del_id=$_GET['delconfidentialitystatement'];
	$del_quer=mysqli_query($conn,"DELETE FROM confidentialitystatement WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:confidentialitystatement.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}

if (isset($_GET['delpersonnel'])){
	$del_id=$_GET['delpersonnel'];
	$del_quer=mysqli_query($conn,"DELETE FROM personnelorientation WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:personnelorientation.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}

if (isset($_GET['delproceduresreview'])){
	$del_id=$_GET['delproceduresreview'];
	$del_quer=mysqli_query($conn,"DELETE FROM proceduresreview WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:proceduresreview.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}

if (isset($_GET['delreportingabuse'])){
	$del_id=$_GET['delreportingabuse'];
	$del_quer=mysqli_query($conn,"DELETE FROM reportingabuse WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:reportingabuse.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}
if (isset($_GET['delquarterlyreview'])){
	$del_id=$_GET['delquarterlyreview'];
	$del_quer=mysqli_query($conn,"DELETE FROM quarterlyreview WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:quarterlyreview.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}
if (isset($_GET['delverificationknowledgeskills'])){
	$del_id=$_GET['delverificationknowledgeskills'];
	$del_quer=mysqli_query($conn,"DELETE FROM verificationknowledgeskills WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:verificationknowledgeskills.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}
if (isset($_GET['deltreatmentplan'])){
	$del_id=$_GET['deltreatmentplan'];
	$del_quer=mysqli_query($conn,"DELETE FROM treatmentplan WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:treatmentplan.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}

if (isset($_GET['delmedication'])){
    $del_id=$_GET['delmedication'];
    $del_quer=mysqli_query($conn,"DELETE FROM medication WHERE id='$del_id' ");     
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:medication.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}
if (isset($_GET['deldischargesummary'])){
	$del_id=$_GET['deldischargesummary'];
	$del_quer=mysqli_query($conn,"DELETE FROM dischargesummary WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:dischargesummary.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}
if (isset($_GET['delpersonnel'])){
    $del_id=$_GET['delpersonnel'];
    $del_quer=mysqli_query($conn,"DELETE FROM personnel_information WHERE id='$del_id' ");     
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:personnel_info.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}

if (isset($_GET['delpremployment'])){
    $del_id=$_GET['delpremployment'];
    $del_quer=mysqli_query($conn,"DELETE FROM pre_employment WHERE id='$del_id' ");     
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:premployment.php");
    }
    else {
        ?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}

if (isset($_GET['delintakeassessment'])){
    $del_id=$_GET['delintakeassessment'];
    $del_quer=mysqli_query($conn,"DELETE FROM intakeassessment WHERE id='$del_id' ");     
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:intakeassessment.php");
    }
    else {?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}
if (isset($_GET['id'])){
    $del_id=$_GET['id'];
    $del_quer=mysqli_query($conn,"DELETE FROM facesheet WHERE id='$del_id' ");     
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:facesheet.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}

if (isset($_GET['delconsenttreatment'])){
    $del_id=$_GET['delconsenttreatment'];
    $del_quer=mysqli_query($conn,"DELETE FROM consenttreatment WHERE id='$del_id' ");     
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:consenttreatment.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}

if (isset($_GET['delorientation'])){
    $del_orient=$_GET['delorientation'];
    $del_quer=mysqli_query($conn,"DELETE FROM orientationdocumentation WHERE id='$del_orient' ");    
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('Orientation Document Deleted! Successfully!')</script>";   
        header("location:orientationdoc.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete Orientation failed!')</script>
        <?php
        header("location:orientationdocumentation.php");
    }
}

if (isset($_GET['delreciept'])){
    $del_rec=$_GET['delreciept'];
    $del_quer=mysqli_query($conn,"DELETE FROM recieptinfomation WHERE id='$del_rec' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('reciept of Infomation Deleted! Successfully!')</script>";   
        header("location:receiptinformation.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete reciept of infomation failed!')</script>
        <?php
        header("location:receiptinformation.php");
    }
}

if (isset($_GET['delreleaseinformation'])){
    $del_r=$_GET['delreleaseinformation'];
    $del_quer=mysqli_query($conn,"DELETE FROM releaseinformation WHERE id='$del_r' ");   
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('releaseinformation Deleted! Successfully!')</script>";   
        header("location:releaseinformation.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete releaseinformation failed!')</script>
        <?php
        header("location:releaseinformation.php");
    }
}

if (isset($_GET['delgrievanceprocedures'])){
    $del_r=$_GET['delgrievanceprocedures'];
    $del_quer=mysqli_query($conn,"DELETE FROM grievanceprocedures WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('grievance procedures Deleted! Successfully!')</script>";   
        header("location:grievanceprocedure.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete grievance procedures failed!')</script>
        <?php
        header("location:grievanceprocedure.php");
    }
}

if (isset($_GET['delresidence'])){
    $del_r=$_GET['delresidence'];
    $del_quer=mysqli_query($conn,"DELETE FROM residence WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('Residency Deleted! Successfully!')</script>";   
        header("location:residence.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete Residency failed!')</script>
        <?php
        header("location:residence.php");
    }
}

if (isset($_GET['delnotification'])){
    $del_r=$_GET['delnotification'];
    $del_quer=mysqli_query($conn,"DELETE FROM noticationfees WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('Notication Deleted! Successfully!')</script>";   
        header("location:notificationfees.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete Notication failed!')</script>
        <?php
        header("location:notificationfees.php");
    }
}

if (isset($_GET['delwarning'])){
    $del_r=$_GET['delwarning'];
    $del_quer=mysqli_query($conn,"DELETE FROM warning WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('warning Deleted! Successfully!')</script>";   
        header("location:warningnotification.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete warning failed!')</script>
        <?php
        header("location:warningnotification.php");
    }
}

if (isset($_GET['delmedicalrecordsaccess'])){
    $del_r=$_GET['delmedicalrecordsaccess'];
    $del_quer=mysqli_query($conn,"DELETE FROM medicalrecordsaccess WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('warning Deleted! Successfully!')</script>";   
        header("location:medicalrecordsaccess.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete warning failed!')</script>
        <?php
        header("location:medicalrecordsaccess.php");
    }
}
if (isset($_GET['delcontactlog'])){
    $del_r=$_GET['delcontactlog'];
    $del_quer=mysqli_query($conn,"DELETE FROM contactlog WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('warning Deleted! Successfully!')</script>";   
        header("location:contactlog.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete warning failed!')</script>
        <?php
        header("location:contactlog.php");
    }
}

if (isset($_GET['delmonthlyactivity'])){
    $del_r=$_GET['delmonthlyactivity'];
    $del_quer=mysqli_query($conn,"DELETE FROM monthlyactivity WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('warning Deleted! Successfully!')</script>";   
        header("location:monthlyactivity.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete warning failed!')</script>
        <?php
        header("location:medicalrecordsaccess.php");
    }
}

if (isset($_GET['delmedicalorders'])){
    $del_r=$_GET['delmedicalorders'];
    $del_quer=mysqli_query($conn,"DELETE FROM medicalorders WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('warning Deleted! Successfully!')</script>";   
        header("location:premedicalorders.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete warning failed!')</script>
        <?php
        header("location:monthlyactivity.php");
    }
}

if (isset($_GET['delresidentgoalsrecord'])){
    $del_r=$_GET['delresidentgoalsrecord'];
    $del_quer=mysqli_query($conn,"DELETE FROM residentgoalsrecord WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('warning Deleted! Successfully!')</script>";   
        header("location:residentgoalsrecord.php");
    }
    else {     
        ?>
        <script type="text/javascript">alert('Delete warning failed!')</script>
        <?php
        header("location:residentgoalsrecord.php");
    }
}

if (isset($_GET['delmoneylog'])){
    $del_r=$_GET['delmoneylog'];
    $del_quer=mysqli_query($conn,"DELETE FROM moneylog WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('moneylog Deleted! Successfully!')</script>";   
        header("location:moneylog.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete moneylog failed!')</script>
        <?php
        header("location:moneylog.php");
    }
}

if (isset($_GET['delstatus'])){
    $del_r=$_GET['delstatus'];
    $del_quer=mysqli_query($conn,"DELETE FROM minimentalstatus WHERE id='$del_r' ");  
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('mini mental Deleted! Successfully!')</script>";   
        header("location:minimentalstatus.php");
    }
    else {
        
        ?>
        <script type="text/javascript">alert('Delete mini mental failed!')</script>
        <?php
        header("location:minimentalstatus.php");
    }
}
?>