<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
    
    $resident=$_POST['resident'];
    $residentdate=date("m-d-Y", strtotime($_POST['residentdate']));
    $agent=$_POST['agent'];
    $agentdate=date("m-d-Y", strtotime($_POST['agentdate']));
    $personnel=$_POST['personnel'];
    $personneldate=date("m-d-Y", strtotime($_POST['personneldate']));

    $sql=mysqli_query($conn,"INSERT INTO grievanceprocedures VALUES ('','$resident','$residentdate','$agent','$agentdate','$personnel','$personneldate','$user_id','','','')");
    if ($sql) {
        $successmessage .='New Grievance Procedures saved, Successefully';  
    }
    else {
        $errormessage .='New Grievance Procedures failed, try Again';       
    }    
}
if (isset($_POST['uploadfile'])){
       
    $target="../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='grievanceprocedures';
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
                                    <h5>Confidentiality Statement Review</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Grievance Procedures</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Grievance Procedures</a>
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
                                                        <div class="col-sm-12">
                                                           <h5>Grievance Procedures </h5>
                                                            <label class=" col-form-label">I acknowledge that upon admission the following items and information were fully explained to me:</label>
                                                            <ol>
                                                               <li>First, process the grievance or concern with personnel. If the resident is not satisfied, obtain a grievance form. </li>
                                                               <li>Complete the form in detail when applic11ble. </li>
                                                               <li>Submit form to personnel or administrator. Grievance form will be initially responded to within two working days of its receipt. </li>
                                                               <li>The agency administrator will review, meet with resident and relevant parties (if applicable) to address the issues raised in the grievance.</li>
                                                               <li> Filled grievances will receive a formal written response within five working days. </li>
                                                               <li>If person(s) filing grievance is not satisfied with the decision, a written compliant may be filed with the licensing agency for further intervention.</li>
                                                               <li>A person or persons shall not be discriminated against, prohibited reprisal or retaliated against, becaus~ he or she has fielded 11 grievance with or outside of the agency.</li>
                                                               <li>No resident will be subje~ted to threats of early termination or rejection by personnel.</li>
                                                               <li>Policies and procedures will be explained to the resident, parent, and guardian or designated representative at the time of admission.</li>
                                                               <li> A resident or representative may file a compl~t directly with the Bureau of Residential Facilities Licensing or the ~ona Office of Human Rights.</li>
                                                            </ol>
                                                            <p><span style="text-decoration: underline;">Bureau of Residential Facilities Licensing Information</span><br>7010 S 19TH Lane phoenix Az 85041 </p>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Signature </label>
                                                            <input type="text" name="resident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="residentdate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Agent Signature</label>
                                                            <input type="text" name="agent" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="agentdate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Personnel Signature </label>
                                                            <input type="text" name="personnel" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                            <input type="date" name="personneldate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="Add Procedure"
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
                                                            <th>Resident Signature</th>
                                                            <th>Date</th>
                                                            <th>Resident Agent Signature</th>
                                                            <th>date</th>
                                                            <th>Pessonnel Signature</th>
                                                            <th>date</th>
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM grievanceprocedures");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo $row['resident']; ?></td>
                                                            <td><?php echo $row['residentdate']; ?></td>
                                                            <td><?php echo $row['agent']; ?></td>
                                                            <td><?php echo $row['agentdate'] ; ?></td>
                                                            <td><?php echo $row['personnel'] ; ?></td>
                                                            <td><?php echo $row['personneldate'] ; ?></td>
                                                            <td><a class="btn btn-danger"  href="delete.php?delgrievanceprocedures=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this reciept of information.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="grievanceprocedureupdate.php?updategrievanceprocedures=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-primary"  href="grievanceproceduresign.php?id=<?php echo $row['id']; ?> "  id="red">Sign </a></td>
                                                            <td><a class="btn btn-success"  href="grievanceprocedureprint.php?printgrievanceprocedures=<?php echo $row['id']; ?>"  id="red">Print</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='grievanceprocedures' AND user_id=$user_id");
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