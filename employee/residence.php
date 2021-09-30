<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
    
    $representative=$_POST['representative'];
    $resident=$_POST['resident'];
    $day_admission=$_POST['day_admission'];
    $date_admission=$_POST['date_admission'];
     $fees_house=$_POST['fees_house'];


    $sql=mysqli_query($conn,"INSERT INTO residence(representative,resident,day_admission,date_admission,fees_house,user_id) VALUES ('$representative','$resident','$day_admission','$date_admission','$fees_house','$user_id')");
    if ($sql) {
        $successmessage .='New Residency saved, Successefully';    
    }
    else {
        $errormessage .='New Residency failed, try Again';     
    }    

}
if (isset($_POST['uploadfile'])){
       
    $target="../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='residence';
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
                                    <h5>RESIDENCY AGREEMENT</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Residency</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Residency</a>
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
                                                            <label class=" col-form-label">Representative</label>
                                                            <input type="text" name="representative" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                      
                                                        
                                                    </div>
                                                   <div class="form-group row">
                                                        
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident’s name</label>
                                                            <input type="text" name="resident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                           <div class="col-sm-6">
                                                            <label class=" col-form-label">Day of Admission</label>
                                                            <input type="text" name="day_admission" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date of Admission</label>
                                                            <input type="date" name="date_admission" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        
                                                    </div>

                                                     <div class="form-group row">
                                                         <div class="col-sm-12">
                                                             <h5>Monthly Fees and Service Provided  </h5>
                                                            <label class=" col-form-label">Fees for Housing</label>
                                                            <input type="text" name="fees_house" class="form-control form-control-normal"
                                                            placeholder="$">
                                                        </div>
                                                        <div class="col-sm-12">
                                                          
                                                            <p>The fees for housing and basic services are $___________ per month.  Basic services include the following: 
                                                   1.  A room with basic furnishings including single bed, storage space for clothing, private storage space for personal effects, window covers, and a bedside lamp. 
                                                   <br>
                                              2.  Use of all common areas. <br>
                                              3.  General housekeeping and linen and laundry service as needed. <br>
                                              4.  Daily supervision 24 hours per day. <br>
                                              5.  Three meals plus three snacks daily. <br>
                                              6.  Monitoring of medications and assistance and/or administration of medications as directed in the service plan. <br>
                                              7.  Supervision of activities of daily living (eating, bathing, dressing, etc.) as required. 
                                              <br>
                                              8.  Recreational activities and supplies including daily newspapers, current magazines, and other reading materials. <br>
                                      9.  Physician coordination as required. <br>
                                      10. Other arrangements as determined by the resident, the representative, and our family. 
                                      <br>
                                      The first month rent is due upon move in, and is not refundable and the next month’s payment will be pro-rated as necessary. In the event of a temporary absence from the home, ______% of all monthly fees shall continue if the resident wishes to retain his or her room. This agreement shall be on a month—to-month basis. The therapeutic home shall provide at least 30 day written notice prior to the effective date of any change in a fee or charge, except when a resident’s service needs change as documented in their service plan. 
</p>
                                                            <label  class=" col-form-label">Additional Services at Additional Costs </label>

                                                            <p><span style="text-decoration: underline;">1. Service Plans (as required by the State OBHL Department) <br>
                                                        2.  Optional Beautician Services: (Haircuts, Permanent, Manicure, Pedicures, etc.) <br>
                                                        3.  Additional Health Care Professionals: (optional)<br> 
                                                        o   Podiatrist <br>
                                                        o   On-Call Physician <br>
                                                        o   Nursing Service <br>
                                                        o   Others <br>
                                                      </p>
                                                      <p>Residency Agreement — page 2 <br>
The cost for these services may vary, however the representative will be notified of the cost prior to authorization of service. Acquisition of personal care items will be the responsibility of the resident or their representative. Medications, special diet supplies (such as Ensure), and personal care items for the resident should be provided by the resident or their representative. Personal care items for the resident should include incontinence supplies, hair brush, comb, toothbrush, toothpaste, shampoo, conditioner (if used), and any lotions the resident would use. If these items are not provided, the home will provide them anti the resident or their representative will be charged for the items as well as a service charge of 
Security Deposit <br>
In addition to the monthly costs, a security deposit in the amount of $_______ is due at the time that the room is held for the resident. The resident or their representative must give the company 30 days written notice prior to intended move out or the remainder of the month’s rent and the security deposit will be forfeited not to exceed 30 days. This requirement will be suspended in the event of the resident’s death, a change in health that requires immediate relocation, or in the event of abuse, neglect or exploitation or conditions of imminent danger to life, health or safety of the resident by the home. The following deductions may be taken from the deposit: (1) Damages to property caused by the resident, excluding normal wear and tear; (2) A fee or charge incurred by the resident; or (3) Documented in compliance with the residency agreement. 
Resident Responsibilities and Obligations<br> 
Statements will be issued monthly. Monthly fees and/or charges are due on or before the 1st of the month. Payments made after the 5th of each month will be subject to a late fee of 1% for each day after the 5th• If payment is not received by the 15th day of the month, the company will give written notice of intent to terminate this contract and the resident will need to be removed from the premises within fourteen (14) days of the notice. At the time of move out, all mounts and fees will be due immediately. In the event that the resident is not moved and/or the amounts due are not paid, the company reserves the right to have the resident transported to the residence of the responsible party, or place the resident in the care of Adult Protective Services, and take legal action to receive funds. AL that time, any costs for transportation of the resident and/or for the collection of fees and charges, as well as the fees and charges due, shall be deducted from the security deposit. Any costs not covered by the security deposit will be included in a legal suit. 
The resident and/or responsible party agrees to abide by all house rules and contract rules. The resident and/or responsible party agrees to pay for any damages that occur to the property as a result of the resident’s direct acts or negligence. Prior to or upon admission, the resident or their representative shall receive a copy of the house rules along with the resident rights. These rules and rights shall be discussed with and signed by the resident and/or their representative. 
2 <br>
Residency Agreement — page 3 
The resident may bring in personal items, furniture, and decorations as long as they are approved by the administration. All personal property of the resident is at the resident’s own risk. The company will not be held responsible for lost, stolen, or damaged property. 
Prior to admission and annually thereafter, each prospective resident shall provide evidence of being free from pulmonary tuberculosis. Evidence shall consist of a report of a negative Mantoux skin test taken within six months of submitting the report, or a written statement from the physician indicating that following the evaluation of a chest x-ray, the person was determined to be free from pulmonary tuberculosis. <br>
Termination of the Residency Agreement & Additional Refund. Policies <br>
A residency agreement may be terminated due to any of the following reasons: <br>
1. The home may terminate a resident’s residency agreement without notice if: <br>
a) The resident exhibits behavior that is an immediate threat to the health and safety of the residents and other individuals in the assisted living facility, <br>
b) The resident’s urgent medical or health needs require immediate transfer to another health care institution, or <br>
c) The resident’s care and service needs exceed the services the assisted living facility is licensed to provide. <br>
2. The home may terminate a resident’s residency agreement after providing fourteen (14) days written notice to a resident or the resident’s representative for one of the following reasons:<br> 
a) Documentation of failure to pay fees or charges, <br>
b) Documentation of the resident’s non-compliance with the residency agreement or Internal Facility Requirements (House Rules) <br>
3. Except as noted above, the home shall not terminate a resident’s residency agreement without providing the resident or the resident’s representative 30 days written notice. <br>
4. A resident or the resident’s representative may terminate the resident’s residency agreement without notice due to the following, as substantiated by a government agency: abuse, neglect and exploitation, or conditions of imminent danger to life, health, or safety. <br>
5. A resident or the resident’s representative may terminate the resident’s residency agreement after providing fourteen (14) days written notice to’ the home for documentation of the home’s failure to comply with the resident’s service plan or residency agreement. <br>
6. Except as noted above, the resident shall not terminate a residency agreement without providing the facility 30 days written notice. Notice may be sent to the address above. 
Residency Agreement- page 4 <br>
7. The home shall include in a written notice of termination the reason for termination, the effective date of termination, the resident’s right to grieve the termination, the assisted living facility’s grievance procedure, and the 
facility’s refund policy. <br>
8. Upon issuing notice of termination, the home shall provide a copy of the resident’s service plan, a copy of the freedom from TB statement, and phone numbers and addresses of the local Area Agency on Aging and DES Long Term Care Ombudsman. <br>
9. The facility shall not request or retain fees as follows: 
a) If a resident dies or if a resident or representative terminates residency for abuse, neglect, exploitation, or conditions of imminent danger to life, health, or safety (as substantiated by a governmental agency), the facility shall not request or retain fees after the date of the resident’s death or termination of residency; <br>
b) If 14-day notice is given by the facility or the resident representative as allowed above, the facility shall not request or retain fees for more than 14 days from the date the written notice was received by the assisted living facility or by the resident/representative; <br>
c) For reasons other than identified here, the facility shall not request or retain fees for more than 30 days after the date of termination of residency. <br>
10. In the event that a resident is not removed from a home by the date listed on the termination agreement, or by the requested date of termination by the resident and/or their representative, the resident and/or their representative will be in violation of this agreement and any daily charges or costs incurred by the facility will be deducted from the security deposit and/or billed to the resident and/or their representative. <br>
11. Within 30 days after termination, the home shall give the resident, the representative, or the resident’s relatives the following: <br>
a) A written statement that includes the disposition of the resident’s personal property; an accounting of all fees, resident personal funds, or deposits owed to the resident; and an accounting of any deduction from the fees or deposits; <br>
b) All fees, resident personal funds, or deposits as required by this section. 
12. Upon termination of the residency agreement, any monthly fees paid for time following the termination will be refunded as follows: <br>
a) Proration of the number of days the resident stayed in the facility for that particular month that the resident has paid in advance. <br>

</p>
                                                        
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
                                                            <th>Representative</th>
                                                            <th>Resident Name</th>
                                                           <th>Day of Admission</th>
                                                            <th>Date of Admission</th>
                                                             <th>Fees for Housing</th>
                                                            
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
                                                             <td><?php echo $row['day_admission']; ?></td>
                                                            <td><?php echo $row['date_admission']; ?></td>
                                                            <td><?php echo $row['fees_house']; ?></td>
                                                          
                                                            <td><a class="btn btn-danger"  href="delete.php?delresidence=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this reciept of information.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="residenceupdate.php?updateresidence=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-primary"  href="residencesign.php?id=<?php echo $row['id']; ?> "  id="red">Sign</a></td>
                                                            <td><a class="btn btn-success"  href="residenceprint.php?printresidence=<?php echo $row['id']; ?>"  id="red">Print</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='residence' AND user_id=$user_id");
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