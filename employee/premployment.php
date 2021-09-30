<?php
include 'nav.php';
$user_id=$user_id;

if (isset($_POST['submit'])){
    
    
     
    $per_name=$_POST['per_name'];
    $infiles=$_POST['infiles'];
    $exp_date=$_POST['exp_date'];
    $note=$_POST['note'];
    $infile1=$_POST['infile1'];
    $exp_date1=$_POST['exp_date1'];
    $note1=$_POST['note1'];
    $infile2=$_POST['infile2'];
    $exp_date2=$_POST['exp_date2'];
    $note2=$_POST['note2'];
    $infile3=$_POST['infile3'];
    $exp_date3=$_POST['exp_date3'];
    $note3=$_POST['note3'];
    $infile4=$_POST['infile4'];
    $exp_date4=$_POST['exp_date4'];
    $note4=$_POST['note4'];
    $infile5=$_POST['infile5'];
    $exp_date5=$_POST['exp_date5'];
    $note5=$_POST['note5'];
    $infile6=$_POST['infile6'];
    $exp_date6=$_POST['exp_date6'];
    $note6=$_POST['note6'];
    $infile7=$_POST['infile7'];
    $exp_date7=$_POST['exp_date7'];
    $note7=$_POST['note7'];
    $infile8=$_POST['infile8'];
    $exp_date8=$_POST['exp_date8'];
    $note8=$_POST['note8'];
    $infile9=$_POST['infile9'];
    $exp_date9=$_POST['exp_date9'];
    $note9=$_POST['note9'];
    $infile0=$_POST['infile0'];
    $exp_date0=$_POST['exp_date0'];
    $note0=$_POST['note0'];
    
    
 

    $sql=mysqli_query($conn,"INSERT INTO pre_employment VALUES ('',
        '$per_name',
        '$infiles',
        '$exp_date',
        '$note',
        '$infile1',
        '$exp_date1',
        '$note1',
        '$infile2',
        '$exp_date2',
        '$note2',
        '$infile3',
        '$exp_date3',
        '$note3',
        '$infile4',
        '$exp_date4',
        '$note4',
        '$infile5',
        '$exp_date5',
        '$note5',
        '$infile6',
        '$exp_date6',
        '$note6',
        '$infile7',
        '$exp_date7',
        '$note7',
        '$infile8',
        '$exp_date8',
        '$note8',
        '$infile9',
        '$exp_date9',
        '$note9',
        '$infile0',
        '$exp_date0',
        '$note0','','user_id' 
    )");
    if ($sql) {
        $successmessage .='New Personnel orientation saved, Successefully';	
    }
    else {
        $errormessage .='Add Personnel orientation failed!';       
    }    


}
if (isset($_POST['uploadfile'])){
       
    $target="../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='pre_employment';
    $fileCategory='employee';

    if (move_uploaded_file($_FILES['filename']['tmp_name'],$target)){
        $sql=mysqli_query($conn,"INSERT INTO fileuploaded VALUES ('','$fileName','$fileCategory','$file','$user_id')");
        if ($sql) {
            $successmessage .='Upload file Successefully';	
        }
        else {
            $errormessage .='Upload file failed!';	    
        }    
    }
    else{
        $errormessage .='Upload file failed! Try Again';
    }
}


