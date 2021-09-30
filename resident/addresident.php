
<?php
include 'navbar.php';
$user_id=$admin_id;
 if (isset($_POST['addresident'])){    
    $fullname=$_POST['fullname'];
    $kir=date("m-d-Y");
    $insuranceid=$_POST['insuranceid'];
    $phone=$_POST['phone'];
    $useridn=$userid;
    $cbrend =$_POST['cbrend'];
    $birthdate=$_POST['birthdate'];
    $dischargedate=$_POST['dischargedate'];
    $diagnosis=$_POST['diagnosis'];
    $insuranceco=$_POST['insuranceco'];
    $pharmacycontact=$_POST['pharmacycontact'];
    $pcpname=$_POST['pcpname'];
    $pcpcontact =$_POST['pcpcontact'];
    $status=$_POST['status'];
    $admitteddate=$_POST['admitteddate'];
    $clinic1=$_POST['clinic'];
    $casemanager=$_POST['casemanager'];
    $casemanagercontact=$_POST['casemanagercontact'];
    $authorization =$_POST['authorization'];
    $pharmacy=$_POST['newpharmacy'];
    
    $sql=$conn->query("INSERT INTO clients(fullname,insuranceid,Phone,joined,user_id,status,cbrend,birthdate,dischargedate,insuranceco,pharmacycontact,pcpname,pcpcontact,admitteddate,diagnosis,clinic,casemanager,casemanagercontact,pharmacy,authorization) 
    VALUES('$fullname','$insuranceid','$phone','$kir','$user_id','$status','$cbrend','$birthdate','$dischargedate','$insuranceco','$pharmacycontact','$pcpname','$pcpcontact','$admitteddate','$diagnosis','$clinic','$casemanager','$casemanagercontact','$pharmacy','$authorization')");
    if ($sql) {
        $successmessage .='Add Resident, Successefully';	
    }
    else {
        $errormessage .='Add Resident failed!';	    
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
                                    <h5>Resident</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Resident</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Resident</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content " id="myTabContent">
                                        <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                                <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Fullname</label>
                                    <input type="text" name="fullname"  class="form-control" id="fullname" required="required" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Insurance Id</label>
                                    <input type="text" name="insuranceid"  class="form-control" id="fullname"  />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Insurance Company</label>
                                        
                                            <input type="text" name="insuranceco"  class="form-control" id="fullname" />
                                        </div>
                                        </div>
                                                </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Phone</label>
                                    <input type="text" name="phone"  class="form-control" id="fullname" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">CCR due date </label>
                                    <input type="date" name="cbrend"  class="form-control" id="fullname" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        
                        
                                        </div>
                                        </div>
                                    
                                        <!-- end rows -->
                                        </div>
                        
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Date of birth</label>
                                    <input type="date" name="birthdate"  class="form-control" id="fullname" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">admitted date</label>
                                    <input type="date" name="admitteddate"  class="form-control" id="fullname" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Discharge date</label>
                                    <input type="date" name="dischargedate"  class="form-control" id="fullname" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Diagnosis</label>
                                    
                                            <input type="text" name="diagnosis"  class="form-control" id="fullname" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Authorization Number</label>
                                    <input type="text" name="authorization"  class="form-control" id="fullname" />
                                        </div>
                                        </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Pharmacy</label>
                                            <input type="text" name="newpharmacy"  class="form-control" id="fullname" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Pharmacy Contact</label>
                                    <input type="text" name="pharmacycontact"  class="form-control" id="fullname" />
                                        </div>
                                        </div>   
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">PCP Name</label>
                                    <input type="text" name="pcpname"  class="form-control" id="fullname" />
                                        </div>
                                        </div>    
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">PCP Contact</label>
                                    <input type="text" name="pcpcontact"  class="form-control" id="fullname" />
                                        </div>
                                        </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Clinic</label>
                                            <input type="text" name="clinic"  class="form-control" id="fullname" />
                                        </div>
                                        </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Case Manager</label>
                                    <input type="text" name="casemanager"  class="form-control" id="fullname" />
                                        </div>
                                        </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Case manager Contact</label>
                                    <input type="text" name="casemanagercontact"  class="form-control" id="fullname" />
                                        </div>
                                        </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="active">Active</option>
                                    <option value="discharged">discharged</option>
                                    <option value="hospitalized">hospitalized</option>
                                    </select>
                                        </div>
                                        </div> 
                                                
                                        </div>
                                    <div class="form-group">
                                    <input type="submit" name="addresident" value="Add resident" style="width: 100%;"  class="btn btn-primary" id="submit" />
                                    </div>
                                    
                                                </form>
                                        </div>
                                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class=" table-border-style">
                                                   <div class="table-responsive">
                                                   <table id="zero_config" class="table  table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                          
                                            
<th>Action to Resident</th>

                                      
<th>Update</th>

                             
<th>delete</th>
                                                <th>Names</th>
                                                
                                                <th>insurance Id</th>
                                                <th>Diagnosis</th>
        
                                                <th>Insurance company</th>
                                                <th>Date of Admission</th>

<th>Authorization Number</th>
<th>Status</th>

                                            
                                                <th>Discharge date</th>
                                                <th>pharmacy</th>
<th>Pharmacy contact</th>
<th>PCP name</th>
<th>PCP contact</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sel=$conn->query("SELECT * from clients  order by id desc ");
                                             while($rows=mysqli_fetch_array($sel))
                                             {
                                                 ?>
                                                 <tr >
                                                
                                                 <td><a href="./clients/index.php?residentid=<?php echo $rows['id'] ?>"><span class="btn btn-success">Files</span></a></td>                                          
                                                 <td><a href="editclients.php?clientid=<?php  echo $rows['id'] ?>"><span class="btn btn-primary">Update</span></a></td>                                          
                                                 <td><a href="delete.php?delclient=<?php  echo $rows['id'] ?>"><span class="btn btn-danger">Delete</span></a></td>
                                            <td><?php echo $rows['fullname']; ?></td>
                                        
                                            <td><?php echo $rows['insuranceid']; ?></td>
                                            <td><?php echo $rows['diagnosis']; ?></td>
                                            <td><?php echo $rows['insuranceco']; ?></td>
                                            <td><?php 
                                            $newDate = date("m-d-Y", strtotime($rows['admitteddate']));
                                            echo $newDate; ?></td>
                                            <td><?php echo $rows['authorization']; ?></td>
                                            
                                            
                                            
                                          
                                            <td><?php echo $rows['status']; ?></td>
                                          
                                            <td><?php 
                                            $newDates = date("m-d-Y", strtotime($rows['dischargedate']));
                                            echo $newDates;
                                             ?></td>
                                              <td><?php echo $rows['pharmacy']; ?></td>
                                            <td><?php echo $rows['pharmacycontact']; ?></td>
                                            <td><?php echo $rows['pcpname']; ?></td>
                                            <td><?php echo $rows['pcpcontact']; ?></td>
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