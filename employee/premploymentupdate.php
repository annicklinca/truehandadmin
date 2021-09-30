<?php
include 'nav.php';
$user_id=$user_id;
$id=$_GET['updatepremloyment']; 

if (isset($_POST['update'])){
    
    
     
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
    
    
 

     $sql=mysqli_query($conn,"UPDATE pre_employment SET 
    
    per_name='$per_name',
    infiles='$infiles',
    exp_date='$exp_date',
    note='$note',
    infile1='$infile1',
    exp_date1='$exp_date1',
    note1='$note1',
    infile2='$infile2',
    exp_date2='$exp_date2',
    note2='$note2',
    infile3='$infile3',
    exp_date3='$exp_date3',
    note3='$note3',
   infile4='$infile4',
    exp_date4='$exp_date4',
    note4='$note4',
  infile5='$infile5',
    exp_date5='$exp_date5',
    note5='$note5',
    infile6='$infile6',
    exp_date6='$exp_date6',
    note6='$note6',
    infile7='$infile7',
    exp_date7='$exp_date7',
    note7='$note7',
    infile8='$infile8',
    exp_date8='$exp_date8',
    note8='$note8',
    infile9='$infile9',
    exp_date9='$exp_date9',
    note9='$note9',
    infile0='$infile0',
    exp_date0='$exp_date0',
    note0='$note0'
    
   
  

 WHERE id='$rec_id';");
    if ($sql) {
        $successmessage .='Update  Successefully';
    }
    else {
        $errormessage .='update  failed!';       
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
                                           <?php
                                        if (isset($_GET['updatepremloyment'])) {
                                        $ser_id=$_GET['updatepremloyment'];
                                        $sel=$conn->query("SELECT * from pre_employment where id='$ser_id' ");
                                        while($rows=mysqli_fetch_array($sel))
                                         {
                                         ?>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Personnel Name </label>
                                                            <input type="text" name="per_name" value="<?php echo $rows['per_name']?>" class="form-control form-control-normal"
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
                                                            <input type="text" name="infiles" value="<?php echo $rows['infiles']?>" class="form-control form-control-normal"
                                                            placeholder="Enter   Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date"
                                                            value="<?php echo $rows['exp_date']?>" class="form-control form-control-normal"
                                                            placeholder="Enter ">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note']?></textarea>
                                                        </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Social Security Card</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile1" value="<?php echo $rows['infile1']?>" class="form-control form-control-normal"
                                                            placeholder="Enter   Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date1" value="<?php echo $rows['exp_date1']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note1" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note1']?></textarea>
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>CPR Card</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile2" value="<?php echo $rows['infile2']?>" class="form-control form-control-normal"
                                                            placeholder="Enter   Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date2" value="<?php echo $rows['exp_date2']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note2" class="form-control form-control-normal"
                                                            placeholder="Enter "><?php echo $rows['note2']?></textarea>
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>First Aid Card</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile3" value="<?php echo $rows['infile3']?>" class="form-control form-control-normal"
                                                            placeholder="Enter   Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date3"  value="<?php echo $rows['exp_date3']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note3" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note3']?></textarea>
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Finger Print Card/ Application</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile4" value="<?php echo $rows['infile4']?>" class="form-control form-control-normal"
                                                            placeholder="Enter   Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date4" value="<?php echo $rows['exp_date4']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note4" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note4']?></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Physical Examination</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile5" value="<?php echo $rows['infile5']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date5" value="<?php echo $rows['exp_date5']?>"class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note5" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note5']?></textarea>
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Tuberculosis Test</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile6" value="<?php echo $rows['infile6']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date6" value="<?php echo $rows['exp_date6']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note6" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note6']?></textarea>
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Orientation Checklist</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile7" value="<?php echo $rows['infile7']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date7" value="<?php echo $rows['exp_date7']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note7" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note7']?></textarea>
                                                        </div>
                                                    </div>
                                                  
                                                   
                                                  
                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Application for Employment</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile8" value="<?php echo $rows['infile8']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date8" value="<?php echo $rows['exp_date8']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note8" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note8']?></textarea>
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Personnel Information</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile9" value="<?php echo $rows['infile9']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date9" value="<?php echo $rows['exp_date9']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note9" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note9']?></textarea>
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Fed. & AZ:I-9, W-4 & A-4</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">In File </label>
                                                            <input type="text" name="infile0" value="<?php echo $rows['infile0']?>" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Expiration Date</label>
                                                            <input type="date" name="exp_date0" value="<?php echo $rows['exp_date0']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Notes</label>
                                                            <textarea name="note0" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['note0']?></textarea>
                                                        </div>
                                                    </div>
                                                   
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Documentation"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>

                                                    <?php
                                                }
                                            }
                                            ?>
                                                    
                                                </form>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class=" table-border-style">
                                                 
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