<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
    $name=$_POST['name'];
    $date_incident=$_POST['date_incident '];
    $incident=$_POST['incident'];
    $initials=$_POST['initials'];
    $resident_response=$_POST['resident_response'];
    $resident=$_POST['resident'];
    $residentdate=$_POST['residentdate'];
    $director=$_POST['director'];
    $directordate=$_POST['directordate'];

  
    $sql=mysqli_query($conn,"INSERT INTO warning(name,date_incident,incident,initials,resident_response,resident,residentdate,director,directordate,user_id) VALUES ('$name','$date_incident','$incident','$initials','$resident_response','$resident','$residentdate','$director','$directordate','$user_id')");
    if ($sql) {
        $successmessage .='New Warning saved, Successefully';    
    }
    else {
        $errormessage .='New Warning failed, try Again';     
    }    

}
if (isset($_POST['uploadfile'])){
       
    $target="../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='warning';
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
                                    <h5>Notification of Fees</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Warning</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Warning</a>
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
                                                           <h3>Written Warning  </h5>
                                                       <div class="col-sm-12">
                                                            <label class=" col-form-label">Offender Name</label>
                                                            <input type="text" name="name" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div><br>

                                                      <p>
                                            The safety and well-being of all residents, consumers and staff is a primary goal for management at TRUE HAND BEHAVIORAL AGENCY.  Therefore, any action taken by a resident or staff member that harms or endangers another resident or staff member cannot be tolerated.</p>    
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Date of Incident </label>
                                                            <input type="date" name="date_incident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Incident</label>
                                                            <textarea name="incident" class="form-control"></textarea>
                                                        </div>
                                                        <br>
                                                        <p>
                                                            I understand that if I repeat this behavior that I may be terminated from the .  Your case manager will be notified of t TRUE HAND BEHAVIORAL AGENCY his incident and the consequences of repeating it explained.
                                                            </p>
                                                               <div class="col-sm-12">
                                                            <label class=" col-form-label">Initials</label>
                                                             <input type="date" name="initials" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <br>


                                                          If I disagree with this warning or otherwise wish to respond I should do so in writing. 
                                                        
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Resident Response</label>
                                                         <textarea name="resident_response" class="form-control"></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Signature</label>
                                                            <input type="text" name="resident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                            <input type="date" name="residentdate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">House Manager/Director Signature </label>
                                                            <input type="text" name="director" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                           <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                            <input type="date" name="directordate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="Add new"
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
                                                        <table id="zero_config" class="table table-striped table-bordered no-wrap table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Offender Name</th>
                                                            <th>Date of Incident</th>
                                                            <th>Incident</th>
                                                            <th>Initials</th>
                                                            <th>Resident Response</th>
                                                            <th>Resident Signature</th>
                                                            <th>date</th>
                                                            <th>Director Signature</th>
                                                            <th>date</th>
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM warning");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                             <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['date_incident']; ?></td>
                                                            <td><?php echo $row['incident']; ?></td>
                                                            <td><?php echo $row['initials']; ?></td>
                                                            <td><?php echo $row['resident_response'] ; ?></td>
                                                            <td><?php echo $row['resident'] ; ?></td>
                                                            <td><?php echo $row['residentdate'] ; ?></td>
                                                            <td><?php echo $row['director'] ; ?></td>
                                                            <td><?php echo $row['directordate'] ; ?></td>
                                                            <td><a class="btn btn-danger"  href="delete.php?delwarning=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this reciept of information.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="warningupdate.php?updatewarning=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-primary"  href="warningsign.php?id=<?php echo $row['id']; ?> "  id="red">Sign</a></td>
                                                            <td><a class="btn btn-success"  href="warningprint.php?printwarning=<?php echo $row['id']; ?>"  id="red">Print</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='warning' AND user_id=$user_id");
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