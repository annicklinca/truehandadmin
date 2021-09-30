<?php 
include '../../connection.php';
if (isset($_GET['deldischargesummary'])){
	$del_id=$_GET['deldischargesummary'];
	$del_quer=mysqli_query($conn,"DELETE FROM fileuploaded WHERE id='$del_id' ");	 
    if ($del_quer) {
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>"; 
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        echo mysqli_error($conn);
    }
}
?>