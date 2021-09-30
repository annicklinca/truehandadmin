<?php
include '../connection.php';

if (isset($_GET['delabout'])){
	$del_orient=$_GET['delabout'];
	$del_quer=mysqli_query($conn,"DELETE FROM about WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
        header("location:about.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:about.php");
    }
}


if (isset($_GET['delservice'])){
	$del_orient=$_GET['delservice'];
	$del_quer=mysqli_query($conn,"DELETE FROM services WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:service.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:service.php");
    }
}


if (isset($_GET['delgallery'])){
	$del_orient=$_GET['delgallery'];
	$del_quer=mysqli_query($conn,"DELETE FROM gallery WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('  Deleted! Successfully!')</script>";   
        header("location:gallery.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete  failed!')</script>
        <?php
        header("location:gallery.php");
    }
}


if (isset($_GET['delcareer'])){
	$del_orient=$_GET['delcareer'];
	$del_quer=mysqli_query($conn,"DELETE FROM career WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('  Deleted! Successfully!')</script>";   
        header("location:career.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete  failed!')</script>
        <?php
        header("location:career.php");
    }
}

if (isset($_GET['delcontact'])){
	$del_orient=$_GET['delcontact'];
	$del_quer=mysqli_query($conn,"DELETE FROM contact WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('  Deleted! Successfully!')</script>";   
        header("location:contact.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete  failed!')</script>
        <?php
        header("location:contact.php");
    }
}


if (isset($_GET['delmessage'])){
	$del_orient=$_GET['delmessage'];
	$del_quer=mysqli_query($conn,"DELETE FROM messages WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('  Deleted! Successfully!')</script>";   
        header("location:message.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete  failed!')</script>
        <?php
        header("location:message.php");
    }
}

if (isset($_GET['delcontact'])){
	$del_orient=$_GET['delcontact'];
	$del_quer=mysqli_query($conn,"DELETE FROM contact WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('  Deleted! Successfully!')</script>";   
        header("location:contact.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete  failed!')</script>
        <?php
        header("location:contact.php");
    }
}

if (isset($_GET['delhome'])){
	$del_orient=$_GET['delhome'];
	$del_quer=mysqli_query($conn,"DELETE FROM home WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('  Deleted! Successfully!')</script>";   
        header("location:home.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete  failed!')</script>
        <?php
        header("location:home.php");
    }
}

if (isset($_GET['deluser'])){
	$del_orient=$_GET['deluser'];
	$del_quer=mysqli_query($conn,"DELETE FROM admin WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('  Deleted! Successfully!')</script>";   
        header("location:user.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete  failed!')</script>
        <?php
        header("location:user.php");
    }
}

if (isset($_GET['delclient'])){
	$del_orient=$_GET['delclient'];
	$del_quer=mysqli_query($conn,"DELETE FROM clients WHERE id='$del_orient' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert('Deleted! Successfully!')</script>";   
        header("location:addresident.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:addresident.php");
    }
}