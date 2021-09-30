<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addreportingabuse'])){
    $PersonnelName=$_POST['PersonnelName'];
    $Supervisor=$_POST['Supervisor'];
    $sql=mysqli_query($conn,"INSERT INTO reportingabuse(PersonnelName,Supervisor,resident_id,user_id) VALUES ('$PersonnelName','$Supervisor','$residentid','$user_id')");
    if ($sql) {
        $successmessage .='Add reporting abuse Successefully';	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
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
                                    <h5>Reporting of Abuse or Neglect</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Reporting of Abuse or Neglect</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Reporting of Abuse or Neglect</a>
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
                                                        <h3>Reporting of Abuse or Neglect</h3></label>
                                                        <div class="col-sm-12">
                                                            <p>It is incumbent upon all personnel members to immediately report any and all suspected or alleged abuse, neglect, or exploitation or a violation of a resident’s rights.</p>
                                                            <p>This report must be made to the TRUE HAND BEHAVIORAL AGENCY
                                                                JEAN CLAUDE SIMBANDUSHE (520-585-1628) without delay.  If you receive a report from another personnel member, you must also immediately report the allegation along to the Director.
                                                                </p>
                                                         </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Resident Records</h3></label>
                                                        <div class="col-sm-12">
                                                           <p>Resident’s rights include the right that all of their medical and clinical records be maintained locked and secure against unauthorized access.  Resident records including diagnoses, clinical notes, treatment observations, treatment plans, medication records, claim forms and personal identification numbers, must be maintained inside the locked cabinet in the administration office room. Access to the records is restricted to True Hand Behavioral Agency BHTs, the True Hand Behavioral Agency Director, the Arizona Department of Health surveyor and to the specific resident’s case manager and care providers.  Any additional access can only be granted with properly completed and signed release forms.</p>
                                                         </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Personnel Name</label>
                                                            <input type="text" name="PersonnelName" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Supervisor</label>
                                                            <input type="text" name="Supervisor" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addreportingabuse" value="Add reportingabuse"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
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
                                                                    <th>PersonnelName</th>
                                                                    <th>Supervisor</th>
                                                                    <th>sign</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM reportingabuse WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['PersonnelName'] ; ?></td>
                                                                    <td><?php echo $row['Supervisor'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="reportingabusesign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="printreportingabuse.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delreportingabuse=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this reportingabuse.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="reportingabuseupdate.php?updatereportingabuse=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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