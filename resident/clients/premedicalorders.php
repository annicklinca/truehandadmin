<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $mi1=$_POST['mi1'];
    $dob=$_POST['dob'];
    $medication_date=$_POST['medication_date'];
    $physician_name=$_POST['physician_name'];
    $location=$_POST['location'];
    $medication=$_POST['medication'];
    $dosage=$_POST['dosage'];
    $frequency=$_POST['frequency'];
    $sideeffects=$_POST['sideeffects'];
    $instructions=$_POST['instructions'];
    $physician=$_POST['physician'];
    $datesign=$_POST['datesign'];
    $phonenumber=$_POST['phonenumber'];
    $procedure1=$_POST['procedure1'];
    $sql=mysqli_query($conn,"INSERT INTO medicalorders(
    lastname,
    firstname,
    mi1,
    dob,
    medication_date,
    physician_name,
    location,
    medication,
    dosage,
    frequency,
    sideeffects,
    instructions,
    Physician,
    datesign,
    phonenumber,
    procedure1,
    user_id) VALUES (
    '$lastname',
    '$firstname',
    '$dob',
    '$mi1',
    '$medication_date',
    '$physician_name',
    '$location',
    '$medication',
    '$dosage',
    '$frequency',
    '$sideeffects',
    '$instructions',
    '$physician',
    '$datesign',
    '$phonenumber',
    '$procedure1',
    '$user_id')");
    if ($sql) {
        $successmessage .='Add Medication Order Successefully';	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
    }    
}
if (isset($_POST['uploadfile'])){
       
    $target="../../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='medicalorders';
    $fileCategory='resident';

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
                                    <h5>Resident Medical Orders</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Medical Ordeers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Medical Orders</a>
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
                                       <form action="" method="POST" >
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Resident Medical Orders (completed each time medication is prescribed by a doctor)</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Last Name</label>
                                                            <input type="text" name="lastname" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">First Name</label>
                                                            <input type="text" name="firstname" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class="col-form-label">MI</label>
                                                            <input type="text" name="mi1" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" name="dob" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Date </label>
                                                            <input type="date" name="medication_date" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-3">
                                                            <label class="col-form-label">Physician’s Name </label>
                                                            <input type="text" name="physician_name" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-3">
                                                            <label class="col-form-label">Location </label>
                                                            <input type="text" name="location" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Medication Prescribed:</label>
                                                              <input type="text" name="medication" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Dosage</label>
                                                            <input type="text" name="dosage" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Frequency</label>
                                                           <input type="text" name="frequency" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Potential side effects or adverse reactions</label>
                                                            <textarea name="sideeffects" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Additional instructions for staff and/or resident</label>
                                                            <textarea name="instructions" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">I have reviewed the self-administration procedure and authorize the above patient to self-administer this medication.</label>
                                                            
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Physician Signature</label>
                                                             <input type="text" name="physician" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                           <input type="date" name="datesign" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Telephone Number</label>
                                                            <input type="text" name="phonenumber" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Emergency Contact Number/Procedure</label>
                                                            <input type="text" name="procedure1" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="Add Medical Orders"
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
                                                                    <th>Last Name</th>
                                                                    <th>First Name</th>
                                                                    <th>MI</th>
                                                                    <th>Date of Birth</th>
                                                                    <th>Date</th>
                                                                    <th>Physician’s Name</th>
                                                                    <th>Location</th>
                                                                    <th>Medication Prescribed</th>
                                                                    <th>Frequency</th>
                                                                    <th>Dosage</th>
                                                                    <th>Potential side effects</th>
                                                                    <th>Additional instructions</th>
                                                                    <th>Physician Signature</th>
                                                                    <th>Date</th>
                                                                    <th>Telephone Number</th>
                                                                    <th>Emergency Contact Number</th>
                                                                    <th>Sign</th>
                                                                    <th>Print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM medicalorders WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['lastname'] ; ?></td>
                                                                    <td><?php echo $row['firstname'] ; ?></td>
                                                                    <td><?php echo $row['mi1'] ; ?></td>
                                                                    <td><?php echo $row['dob'] ; ?></td>
                                                                    <td><?php echo $row['medication_date'] ; ?></td>
                                                                    <td><?php echo $row['physician_name'] ; ?></td>
                                                                    <td><?php echo $row['location'] ; ?></td>
                                                                    <td><?php echo $row['medication'] ; ?></td>
                                                                    <td><?php echo $row['dosage'] ; ?></td>
                                                                    <td><?php echo $row['frequency'] ; ?></td>
                                                                    <td><?php echo $row['sideeffects'] ; ?></td>
                                                                    <td><?php echo $row['instructions'] ; ?></td>
                                                                    <td><?php echo $row['physician'] ; ?></td>
                                                                    <td><?php echo $row['datesign'] ; ?></td>
                                                                    <td><?php echo $row['phonenumber'] ; ?></td>
                                                                    <td><?php echo $row['procedure1'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="medicalordersign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="medicalorderprint.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delmedicalorders=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this Discharge summary.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="medicalordersupdate.php?updatemedicalorders=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='medicalorders' AND user_id=$user_id");
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