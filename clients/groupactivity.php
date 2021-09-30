<?php
 include 'nav.php';
 

$user_id=$user_id;


if (isset($_POST['submit'])){
    
    $residentname=$_POST['residentname'];
    $date1=$_POST['date1'];
    $time1=$_POST['time1'];
    $todaytopic=$_POST['todaytopic'];
    $behaviour=$_POST['behaviour'];
    $feelings=$_POST['feelings'];
    $goals=$_POST['goals'];
    $comments=$_POST['comments'];
    $staffname=$_POST['staffname'];
    $date2=$_POST['date2'];

    $sql=mysqli_query($conn,"INSERT INTO groupactivity VALUES ('','$residentname','$date1','$time1','$todaytopic','$behaviour','$feelings','$goals','$comments','$staffname','','$date1','$residentid','$user_id')");
    if ($sql) {
        $successmessage .='New group  activated, Successefully';   
    }
    else {
        $errormessage .='New group failed, try Again';        
    }    

}





?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Bootstrap tab card start -->
                                                <div class="card">
                                      <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <div class="sub-title"> Group activity note Form</div>
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs  tabs" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Add new</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">All content</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabs card-block">
                                                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                                                          
                                            <?php
                                                if ( isset($successmessage)) {
                                                    echo '
                                                        <div class="card borderless-card">
                                                            <div class="card-block success-breadcrumb">
                                                                <div class="breadcrumb-header">
                                                                    <span>'.$successmessage.'</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';
                                                }
                                                ?>
                                                <?php
                                                if ( isset($errormessage)) {
                                                  echo '
                                                      <div class="card borderless-card">
                                                          <div class="card-block danger-breadcrumb">
                                                              <div class="breadcrumb-header">
                                                                  <span>'.$errormessage.'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                            <div class="card-block">
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                       
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Name </label>
                                                            <input type="text" name="residentname" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="date1" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label"> Time</label>
                                                            <input type="time" name="time1" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-6">
                                                            <label class=" col-form-label">Today’s Topic</label>
                                                            <input type="text" name="todaytopic" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-6">
                                                            <label class=" col-form-label">Behavior (Present or Previous)</label>
                                                            <input type="text" name="behaviour" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                       
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Feelings / Resident Response </label>
                                                            <input type="text" name="feelings" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Goal </label>
                                                           <input type="text" name="goals" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    
                                                         <div class="col-sm-12">
                                                            <label class=" col-form-label">Comments / Resident Contribution </label>
                                                         <textarea name="comments" id="editor1" rows="10" cols="80"></textarea>
                                                        </div>
                                                        
                                                         <div class="col-sm-6">
                                                            <label class=" col-form-label">Staff Name </label>
                                                           <input type="text" name="staffname" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                          <input type="date" name="date2" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>

                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="submit" value="Add Group Activity"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                                                   
                                            </div>
                                            <div class="tab-pane" id="profile1" role="tabpanel">
                                                <div class=" table-border-style">
                                                   <div class="table-responsive">
                                                <table id="zero_config" class="table table-striped table-bordered no-wrap table-hover" >
                                                      <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Resident Name</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Today’s Topic</th>
                                                            <th>Behavior (Present or Previous)</th>
                                                            <th>Feelings / Resident Response</th>
                                                            <th>Goal</th>
                                                            <th>Comments / Resident Contribution</th>
                                                            <th>Staff Name</th>
                                                            <th>Date</th>
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM groupactivity");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo $row['residentname']; ?></td>
                                                            <td><?php echo $row['date1']; ?></td>
                                                            <td><?php echo $row['time1']; ?></td>
                                                            <td><?php echo $row['todaytopic'] ; ?></td>
                                                            <td><?php echo $row['behaviour'] ; ?></td>
                                                            <td><?php echo $row['feelings'] ; ?></td>
                                                            <td><?php echo $row['goals']; ?></td>
                                                            <td><?php echo $row['comments']; ?></td>
                                                            
                                                            <td><?php echo $row['staffname'] ; ?></td>
                                                            <td><?php echo $row['date2'] ; ?></td>
                                                            <td><a class="btn btn-danger"  href="deletegroup.php?id=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="groupupdate.php?id=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-primary"  href="groupsign.php?id=<?php echo $row['id']; ?> "  id="red">Sign Now</a></td>
                                                            <td><a class="btn btn-success"  href="printgroup.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
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
                                <!-- Row end -->
                            </div>
                         </div>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
<?php 

include 'footer.php';
?>