?>
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <!-- <div class="page-header-title">
                                        <h5 class="m-b-10">Home</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Basic Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Navs & tabs</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!--[content section] start-->
                                <div class="col-sm-12">
                                    <h5>Documentation Required Prior to Starting Employment</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Documentation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Documentation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="file-tab" data-toggle="tab" href="#file" role="tab" aria-controls="file" aria-selected="false">All file uploaded</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <?php
                                                if ( isset($successmessage)) {
                                                    echo '
                                                        <div class="card borderless-card bg-success">
                                                            <div class="card-block success-breadcrumb">
                                                                <div class="breadcrumb-header">
                                                                    <span style="color:white;">'.$successmessage.'</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';
                                                }
                                                ?>
                                                <?php
                                                if ( isset($errormessage)) {
                                                  echo '
                                                      <div class="card borderless-card  bg-danger">
                                                          <div class="card-block danger-breadcrumb">
                                                              <div class="breadcrumb-header">
                                                                  <span style="color:white;">'.$errormessage.'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                       <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Personnel Name </label>
                                                            <input type="text" name="per_name" class="form-control form-control-normal"
                                                            placeholder="Enter personnel name">
                                                        </div>
                                                       
                                                    </div>
                                                    <h3>Documentation Required Prior to Starting Employment</h3>
                                                    <p>Prior to working with residents, personnel members must provide copies of the following documents to be included in the personnel file.  All copies are to follow this page.</p>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Driver’s License</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infiles" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Social Security Card</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile1" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date1" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note1" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>CPR Card</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile2" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date2" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note2" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>First Aid Card</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile3" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date3" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note3" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Finger Print Card/ Application</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile4" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date4" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note4" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Physical Examination</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile5" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date5" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note5" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Tuberculosis Test</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile6" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date6" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note6" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Orientation Checklist</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile7" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date7" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note7" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>
                                                  
                                                   
                                                  
                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Application for Employment</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile8" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date8" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note8" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Personnel Information</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile9" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date9" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note9" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Fed. & AZ:I-9, W-4 & A-4</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile0" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date0" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note0" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                    </div>
                                                   
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="submit" value="Add Documentation"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <input type="file" name="filename"
                                                            class="form-control form-control-capitalize"><br>
                                                            <input type="submit" name="uploadfile" value="upload file"
                                                            class="btn btn-success btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form> 
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class=" table-border-style">
                                                   <div class="table-responsive">
                                                        <table id="zero_config" class="table table-hover">
                                                      <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Personnel Name</th>
                                                            <th>Driver’s License Infile</th>
                                                            <th>Driver’s License date</th>
                                                           
                                                             <th>Driver’s License note</th>
                                                             <th>Social Security Card infile</th>
                                                            <th>Social Security Card date</th>
                                                            
                                                            <th>Social Security Card note</th>
                                                            <th>CPR Card infile</th>
                                                            <th>CPR Card date</th>
                                                            <th>CPR Card note</th>
                                                            <th>First Aid Card infile</th>
                                                            <th>First Aid Card date</th>
                                                            <th>First Aid Card note</th>
                                                            <th>Finger Print Card/ Application infile</th>
                                                            <th>Finger Print Card/ Application date</th>
                                                            <th>Finger Print Card/ Application note</th>
                                                            <th>Physical Examination infile</th>
                                                            <th>Physical Examination date</th>
                                                            <th>Physical Examination note</th>
                                                            <th>Tuberculosis Test infile</th>
                                                            <th>Tuberculosis Test date</th>
                                                            <th>Tuberculosis Test note</th>
                                                            <th>Orientation Checklist infile</th>
                                                            <th>Orientation Checklist date</th>
                                                            <th>Orientation Checklist note</th>
                                                            <th>Application for Employment infile</th>
                                                            <th>Application for Employment date</th>
                                                            <th>Application for Employment note</th>
                                                            <th>Personnel Information infile</th>
                                                            <th>Personnel Information date</th>
                                                            <th>Personnel Information note</th>
                                                            <th>Fed. & AZ: I-9, W-4 & A-4 infile</th>
                                                            <th>Fed. & AZ: I-9, W-4 & A-4 date</th>
                                                            <th>Fed. & AZ:I-9, W-4 & A-4 note</th>
                                                           
                                                            
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                   <?php
                                                        $sel=mysqli_query($conn,"SELECT * FROM pre_employment");
                                                        while ($row=mysqli_fetch_array($sel)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo $row['per_name']; ?></td>
                                                            <td><?php echo $row['infiles']; ?></td>
                                                            <td><?php echo $row['exp_date']; ?></td>
                                                            <td><?php echo $row['note']; ?></td>
                                                            <td><?php echo $row['infile1']; ?></td>
                                                            <td><?php echo $row['exp_date1']; ?></td>
                                                            <td><?php echo $row['note1']; ?></td>
                                                            <td><?php echo $row['infile2']; ?></td>
                                                            <td><?php echo $row['exp_date2']; ?></td>
                                                            <td><?php echo $row['note2']; ?></td>
                                                            <td><?php echo $row['infile3']; ?></td>
                                                            <td><?php echo $row['exp_date3']; ?></td>
                                                            <td><?php echo $row['note3']; ?></td>
                                                            <td><?php echo $row['infile4']; ?></td>
                                                            <td><?php echo $row['exp_date4']; ?></td>
                                                            <td><?php echo $row['note4']; ?></td>
                                                            <td><?php echo $row['infile5']; ?></td>
                                                            <td><?php echo $row['exp_date5']; ?></td>
                                                            <td><?php echo $row['note5']; ?></td>
                                                            <td><?php echo $row['infile6'] ; ?></td>
                                                            <td><?php echo $row['exp_date6'] ; ?></td>
                                                            <td><?php echo $row['note6'] ; ?></td>
                                                            <td><?php echo $row['infile7'] ; ?></td>
                                                            <td><?php echo $row['exp_date7'] ; ?></td>
                                                            <td><?php echo $row['note7'] ; ?></td>
                                                            <td><?php echo $row['infile8'] ; ?></td>
                                                            <td><?php echo $row['exp_date8'] ; ?></td>
                                                            <td><?php echo $row['note8'] ; ?></td>
                                                            <td><?php echo $row['infile9'] ; ?></td>
                                                            <td><?php echo $row['exp_date9'] ; ?></td>
                                                            <td><?php echo $row['note9'] ; ?></td>
                                                            <td><?php echo $row['infile0']; ?></td>
                                                            <td><?php echo $row['exp_date0']; ?></td>
                                                            <td><?php echo $row['note0']; ?></td>
                                                           
                                                          
                                                <td><a href="delete.php?delpremployment=<?php  echo $row['id'] ?>"><span class="btn btn-danger">Delete</span></a></td>
                                                <td><a href="premploymentupdate.php?updatepremloyment=<?php  echo $row['id'] ?>"><span class="btn btn-success">Update</span></a></td>
                                                <td><a class="btn btn-primary"  href="premploymentsign.php?id=<?php echo $row['id']; ?> "  id="red">Sign Now</a></td>
                                                <td><a href="premploymentprint.php?id=<?php  echo $row['id'] ?>"><span class="btn btn-primary">Print</span></a></td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="tab-pane fade" id="file" role="tabpanel" aria-labelledby="file-tab">
                                        <div class=" table-border-style">
                                                   <div class="table-responsive">
                                                        <table id="zero_config" class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>File Name</th>
                                                                    <th>FIle Category</th>
                                                                    <th>File</th>
                                                                    <th>Delete</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='pre_employment' AND user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['fileName'] ; ?></td>
                                                                    <td><?php echo $row['fileCategory'] ; ?></td>
                                                                    <td><a href="../fileuploaded/<?php echo $row['file'] ; ?>"><?php echo $row['file'] ; ?></a></td>
                                                                    <td><a class="btn btn-danger" href="deletefile.php?deldischargesummary=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this file.')" id="red">Delete</a></td>
                                                                </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <?php
include 'footer.php'
?>