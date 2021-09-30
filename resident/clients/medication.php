<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){


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
    
    
 

    $sql=mysqli_query($conn,"INSERT INTO medication VALUES ('',
        '$per_name',
        '$prescribed',
        '$prescribed_sucess',
        '$reference',
        '$reference_sucess',
        '$explain1',
        '$explain_sucess',
        '$procedure1',
        '$procedure_success',
        '$verbalize',
        '$verbalize_success',
        '$medical',
        '$medical_success',
        '$symptom',
        '$symptom_success',
        '$demonstrate',
        '$demonstrate_success',
        '$safely',
        '$safely_success',
        '$document',
        '$document_sucess',
        '$compliance',
        '$compliance_success',
        '$refuses',
        '$refuse_sucess',
        '$contact',
        '$contact_sucess',
        '$proper',
        '$proper_sucess',
        '$manager_name',
        '$trainer_name',
        '$dtraining',
        '$time_training',''  
    )");
    if ($sql) {
        $successmessage .='Add  Successefully';    
    }
    else {
        $errormessage .= mysqli_error($conn);       
    }    
}

if (isset($_POST['uploadfile'])){
       
    $target="../../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='medication';
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
                                    <h5>Medication Management Training Checklist</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add content</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All content</a>
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
                                         <h3>Medication Management Training Checklist</h3>
                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                               <label class="col-form-label">Personnel Name</label>
                                                            <input type="text" name="per_name" class="form-control form-control-normal"
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
                                                            <select name="prescribed" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="prescribed_sucess" value="yes">yes
                                                            <input type="radio" name="prescribed_sucess" value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Able to name a reference to obtain medication information, i.e. approved drug reference book.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="reference" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="reference_sucess" value="yes">yes
                                                            <input type="radio" name="reference_sucess" value="no">no
                                                        </div>
                                                    </div>


                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Able to explain the difference between assisting in self-administration of medication, and medication administration.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="explain1" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="explain_sucess" value="yes">yes
                                                            <input type="radio" name="explain_sucess" value="no">no
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Able to explain procedure for procurement of medication from Pharmacy.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="procedure1" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="procedure_success" value="yes">yes
                                                            <input type="radio" name="procedure_success" value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Verbalize procedure for assisting a participant to self-medicate.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="verbalize" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="verbalize_success" value="yes">yes
                                                            <input type="radio" name="verbalize_success" value="no">no
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Understands the medical terminaology used in assisting in the self administration of medication.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="medical" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="medical_success" value="yes">yes
                                                            <input type="radio" name="medical_success" value="no">no
                                                        </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Verbalizes knowledge of signs, symptoms, and indicators of toxicity of overdose.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="symptom" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="symptom_success" value="yes">yes
                                                            <input type="radio" name="symptom_success" value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Able to verbalize and demonstrate proper use of medication-related forms.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="demonstrate" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="demonstrate_success" value="yes">yes
                                                            <input type="radio" name="demonstrate_success" value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <p>Verbalize proper procedure for storing medication safely.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="safely" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="safely_success" value="yes">yes
                                                            <input type="radio" name="safely_success" value="no">no
                                                        </div>
                                                    </div>
                                                     
                                                      <div class="form-group row">
                                                    <div class="col-sm-12">
                                                           <p>Verbalizes understanding of the proper usage of PRN medication and documentation.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="document" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="document_sucess" value="yes">yes
                                                            <input type="radio" name="document_sucess" value="no">no
                                                        </div>
                                                    </div>
                                                     
                                                      <div class="form-group row">
                                                     <div class="col-sm-12">
                                                           <p>Able to explain procedure for reporting non-compliance, medication errors and adverse side effects.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="compliance" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="complaince_success" value="yes">yes
                                                            <input type="radio" name="compliance_success" value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                     <div class="col-sm-12">
                                                           <p>Explain procedure when resident refuses medication and the responsibilities to inform resident of potential outcome of non-compliance.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="refuses" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="refuse_success" value="yes">yes
                                                            <input type="radio" name="refuse_success" value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                     <div class="col-sm-12">
                                                           <p>Able to verbalize knowledge of the signs & symptoms or circumstances indicating that resident should not take medication and appropriate contact for review and addressing the situation.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="contact" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="contact_success" value="yes">yes
                                                            <input type="radio" name="contact_success" value="no">no
                                                        </div>
                                                    </div>

                                                      <div class="form-group row">
                                                     <div class="col-sm-12">
                                                           <p>Verbalize knowledge of proper response to a medical emergency or Medication error.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <select name="proper" class="form-control">
                                                                <option>Written</option>
                                                                <option>Verbal</option>
                                                                <option>Visual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Completed Successfully</label>
                                                            <br>
                                                            <input type="radio" name="proper_success" value="yes">yes
                                                            <input type="radio" name="proper_success" value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Manager Name</label>
                                                        <input type="text" name="manager_name" class="form-control"
                                                        placeholder="" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Trainer Name</label>
                                                         <input type="text" name="trainer_name" class="form-control"
                                                        placeholder="Enter  cell phone" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Date of Training</label>
                                                        <input type="date" name="dtraining" class="form-control"
                                                        placeholder="(        )" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Time</label>
                                                         <input type="time" name="time_training" class="form-control"
                                                        placeholder="Enter  cell phone" required="">
                                                    </div>
                                                    </div>








                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="add Medication"
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
                                                                    <th>PersonnelName</th>
                                                                    <th>Demonstrates Prescribed</th>
                                                                     <th>Demonstrates Prescribed Success</th>
                                                                    <th> name a reference</th>
                                                                     <th> name a reference</th>
                                                                    <th> name a reference success</th>
                                                                     <th> explain the difference</th>
                                                                    <th> explain the difference success</th>
                                                                     <th>procedure for procurement</th>
                                                                    <th>procedure for procurement success</th>
                                                                     <th>Verbalize procedure</th>
                                                                    <th>Verbalize procedure success</th>
                                                                     <th>Understands the medical terminaology</th>
                                                                    <th>Understands the medical terminaology success</th>
                                                                     <th>knowledge of signs, symptoms</th>
                                                                    <th>knowledge of signs, symptoms success</th>
                                                                     <th>demonstrate proper use</th>
                                                                    <th>demonstrate proper use success</th>
                                                                     <th>procedure for storing medication safely</th>
                                                                    <th>procedure for storing medication safely success</th>
                                                                     <th>PRN medication and documentation</th>
                                                                    <th>PRN medication and documentation success</th>
                                                                    <th>reporting non-compliance</th>
                                                                    <th>reporting non-compliance success</th>
                                                                     <th>resident refuses medication</th>
                                                                    <th>resident refuses medication success</th>
                                                                     <th> appropriate contact for review </th>
                                                                    <th> appropriate contact for review  success</th>
                                                                     <th>proper response to a medical</th>
                                                                    <th>proper response to a medical success</th>
                                                                     <th>Manager Name</th>
                                                                     <th>Trainer Name</th>
                                                                    <th>Date of Training</th>
                                                                     <th> Time (h:mm) </th>
                                                                    
                                                                    <th>sign</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM medication ");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['per_name'] ; ?></td>
                                                                    <td><?php echo $row['prescribed'] ; ?></td>
                                                                    <td><?php echo $row['prescribed_sucess'] ; ?></td>
                                                                    <td><?php echo $row['reference'] ; ?></td>
                                                                    <td><?php echo $row['reference_sucess'] ; ?></td>
                                                                    <td><?php echo $row['explain1'] ; ?></td>
                                                                    <td><?php echo $row['explain_sucess'] ; ?></td>
                                                                    <td><?php echo $row['procedure1'] ; ?></td>
                                                                    <td><?php echo $row['procedure_success'] ; ?></td>
                                                                    <td><?php echo $row['verbalize'] ; ?></td>
                                                                    <td><?php echo $row['verbalize_success'] ; ?></td>
                                                                    <td><?php echo $row['medical'] ; ?></td>
                                                                    <td><?php echo $row['medical_sucess'] ; ?></td>
                                                                    <td><?php echo $row['symptom'] ; ?></td>
                                                                    <td><?php echo $row['symptom_sucess'] ; ?></td>
                                                                    <td><?php echo $row['demonstrate'] ; ?></td>
                                                                    <td><?php echo $row['demonstrate_success'] ; ?></td>
                                                                    <td><?php echo $row['safely'] ; ?></td>
                                                                    <td><?php echo $row['safely_success'] ; ?></td>
                                                                    <td><?php echo $row['document'] ; ?></td>
                                                                    <td><?php echo $row['document_sucess'] ; ?></td>
                                                                    <td><?php echo $row['compliance'] ; ?></td>

                                                                <td><?php echo $row['compliance_success'] ; ?></td>
                                                                    <td><?php echo $row['refuses'] ; ?></td>
                                                                    <td><?php echo $row['refuse_sucess'] ; ?></td>
                                                                    <td><?php echo $row['contact'] ; ?></td>
                                                                    <td><?php echo $row['contact_sucess'] ; ?></td>
                                                                    <td><?php echo $row['proper'] ; ?></td>
                                                                    <td><?php echo $row['proper_sucess'] ; ?></td>
                                                                    <td><?php echo $row['manager_name'] ; ?></td>
                                                                    <td><?php echo $row['trainer_name'] ; ?></td>
                                                                    <td><?php echo $row['dtraining'] ; ?></td>
                                                                    <td><?php echo $row['time_training'] ; ?></td>
                                                                  
                                                                    <td><a class="btn btn-success" href="medicationsign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="medicationprint.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delmedication=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this procedure review.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="medicationupdate.php?updatemedication=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='medication' AND user_id=$user_id");
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