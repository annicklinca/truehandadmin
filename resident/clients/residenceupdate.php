<?php
include 'nav.php';
$user_id=$user_id;
 $rec_id=$_GET['updateresidence']; 

if (isset($_POST['update'])){
    
    $representative=$_POST['representative'];
    $resident=$_POST['resident'];
    $day_admission=$_POST['day_admission'];
    $date_admission=$_POST['date_admission'];
    $fees_house=$_POST['fees_house'];

     $sql=mysqli_query($conn,"UPDATE residence SET 
    
    representative='$representative',
    resident='$resident',
    day_admission='$day_admission',
    date_admission='$date_admission'
     fees_house='$fees_house'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update Residency Successefully';
            
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
                                    <h5>RESIDENCY AGREEMENT</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">UPDATE RESIDENCY</a>
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
                                           <?php
                                                if (isset($_GET['updateresidence'])) {
                                                    $orient_id=$_GET['updateresidence'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM residence WHERE residence.id=$orient_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>

                                          <div class="form-group row">
                                                        
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Representative</label>
                                                            <input type="text" name="representative" value="<?php echo $row['representative']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                      
                                                        
                                                    </div>
                                                   <div class="form-group row">
                                                        
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident’s name</label>
                                                            <input type="text" value="<?php echo $row['resident']?>" name="resident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                           <div class="col-sm-6">
                                                            <label class=" col-form-label">Day of Admission</label>
                                                            <input type="text" name="day_admission" value="<?php echo $row['day_admission']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date of Admission</label>
                                                            <input type="date" name="date_admission" value="<?php echo $row['date_admission']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        
                                                    </div>
                                                       <div class="col-sm-12">
                                                           
                                                            <label class=" col-form-label">Fees for Housing</label>
                                                            <input type="text" name="fees_house" value="<?php echo $row['fees_house']?>" class="form-control form-control-normal"
                                                            placeholder="$">
                                                        </div>

                                                     
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update new"
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
                                                   <div class="table-responsive">
                                                        <table id="zero_config" class="table table-striped table-bordered no-wrap table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Representative</th>
                                                            <th>Resident Name</th>
                                                            <th>Date of Admission</th>
                                                            
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM residence");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo $row['representative']; ?></td>
                                                            <td><?php echo $row['resident']; ?></td>
                                                            <td><?php echo $row['date_admission']; ?></td>
                                                          
                                                            <td><a class="btn btn-danger"  href="delete.php?delresidence=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this reciept of information.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="residenceupdate.php?updateresidence=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-primary"  href="residencesign.php?id=<?php echo $row['id']; ?> "  id="red">Sign</a></td>
                                                            <td><a class="btn btn-success"  href="residenceprint.php?printreciept=<?php echo $row['id']; ?>"  id="red">Print</a></td>
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