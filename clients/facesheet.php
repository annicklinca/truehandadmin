<?php
include 'nav.php';
$user_id=$user_id;

if (isset($_POST['add'])){
    
    $revisedate=$_POST['revisedate'];
    $printdate=$_POST['printdate'];
    $casemanager=$_POST['casemanager'];
    $title=$_POST['title'];
    $site=$_POST['site'];
    $phonenumber=$_POST['phonenumber'];
    $residentname=$_POST['residentname'];
    $name=$_POST['name'];
    $ssn=$_POST['ssn'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $gender1=$_POST['gender1'];
    $ssn1=$_POST['ssn1'];
    $dob2=$_POST['dob2'];
    $address=$_POST['address'];
    $apt=$_POST['apt'];
    $az=$_POST['az'];
    $phone2=$_POST['phone2'];
    $aka=$_POST['aka'];
    $intakedate=$_POST['intakedate'];
    $printlanguage=$_POST['printlanguage'];
    $ethn=$_POST['ethn'];
    $haircolor=$_POST['haircolor'];
    $status=$_POST['status'];
    $eyecolor=$_POST['eyecolor'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $marks=$_POST['marks'];
    $phase=$_POST['phase'];
    $diagnosis=$_POST['diagnosis'];
    $mh_status=$_POST['mh_status'];
    $needasst=$_POST['needasst'];
    $cotdate=$_POST['cotdate'];
    $cotto=$_POST['cotto'];
    $directive=$_POST['directive'];
    $executed=$_POST['executed'];
    $last_hosp=$_POST['last_hosp'];
    $hosp_name=$_POST['hosp_name'];
    $reactions=$_POST['reactions'];
    $insurance=$_POST['insurance'];
    $policy=$_POST['policy'];
    $healthplan=$_POST['healthplan'];
    $healthid=$_POST['healthid'];
    $ph=$_POST['ph'];
    $ahcc_id=$_POST['ahcc_id'];
    $eligstatus=$_POST['eligstatus'];
    $effrom=$_POST['effrom'];
    $effto=$_POST['effto'];
    $copay_percentage=$_POST['copay_percentage'];
    $copay_category=$_POST['copay_category'];
    $monthly_income=$_POST['monthly_income'];
    $member_parent=$_POST['member_parent'];
    $phh=$_POST['phh'];
    $w=$_POST['w'];
    $cell=$_POST['cell'];
   $addresses=$_POST['addresses'];
    $guardian=$_POST['guardian'];
    $phh1=$_POST['phh1'];
    $w1=$_POST['w1'];
    $cell1=$_POST['cell1'];
    $address2=$_POST['address2'];
    $emerg_contact=$_POST['emerg_contact'];
    $phh2=$_POST['phh2'];
    $w2=$_POST['w2'];
    $cell3=$_POST['cell3'];
    $address4=$_POST['address4'];
    $designrep=$_POST['designrep'];
    $phh3=$_POST['phh3'];
    $w3=$_POST['w3'];
    $cell7=$_POST['cell7'];
    $address5=$_POST['address5'];
    $pyschiatrist=$_POST['pyschiatrist'];
    $phh4=$_POST['phh4'];
    $w4=$_POST['w4'];
    $cell4=$_POST['cell4'];
    $parole=$_POST['parole'];
    $ph1=$_POST['ph1'];
    $fax=$_POST['fax'];
    $member_pcp=$_POST['member_pcp'];
    $ph2=$_POST['ph2'];
    $fax1=$_POST['fax1'];
    $school=$_POST['school'];
    $ph3=$_POST['ph3'];
    $fax2=$_POST['fax2'];
    $pract=$_POST['pract'];
    $ph5=$_POST['ph5'];
    $fax4=$_POST['fax4'];
    $prim=$_POST['prim'];
    $ph6=$_POST['ph6'];
    $e=$_POST['e'];
    $fax5=$_POST['fax5'];
    $name3=$_POST['name3'];
    $eds_id=$_POST['eds_id'];
    
    
    

    $sql=mysqli_query($conn,"INSERT INTO facesheet VALUES ('',
        '$revisedate',
        '$printdate',
        '$casemanager',
        '$title',
        '$site',
        '$phonenumber',
        '$residentname',
        '$ssn',
        '$gender',
        '$dob',
        '$name',
        '$gender1',
        '$ssn1',
        '$dob2',
        '$address',
        '$apt',
        '$az',
        '$phone2',
        '$aka',
        '$intakedate',
        '$printlanguage',
        '$ethn',
        '$haircolor',
        '$status',
        '$eyecolor',
        '$weight',
        '$height',
        '$marks',
        '$phase',
        '$diagnosis',
        '$mh_status',
        '$needasst',
        '$cotdate',
        '$cotto',
        '$directive',
        '$executed',
        '$last_hosp',
        '$hosp_name',
        '$reactions',
        '$insurance',
        '$policy',
        '$healthplan',
        '$healthid',
        '$ph',
        '$ahcc_id',
        '$eligstatus',
        '$effrom',
        '$effto',
        '$copay_percentage',
        '$copay_category',
        '$monthly_income',
        '$member_parent',
        '$phh',
        '$w',
        '$cell',
        'addresses',
        '$guardian',
        '$phh1',
        '$w1',
        '$cell1',
        '$address2',
        '$emerg_contact',
        '$phh2',
        '$w2',
        '$cell3',
        '$address4',
        '$designrep',
        '$phh3',
        '$w3',
        '$cell7',
        '$address5',
        '$pyschiatrist',
        '$phh4',
        '$w4',
        '$cell4',
        '$parole',
        '$ph1',
        '$fax',
        '$member_pcp',
        '$ph2',
        '$fax1',
        '$school',
        '$ph3',
        '$fax2',
        '$pract',
        '$ph5',
        '$fax4',
        '$prim',
        '$ph6',
        '$e',
        '$fax5',
        '$name3',
        '$eds_id','',
        '$user_id'

        
   
    )");

    if ($sql) {
        $successmessage .='Add  facesheet Successefully';	
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
                                    <h5>Facesheet</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Facesheet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Facesheet </a>
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
                                     <form method="post" action="" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">FACE SHEET</span>
                                                  </div>  
                                          
                                                </div>
                                                <div class="form-group row">
                                                    
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Revised Date</label>
                                                        <input type="date" name="revisedate" class="form-control"
                                                        placeholder="Enter revised date" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Print Date</label>
                                                        <input type="date" name="printdate" class="form-control"
                                                        placeholder="Enter print date" required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label text-dark">Case Manager</label>
                                                         <input type="text" name="casemanager" class="form-control"
                                                        placeholder="Enter name " required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Title</label>
                                                        <input type="text" name="title" class="form-control" required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Site</label>
                                                        <input type="text" name="site" class="form-control"
                                                        placeholder="Type your site in Placeholder" required="">
                                                    </div>
                                                   
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Phone number</label>
                                                        <input type="text" name="phonenumber" class="form-control"
                                                        placeholder="Type your phonenumber in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Resident Name</label>
                                                        <input type="text" name="residentname" class="form-control"
                                                        placeholder="Type your resident name" required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">SSN</label>
                                                        <input type="text" name="ssn" class="form-control"
                                                        placeholder="Type your ssn in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Gender</label>
                                                       <select name="gender" class="form-control">
                                                           <option>Female</option>
                                                           <option>male</option>
                                                       </select>
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">DOB</label>
                                                        <input type="date" name="dob" class="form-control"
                                                        placeholder="Type your dob in Placeholder" required="">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">Alternate AHCCCS****</span>
                                                  </div>  
                                          
                                                </div>
                                          
                                                <div class="form-group row">
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Name</label>
                                                       <input type="type" name="name" class="form-control"
                                                        placeholder="Type your dob in Placeholder" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label">Gender</label>
                                                       <select name="gender1" class="form-control">
                                                           <option>Female</option>
                                                           <option>male</option>
                                                       </select>
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">SSN</label>
                                                        <input type="type" name="ssn1" class="form-control"
                                                        placeholder="Type your dob in Placeholder" required="">
                                                    </div>
                                                       
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">DOB</label>
                                                        <input type="date" name="dob2" class="form-control"
                                                        placeholder="Type your dob in Placeholder" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label">Address</label>
                                                         <input type="text" name="address" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Apt</label>
                                                        <input type="text" name="apt" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                      <div class="col-sm-6">
                                                        <label class="col-form-label">AZ</label>
                                                         <input type="text" name="az" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">phone</label>
                                                        <input type="text" name="phone2" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">AKA</label>
                                                         <input type="text" name="aka" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Intake Date</label>
                                                        <input type="date" name="intakedate" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Print Language</label>
                                                         <input type="text" name="printlanguage" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Ethn</label>
                                                        <input type="text" name="ethn" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Hair Color</label>
                                                         <input type="text" name="haircolor" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Marital Status</label>
                                                      <select name="status" class="form-control">
                                                          <option>married</option>
                                                          <option>single</option>
                                                          <option>divorced</option>
                                                      </select>
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Eye color</label>
                                                         <input type="text" name="eyecolor" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Weight</label>
                                                        <input type="text" name="weight" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Height</label>
                                                         <input type="text" name="height" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Identifying Marks</label>
                                                        <input type="text" name="marks" class="form-control"
                                                        placeholder="Type your marks in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Phase</label>
                                                         <input type="text" name="phase" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Diagnosis</label>
                                                        <input type="text" name="diagnosis" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Legal MH Status</label>
                                                         <input type="text" name="mh_status" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Need Special Asst</label>
                                                        <input type="text" name="needasst" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                         <div class="col-sm-6">
                                                        <label class="col-form-label">COT Date</label>
                                                         <input type="date" name="cotdate" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">To</label>
                                                        <input type="date" name="cotto" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                      <div class="col-sm-6">
                                                        <label class="col-form-label">Advance Directive</label>
                                                         <input type="text" name="directive" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Date Executed</label>
                                                        <input type="date" name="executed" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Last Hosp. Date</label>
                                                         <input type="date" name="last_hosp" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Hospital Name</label>
                                                        <input type="text" name="hosp_name" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Medication Allergies/ Adverse Reactions</label>
                                                         <input type="text" name="reactions" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Insurance </label>
                                                        <input type="text" name="insurance" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Policy#</label>
                                                         <input type="text" name="policy" class="form-control"
                                                        placeholder="Type your policy in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Health Plan </label>
                                                        <input type="text" name="healthplan" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Health ID</label>
                                                         <input type="text" name="healthid" class="form-control"
                                                        placeholder="Type your policy in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">PH# </label>
                                                        <input type="text" name="ph" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">AHCCCS ID </label>
                                                        <input type="text" name="ahcc_id" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Elig Status</label>
                                                         <input type="text" name="eligstatus" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">EffFrom </label>
                                                        <input type="date" name="effrom" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">To</label>
                                                         <input type="date" name="effto" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Copay Percentage </label>
                                                        <input type="text" name="copay_percentage" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Copay Category</label>
                                                         <input type="text" name="copay_category" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Adjusted Monthly Income </label>
                                                        <input type="text" name="monthly_income" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Member Parent</label>
                                                         <input type="text" name="member_parent" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph#h </label>
                                                        <input type="text" name="phh" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-form-label">Address </label>
                                                         <input type="text" name="addresses" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                      <div class="col-sm-3">
                                                        <label class="col-form-label">Mbr. Guardian</label>
                                                         <input type="text" name="guardian" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph#h </label>
                                                        <input type="text" name="phh1" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w1" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell1" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-form-label">Address </label>
                                                         <input type="text" name="address2" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Emerg. Contact </label>
                                                        <input type="text" name="emerg_contact" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label" >Ph#h </label>
                                                        <input type="text" name="phh2" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w2" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell3" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-form-label">Address </label>
                                                         <input type="text" name="address4" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Design Rep </label>
                                                        <input type="text" name="designrep" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph#h </label>
                                                        <input type="text" name="phh3" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w3" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell7" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-form-label">Address </label>
                                                         <input type="text" name="address5" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Psychiatrist </label>
                                                        <input type="text" name="pyschiatrist" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph#h </label>
                                                        <input type="text" name="phh4" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">e</label>
                                                         <input type="text" name="w4" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell4" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Prob/Parole </label>
                                                        <input type="text" name="parole" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph1" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Member PCP </label>
                                                        <input type="text" name="member_pcp" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph2" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax1" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                    <label class="col-form-label">Member School </label>
                                                        <input type="text" name="school" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph3" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax2" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                    
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Nurse Pract </label>
                                                        <input type="text" name="pract" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph5" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax4" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Prim Provider </label>
                                                        <input type="text" name="prim" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph6" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">e</label>
                                                         <input type="text" name="e" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax5" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                    <br>
                                                    <br>
                                                       <div class="col-sm-12">
                                                        <label class="col-form-label">Name</label>
                                                         <input type="text" name="name3" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                       <div class="col-sm-12">
                                                        <label class="col-form-label">EDS ID</label>
                                                         <input type="text" name="eds_id" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>

                                                    

                                                   </div>

                                 <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="add Facesheet"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>                                </form>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class=" table-border-style">
                                                   <div class="table-responsive">
                                                        <table id="zero_config" class="table table-striped table-bordered no-wrap table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Revised Date</th>
                                                            <th>Print Date</th>
                                                            <th>Case Manager</th>
                                                            <th>Title</th>
                                                            <th>Site</th>
                                                            <th>Phone number</th>
                                                            <th>Resident Name</th>
                                                            <th>SSN</th>
                                                            <th>Gender</th>
                                                            <th>DOB</th>
                                                            <th>Alternate AHCCCS Name</th>
                                                            <th>Alternate AHCCCS Gender</th>
                                                            <th>Alternate AHCCCS SSN</th>
                                                            <th>Alternate AHCCCS DOB</th>
                                                            <th>Address</th>
                                                            <th>APT</th>
                                                            <th>AZ</th>
                                                            <th>Phone</th>
                                                            <th>AKA</th>
                                                            <th>Intake Date</th>
                                                            <th>Print Language</th>
                                                            <th>Ethn</th>
                                                            <th>Marital Status</th>
                                                            <th>Hair Color</th>
                                                            <th>Eye color</th>
                                                            <th>Weight</th>
                                                            <th>Height</th>
                                                            <th>Identifying Marks</th>
                                                            <th>Phase</th>
                                                            <th>Diagnosis</th>
                                                            <th>Legal MH Status</th>
                                                            <th>Need Special Asst</th>
                                                            <th>COT Date</th>
                                                            <th>COT To</th>
                                                            <th>Advance Directive</th>
                                                            <th>Date Executed</th>
                                                            <th>Last Hosp. Date</th>
                                                            <th>Hospital Name</th>
                                                         <th>Medication Allergies/ Adverse Reactions</th>
                                                            <th>Insurance</th>
                                                            <th>Policy#</th>
                                                            <th>Health Plan</th>
                                                            <th>Health ID</th>
                                                            <th>PH# </th>
                                                            <th>AHCCCS ID</th>
                                                            <th>Elig Status</th>
                                                            <th>EffFrom</th>
                                                            <th>Eff To</th>
                                                            <th>Copay Percentage</th>
                                                            <th>Copay Category</th>
                                                             <th>Adjusted Monthly Income</th>
                                                            <th>Member Parent</th>
                                                            <th>Member Parent Ph#h</th>
                                                            <th>Member Parent W</th>
                                                            <th>Member Parent Cell</th>
                                                             <th>Member Parent Address</th>
                                                            <th>Mbr. Guardian</th>
                                                            <th>Mbr. Guardian Ph#h</th>
                                                            <th>Mbr. Guardian W</th>
                                                            <th>Mbr. Guardian Cell</th>
                                                            <th>Mbr. Guardian Address</th>
                                                            <th>Emerg. Contact</th>
                                                            <th>Emerg. Contact Ph#h</th>
                                                            <th>Emerg. Contact W</th>
                                                            <th>Emerg. Contact Cell</th>
                                                            <th>Emerg. Contact Address</th>
                                                            <th>Design Rep</th>
                                                            <th>Design Rep Ph#h</th>
                                                            <th>Design Rep W</th>
                                                            <th>Design Rep Cell </th>
                                                            <th>Design Rep Address</th>
                                                            <th>Psychiatrist</th>
                                                            <th>Psychiatrist Ph#h</th>
                                                            <th>Psychiatrist e</th>
                                                            <th>Psychiatrist Cell</th>
                                                            <th>Prob/Parole</th>
                                                            <th>Prob/Parole Ph</th>
                                                            <th>Prob/Parole Fax</th>
                                                            <th>Member PCP</th>
                                                            <th>Member PCP Ph</th>
                                                            <th>Member PCP Fax</th>
                                                            <th>Member School</th>
                                                            <th>Member School Ph</th>
                                                            <th>Member School Fax</th>
                                                            <th>Nurse Pract</th>
                                                            <th>Nurse Pract Ph</th>
                                                            <th>Nurse Pract Fax</th>
                                                            <th>Prim Provider</th>
                                                            <th>Prim Provider Ph</th>
                                                            <th>Prim Provider e</th>
                                                            <th>Prim Provider Fax</th>
                                                            <th>Name</th>
                                                            <th>EDS ID</th>
                                                            
                                                           
                                                         
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Print</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $sel=mysqli_query($conn,"SELECT * FROM facesheet WHERE user_id=$user_id");
                                                        while ($row=mysqli_fetch_array($sel)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo $row['revisedate']; ?></td>
                                                            <td><?php echo $row['printdate']; ?></td>
                                                            <td><?php echo $row['casemanager']; ?></td>
                                                            <td><?php echo $row['title']; ?></td>
                                                            <td><?php echo $row['site']; ?></td>
                                                            <td><?php echo $row['phonenumber']; ?></td>
                                                            <td><?php echo $row['residentname']; ?></td>
                                                            <td><?php echo $row['ssn']; ?></td>
                                                            <td><?php echo $row['gender']; ?></td>
                                                            <td><?php echo $row['dob']; ?></td>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['gender1']; ?></td>
                                                            <td><?php echo $row['ssn1']; ?></td>
                                                            <td><?php echo $row['dob2']; ?></td>
                                                            <td><?php echo $row['address']; ?></td>
                                                            <td><?php echo $row['apt']; ?></td>
                                                            <td><?php echo $row['az']; ?></td>
                                                            <td><?php echo $row['phone2']; ?></td>
                                                            <td><?php echo $row['aka']; ?></td>
                                                            <td><?php echo $row['intakedate'] ; ?></td>
                                                            <td><?php echo $row['printlanguage'] ; ?></td>
                                                            <td><?php echo $row['ethn'] ; ?></td>
                                                            <td><?php echo $row['status'] ; ?></td>
                                                            <td><?php echo $row['haircolor'] ; ?></td>
                                                            <td><?php echo $row['eyecolor'] ; ?></td>
                                                            <td><?php echo $row['weight'] ; ?></td>
                                                            <td><?php echo $row['height'] ; ?></td>
                                                            <td><?php echo $row['marks'] ; ?></td>
                                                            <td><?php echo $row['phase'] ; ?></td>
                                                            <td><?php echo $row['diagnosis'] ; ?></td>
                                                            <td><?php echo $row['mh_status'] ; ?></td>
                                                            <td><?php echo $row['needasst']; ?></td>
                                                            <td><?php echo $row['cotdate']; ?></td>
                                                            <td><?php echo $row['cotto']; ?></td>
                                                            <td><?php echo $row['directive'] ; ?></td>
                                                            <td><?php echo $row['executed'] ; ?></td>
                                                            <td><?php echo $row['last_hosp'] ; ?></td>
                                                            <td><?php echo $row['hosp_name'] ; ?></td>
                                                            <td><?php echo $row['reactions'] ; ?></td>
                                                            <td><?php echo $row['insurance'] ; ?></td>
                                                            <td><?php echo $row['policy'] ; ?></td>
                                                            <td><?php echo $row['healthplan'] ; ?></td>
                                                            <td><?php echo $row['healthid'] ; ?></td>
                                                            <td><?php echo $row['ph'] ; ?></td>
                                                            <td><?php echo $row['ahcc_id'] ; ?></td>
                                                            <td><?php echo $row['eligstatus'] ; ?></td>
                                                            <td><?php echo $row['effrom'] ; ?></td>
                                                             <td><?php echo $row['effto'] ; ?></td>
                                                         <td><?php echo $row['copay_percentage'] ; ?></td>
                                                        <td><?php echo $row['copay_category'] ; ?></td>
                                                        <td><?php echo $row['monthly_income'] ; ?></td>
                                                            <td><?php echo $row['member_parent'] ; ?></td>
                                                            <td><?php echo $row['phh'] ; ?></td>
                                                            <td><?php echo $row['w'] ; ?></td>
                                                            <td><?php echo $row['cell'] ; ?></td>
                                                            <td><?php echo $row['addresses'] ; ?></td>
                                                            <td><?php echo $row['guardian'] ; ?></td>
                                                            <td><?php echo $row['phh1']; ?></td>
                                                            <td><?php echo $row['w1']; ?></td>
                                                            <td><?php echo $row['cell1']; ?></td>
                                                            <td><?php echo $row['address2'] ; ?></td>
                                                            <td><?php echo $row['emerg_contact'] ; ?></td>
                                                            <td><?php echo $row['phh2'] ; ?></td>
                                                            <td><?php echo $row['w2'] ; ?></td>
                                                            <td><?php echo $row['cell3'] ; ?></td>
                                                            <td><?php echo $row['address4'] ; ?></td>
                                                            <td><?php echo $row['designrep'] ; ?></td>
                                                            <td><?php echo $row['phh3'] ; ?></td>
                                                            <td><?php echo $row['w3'] ; ?></td>
                                                            <td><?php echo $row['cell7'] ; ?></td>
                                                            <td><?php echo $row['address5'] ; ?></td>
                                                            <td><?php echo $row['pyschiatrist'] ; ?></td>
                                                            <td><?php echo $row['phh4'] ; ?></td>
                                                            <td><?php echo $row['w4'] ; ?></td>
                                                            <td><?php echo $row['cell4'] ; ?></td>
                                                            <td><?php echo $row['parole'] ; ?></td>
                                                            <td><?php echo $row['ph1'] ; ?></td>
                                                            <td><?php echo $row['fax'] ; ?></td>
                                                            <td><?php echo $row['member_pcp']; ?></td>
                                                            <td><?php echo $row['ph2']; ?></td>
                                                            <td><?php echo $row['fax1']; ?></td>
                                                            <td><?php echo $row['school'] ; ?></td>
                                                            <td><?php echo $row['ph3'] ; ?></td>
                                                            <td><?php echo $row['fax2'] ; ?></td>
                                                            <td><?php echo $row['pract'] ; ?></td>
                                                            <td><?php echo $row['ph5'] ; ?></td>
                                                            <td><?php echo $row['fax4'] ; ?></td>
                                                            <td><?php echo $row['prim'] ; ?></td>
                                                            <td><?php echo $row['ph6'] ; ?></td>
                                                            <td><?php echo $row['e'] ; ?></td>
                                                            <td><?php echo $row['fax5'] ; ?></td>
                                                            <td><?php echo $row['name3'] ; ?></td>
                                                            <td><?php echo $row['eds_id'] ; ?></td>
                                                          
                                                <td><a href="delete.php?id=<?php  echo $row['id'] ?>"><span class="btn btn-danger">Delete</span></a></td>
                                                <td><a href="updatefacesheet.php?id=<?php  echo $row['id'] ?>"><span class="btn btn-success">Update</span></a></td>
                                                 <td><a href="printfacesheet.php?id=<?php  echo $row['id'] ?>"><span class="btn btn-primary">Print</span></a></td>
                                                  <td><a href="signfacesheet.php?id=<?php  echo $row['id'] ?>"><span class="btn btn-primary">Sign</span></a></td>
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