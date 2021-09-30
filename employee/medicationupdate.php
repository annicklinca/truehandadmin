<?php
include 'nav.php';
$user_id=$user_id;
$id=$_GET['updatemedication']; 
if (isset($_POST['update'])){


   $per_name=$_POST['per_name'];
    $prescribed=$_POST['prescribed'];
    $prescribed_sucess=$_POST['prescribed_sucess'];
    $reference=$_POST['reference'];
    $reference_sucess=$_POST['reference_sucess'];
    $explain1=$_POST['explain1'];
    $explain_sucess=$_POST['explain_sucess'];
    $procedure1=$_POST['procedure1'];
    $procedure_success=$_POST['procedure_success'];
    $verbalize=$_POST['verbalize'];
    $verbalize_success=$_POST['verbalize_success'];
    $medical=$_POST['medical'];
    $medical_success=$_POST['medical_success'];
    $symptom=$_POST['symptom'];
    $symptom_success=$_POST['symptom_success'];
    $demonstrate=$_POST['demonstrate'];
    $demonstrate_success=$_POST['demonstrate_success'];
    $safely=$_POST['safely'];
    $safely_success=$_POST['safely_success'];
    $document=$_POST['document'];
    $document_sucess=$_POST['document_sucess'];
    $compliance=$_POST['compliance'];
    $compliance_success=$_POST['compliance_success'];
    $refuses=$_POST['refuses'];
    $refuse_sucess=$_POST['refuse_sucess'];
    $contact=$_POST['contact'];
    $contact_sucess=$_POST['contact_sucess'];
    $proper=$_POST['proper'];
    $proper_sucess=$_POST['proper_sucess'];
    $manager_name=$_POST['manager_name'];
    $trainer_name=$_POST['trainer_name'];
    $dtraining=$_POST['dtraining'];
    $time_training=$_POST['time_training'];
    
    
 

      $sql=mysqli_query($conn,"UPDATE medication SET 
    
    per_name='$per_name',
    prescribed='$prescribed_sucess',
    reference='$reference',
    reference_sucess='$reference_sucess',
    explain1='$explain1',
    explain_sucess='$explain_sucess',
    procedure1='$procedure1',
    procedure_success='$procedure_success',
    verbalize='$verbalize',
    verbalize_success='$verbalize_success',
    medical='$medical',
    medical_success='$medical_success',
    symptom='$symptom',
    symptom_success='$symptom_success',
    demonstrate='$demonstrate',
    demonstrate_success='$demonstrate_success',
    safely='$safely',
    safely_success='$safely_success',
    document='$document',
    document_sucess='$document_sucess',
    compliance='$compliance',
    compliance_success='$compliance_success',
    refuses='$refuses',
    refuse_success='$refuse_success',  
    contact='$contact',
    contact_success='$contact_success',
    proper='$proper',
    proper_success='$procedure_success',
    manager_name='$manager_name',
    trainer_name='$trainer_name',
    dtraining='$dtraining',
    time_training='$time_training'
    
   
  

 WHERE id='$rec_id';");
    if ($sql) {
        $successmessage .='Update personal Successefully';
    }
    else {
        $errormessage .='Add contact failed!';       
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
                                    <h5>Medication Management Training Checklist</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update content</a>
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
                                        if (isset($_GET['updatemedication'])) {
                                        $ser_id=$_GET['updatemedication'];
                                        $sel=$conn->query("SELECT * from medication where id='$ser_id' ");
                                        while($rows=mysqli_fetch_array($sel))
                                         {
                                         ?>
                                         <h3>Medication Management Training Checklist</h3>
                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                               <label class="col-form-label">Personnel Name</label>
                                                            <input type="text" name="per_name" value="<?php echo $rows['per_name'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Demonstrates knowledge of medications commonly prescribed for residents with behavioral health issues by explaining the common benefits, side effects and adverse reactions of medication</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="prescribed" value="<?php echo $rows['prescribed']; ?>" class="form-control">
                                                                <?php
                                                                $sel=$conn->query("SELECT * from medication where id='$ser_id' ");
                                        while($rows=mysqli_fetch_array($sel)){

                                                                ?>
                                                                <option ><?php echo $rows['prescribed']; ?></option>
                                                                <?php
                                                            }
                                                                ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="prescribed_sucess" <?php if ($rows['prescribed_sucess']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="prescribed_sucess" <?php if ($rows['prescribed_sucess']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Able to name a reference to obtain medication information, i.e. approved drug reference book.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="reference" value="<?php echo $rows['reference']?>" class="form-control">
                                                                <option value="Written">Written</option>
                                                                <option value="Verbal">Verbal</option>
                                                                <option value="Visual">Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="reference_sucess" <?php if ($rows['reference']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="reference_sucess" <?php if ($rows['reference_sucess']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>


                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Able to explain the difference between assisting in self-administration of medication, and medication administration.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="explain1" value="<?php echo $rows['explain1']; ?>" class="form-control">
                                                                <option value="Written">Written</option>
                                                                <option value="Verbal">Verbal</option>
                                                                <option value="Visual">Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="explain_sucess" <?php if ($rows['explain_sucess']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="explain_sucess" <?php if ($rows['explain_sucess']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Able to explain procedure for procurement of medication from Pharmacy.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="procedure1" value="<?php echo $rows['procedure1'];?>"  class="form-control">
                                                                <option value="Written">Written</option>
                                                                <option value="Verbal">Verbal</option>
                                                                <option value="Visual">Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="procedure_success" <?php if ($rows['procedure_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="procedure_success" <?php if ($rows['procedure_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Verbalize procedure for assisting a participant to self-medicate.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="verbalize" value="<?php echo $rows['verbalize'];?>" class="form-control">
                                                                <option value="Written">Written</option>
                                                                <option value="Verbal">Verbal</option>
                                                                <option value="Visual">Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="verbalize_success" <?php if ($rows['verbalize_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="verbalize_success" <?php if ($rows['verbalize_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Understands the medical terminaology used in assisting in the self administration of medication.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="medical" value="<?php echo $rows['medical']?>" class="form-control">
                                                                <option value="Written">Written</option>
                                                                <option value="Verbal">Verbal</option>
                                                                <option value="Visual">Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="medical_success" <?php if ($rows['medical_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medical_success" <?php if ($rows['medical_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Verbalizes knowledge of signs, symptoms, and indicators of toxicity of overdose.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="symptom" value="<?php echo $rows['symptom']?>" class="form-control">
                                                                <option value="Written">Written</option>
                                                                <option value="Verbal">Verbal</option>
                                                                <option value="Visual">Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="symptom_success" <?php if ($rows['symptom_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="symptom_success" <?php if ($rows['symptom_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Able to verbalize and demonstrate proper use of medication-related forms.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="demonstrate" value="<?php echo $rows['demonstrate'];?>" class="form-control">
                                                                <option value="Written">Written</option>
                                                                <option value="Verbal">Verbal</option>
                                                                <option value="Visual">Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="demonstrate_success" <?php if ($rows['demonstrate_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="demonstrate_success" <?php if ($rows['demonstrate_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Verbalize proper procedure for storing medication safely.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="safely" value=<?php echo $rows['safely']?> class="form-control">
                                                                <option value="Written">Written</option>
                                                                <option value="Verbal">Verbal</option>
                                                                <option value="Visual">Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="safely_success" <?php if ($rows['safely_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="safely_success" <?php if ($rows['safely_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>
                                                     
                                                      <div class="form-group row">
                                                    <div class="col-sm-12">
                                                           <p>Verbalizes understanding of the proper usage of PRN medication and documentation.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="document" value="<?php echo $rows['document']?>" class="form-control">
                                                                <option >Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="document_sucess" <?php if ($rows['document_sucess']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="document_sucess" <?php if ($rows['document_sucess']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>
                                                     
                                                      <div class="form-group row">
                                                     <div class="col-sm-12">
                                                           <p>Able to explain procedure for reporting non-compliance, medication errors and adverse side effects.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="compliance" value="<?php echo $rows['compliance']?>" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="complaince_success" <?php if ($rows['compliance_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="compliance_success" <?php if ($rows['compliance_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                     <div class="col-sm-12">
                                                           <p>Explain procedure when resident refuses medication and the responsibilities to inform resident of potential outcome of non-compliance.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="refuses" value="<?php echo $rows['refuses'];?>" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="refuse_success" <?php if ($rows['refuse_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="refuse_sucess" <?php if ($rows['refuse_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                     <div class="col-sm-12">
                                                           <p>Able to verbalize knowledge of the signs & symptoms or circumstances indicating that resident should not take medication and appropriate contact for review and addressing the situation.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="contact" value="<?php echo $rows['contact']?>" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="contact_success" <?php if ($rows['contact_sucess']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="contact_success" <?php if ($rows['contact_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                      <div class="form-group row">
                                                     <div class="col-sm-12">
                                                           <p>Verbalize knowledge of proper response to a medical emergency or Medication error.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="proper" value="<?php echo $rows['proper']?>" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="proper_success" <?php if ($rows['proper_success']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="proper_success" <?php if ($rows['proper_success']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Manager Name</label>
                                                        <input type="text" name="manager_name" value="<?php echo $rows['manager_name'];?>" class="form-control"
                                                        placeholder="" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Trainer Name</label>
                                                         <input type="text" name="trainer_name" value="<?php echo $rows['trainer_name']?>" class="form-control"
                                                        placeholder="Enter  cell phone" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Date of Training</label>
                                                        <input type="date" name="dtraining" value="<?php echo $rows['dtraining']?>" class="form-control"
                                                        placeholder="(        )" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Time</label>
                                                         <input type="time" name="time_training" value="<?php echo $rows['time_training']?>" class="form-control"
                                                        placeholder="Enter  cell phone" required="">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Medication"
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