<?php
 include 'nav.php';
 

$user_id=$user_id;
$id=$_GET['id'];

if (isset($_POST['update'])){
    
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
  $sql=mysqli_query($conn,"UPDATE groupactivity SET 
    
    residentname='$residentname',
    date1='$date1',
    time1='$time1',
    todaytopic='$todaytopic',
    behaviour='$behaviour',
    feelings='$feelings',
    goals='$goals',
    comments='$comments',
    staffname='$staffname',
    date2='$date2'

     WHERE id=$id;");
    if ($sql) {
        $successmessage .='Update  Group Activity Successefully';
            
    }
    else {
        $errormessage .= mysqli_error($conn);       
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
                                                 <?php
                                        $sel=$conn->query("SELECT * from groupactivity where id='$id' ");
                                        while($rows=mysqli_fetch_array($sel))
                                         {
                                         ?>
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                       
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Name </label>
                                                            <input type="text" name="residentname" value="<?php echo $rows['residentname'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="date1" value="<?php echo $rows['date1'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label"> Time</label>
                                                            <input type="time" name="time1" value="<?php echo $rows['time1'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-6">
                                                            <label class=" col-form-label">Today’s Topic</label>
                                                            <input type="text" name="todaytopic" value="<?php echo $rows['todaytopic'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-6">
                                                            <label class=" col-form-label">Behavior (Present or Previous)</label>
                                                            <input type="text" name="behaviour" value="<?php echo $rows['behaviour'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                       
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Feelings / Resident Response </label>
                                                            <input type="text" name="feelings" value="<?php echo $rows['feelings'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Goal </label>
                                                           <input type="text" name="goals" value="<?php echo $rows['goals'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    
                                                         <div class="col-sm-12">
                                                            <label class=" col-form-label">Comments / Resident Contribution </label>
                                                         <textarea name="comments" id="editor1" rows="10" cols="80"><?php echo $rows['comments'] ?></textarea>
                                                        </div>
                                                        
                                                         <div class="col-sm-6">
                                                            <label class=" col-form-label">Staff Name </label>
                                                           <input type="text" name="staffname" value="<?php echo $rows['staffname'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                          <input type="date" name="date2" value="<?php echo $rows['date2'] ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>

                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update  Group Activity"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                <?php
                                            }
                                                ?>
                                            </div>
                                                                   
                                            </div>
                                            <div class="tab-pane" id="profile1" role="tabpanel">
                                                <div class=" table-border-style">
                                               
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