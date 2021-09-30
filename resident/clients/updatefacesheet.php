<?php
include 'nav.php';
$user_id=$user_id;
$id=$_GET['id'];

if (isset($_POST['update'])){
    
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
    
    
    

  $sql=mysqli_query($conn,"UPDATE facesheet SET 
    
   revisedate='$revisedate',
    printdate='$printdate',
    casemanager='$casemanager',
    title='$title',
    site='$site',
    phonenumber='$phonenumber',
    residentname='$residentname',
    ssn='$ssn',
    gender='$gender',
    dob='$dob',
    name='$name',
    gender1='$gender1',
    ssn1='$ssn1',
    dob2='$dob2',
    address='$address',
    apt='$apt',
    az='$az',
    phone2='$phone2',
    aka='$aka',
    intakedate='$intakedate',
    printlanguage='$printlanguage',
    ethn='$ethn',
    haircolor='$haircolor',  
    status='$status',
    eyecolor='$eyecolor',
    weight='$weight',
    height='$height',
    marks='$marks',
    phase='$phase',
    diagnosis='$diagnosis',
    mh_status='$mh_status',
    needasst='$needasst',
    cotdate='$cotdate',
    cotto='$cotto',
    directive='$directive',
    executed='$executed',
    last_hosp='$last_hosp',
    hosp_name='$hosp_name',
    reactions='$reactions',
    insurance='$insurance',
    policy='$policy',
    healthplan='$healthplan',
    healthid='$healthid',
    ph='$ph',
    ahcc_id='$ahcc_id',
    eligstatus='$eligstatus',
    effrom='$effrom',
    effto='$effto',
    copay_percentage='$copay_percentage',
    copay_category='$copay_category',
    monthly_income='$monthly_income',
    member_parent='$member_parent',
    phh='$phh',
    w='$w',
    cell='$cell',
   addresses='$addresses',
    guardian='$guardian',
    phh1='$phh1',
    w1='$w1',
    cell1='$cell1',
    address2='$address2',
    emerg_contact='$emerg_contact',
    phh2='$phh2',
    w2='$w2',
    cell3='$cell3',
    address4='$address4',
    designrep='$designrep',
    phh3='$phh3',  
    w3='$w3',
    cell7='$cell7',
    address5='$address5',
    pyschiatrist='$pyschiatrist',
    phh4='$phh4',
    w4='$w4',
    cell4='$cell4',
    parole='$parole',
    ph1='$ph1',
    fax='$fax',
    member_pcp='$member_pcp',
    ph2='$pnh2',
    fax1='$fax1',
    school='$school',
    ph3='$ph3',
    fax2='$fax2',
    pract='$pract',
    ph5='$ph5',
    fax4='$fax4',
    prim='$prim',
    ph6='$ph6',
    e='$e',
    fax5='$fax5',
    name3='$name3',
    eds_id='$eds_id'
    
   
  

 WHERE id='$id';");
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
                                         <?php
                                        if (isset($_GET['id'])) {
                                        $ser_id=$_GET['id'];
                                        $sel=$conn->query("SELECT * from facesheet where id='$ser_id' ");
                                        while($rows=mysqli_fetch_array($sel))
                                         {
                                         ?>
                                                <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">FACE SHEET</span>
                                                  </div>  
                                          
                                                </div>
                                                <div class="form-group row">
                                                    
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Revised Date</label>
                                                        <input type="date" name="revisedate" value="<?php echo $rows['revisedate']; ?>" class="form-control"
                                                        placeholder="Enter revised date" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Print Date</label>
                                                        <input type="date" name="printdate" value="<?php echo $rows['printdate']; ?>" class="form-control"
                                                        placeholder="Enter print date" required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label text-dark">Case Manager</label>
                                                         <input type="text" name="casemanager" value="<?php echo $rows['casemanager']; ?>" class="form-control"
                                                        placeholder="Enter name " required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Title</label>
                                                        <input type="text" name="title" value="<?php echo $rows['title']; ?>" class="form-control" required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Site</label>
                                                        <input type="text" name="site" value="<?php echo $rows['site']; ?>" class="form-control"
                                                        placeholder="Type your site in Placeholder" required="">
                                                    </div>
                                                   
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Phone number</label>
                                                        <input type="text" name="phonenumber" value="<?php echo $rows['phonenumber']; ?>" class="form-control"
                                                        placeholder="Type your phonenumber in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Resident Name</label>
                                                        <input type="text" name="residentname" value="<?php echo $rows['residentname']; ?>" class="form-control"
                                                        placeholder="Type your resident name" required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">SSN</label>
                                                        <input type="text" name="ssn" value="<?php echo $rows['ssn']; ?>" class="form-control"
                                                        placeholder="Type your ssn in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Gender</label>
                                                       <select name="gender" value="<?php echo $rows['gender']; ?>" class="form-control">
                                                           <option>Female</option>
                                                           <option>male</option>
                                                       </select>
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">DOB</label>
                                                        <input type="date" name="dob" value="<?php echo $rows['dob']; ?>" class="form-control"
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
                                                      <input type="text" name="name" value="<?php echo $rows['name']; ?>" class="form-control"
                                                        placeholder="Type your dob in Placeholder" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label">Gender</label>
                                                       <select name="gender1" value="<?php echo $rows['gender1']; ?>" class="form-control">
                                                           <option>Female</option>
                                                           <option>male</option>
                                                       </select>
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">SSN</label>
                                                        <input type="type" name="ssn1" value="<?php echo $rows['ssn1']; ?>" class="form-control"
                                                        placeholder="Type your dob in Placeholder" required="">
                                                    </div>
                                                       
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">DOB</label>
                                                        <input type="date" name="dob2" value="<?php echo $rows['dob2']; ?>" class="form-control"
                                                        placeholder="Type your dob in Placeholder" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label">Address</label>
                                                         <input type="text" name="address" value="<?php echo $rows['address']; ?>" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Apt</label>
                                                        <input type="text" name="apt" value="<?php echo $rows['apt']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                      <div class="col-sm-6">
                                                        <label class="col-form-label">AZ</label>
                                                         <input type="text" name="az" value="<?php echo $rows['az']; ?>" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">phone</label>
                                                        <input type="text" name="phone2" value="<?php echo $rows['phone2']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">AKA</label>
                                                         <input type="text" name="aka" value="<?php echo $rows['aka']; ?>" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Intake Date</label>
                                                        <input type="date" name="intakedate" value="<?php echo $rows['intakedate']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Print Language</label>
                                                         <input type="text" name="printlanguage" value="<?php echo $rows['printlanguage']; ?>" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Ethn</label>
                                                        <input type="text" name="ethn" value="<?php echo $rows['ethn']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Hair Color</label>
                                                         <input type="text" name="haircolor" value="<?php echo $rows['haircolor']; ?>" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Marital Status</label>
                                                      <select name="status" value="<?php echo $rows['status']; ?>" class="form-control">
                                                          <option>married</option>
                                                          <option>single</option>
                                                          <option>divorced</option>
                                                      </select>
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Eye color</label>
                                                         <input type="text" name="eyecolor" value="<?php echo $rows['eyecolor']; ?>" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Weight</label>
                                                        <input type="text" name="weight" value="<?php echo $rows['weight']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Height</label>
                                                         <input type="text" name="height" value="<?php echo $rows['height']; ?>" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Identifying Marks</label>
                                                        <input type="text" name="marks" value="<?php echo $rows['marks']; ?>" class="form-control"
                                                        placeholder="Type your marks in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Phase</label>
                                                         <input type="text" name="phase" value="<?php echo $rows['phase']; ?>" class="form-control"
                                                        placeholder="Type your address in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Diagnosis</label>
                                                        <input type="text" name="diagnosis" value="<?php echo $rows['diagnosis']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Legal MH Status</label>
                                                         <input type="text" name="mh_status" value="<?php echo $rows['mh_status']; ?>" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Need Special Asst</label>
                                                        <input type="text" name="needasst" value="<?php echo $rows['needasst']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                         <div class="col-sm-6">
                                                        <label class="col-form-label">COT Date</label>
                                                         <input type="date" name="cotdate" value="<?php echo $rows['cotdate']; ?>" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">To</label>
                                                        <input type="date" name="cotto" value="<?php echo $rows['cotto']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                      <div class="col-sm-6">
                                                        <label class="col-form-label">Advance Directive</label>
                                                         <input type="text" name="directive" value="<?php echo $rows['directive']; ?>" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Date Executed</label>
                                                        <input type="date" name="executed" value="<?php echo $rows['executed']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Last Hosp. Date</label>
                                                         <input type="date" name="last_hosp" value="<?php echo $rows['last_hosp']; ?>" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Hospital Name</label>
                                                        <input type="text" name="hosp_name" value="<?php echo $rows['hosp_name']; ?>" class="form-control"
                                                        placeholder="Type your apt in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Medication Allergies/ Adverse Reactions</label>
                                                         <input type="text" name="reactions" value="<?php echo $rows['reactions']; ?>" class="form-control"
                                                        placeholder="Type your legal status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Insurance </label>
                                                        <input type="text" name="insurance" value="<?php echo $rows['insurance']; ?>" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Policy#</label>
                                                         <input type="text" name="policy" value="<?php echo $rows['policy']; ?>" class="form-control"
                                                        placeholder="Type your policy in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Health Plan </label>
                                                        <input type="text" name="healthplan" value="<?php echo $rows['healthplan']; ?>" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="col-form-label">Health ID</label>
                                                         <input type="text" name="healthid" value="<?php echo $rows['healthid']; ?>" class="form-control"
                                                        placeholder="Type your policy in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">PH# </label>
                                                        <input type="text" name="ph" value="<?php echo $rows['ph']; ?>" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">AHCCCS ID </label>
                                                        <input type="text" name="ahcc_id" value="<?php echo $rows['ahcc_id']; ?>" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Elig Status</label>
                                                         <input type="text" name="eligstatus" value="<?php echo $rows['eligstatus']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">EffFrom </label>
                                                        <input type="date" name="effrom" value="<?php echo $rows['effrom']; ?>" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">To</label>
                                                         <input type="date" name="effto" value="<?php echo $rows['effto']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Copay Percentage </label>
                                                        <input type="text" name="copay_percentage" value="<?php echo $rows['copay_percentage']; ?>" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Copay Category</label>
                                                         <input type="text" name="copay_category" value="<?php echo $rows['copay_category']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label class="col-form-label">Adjusted Monthly Income </label>
                                                        <input type="text" name="monthly_income" value="<?php echo $rows['monthly_income']; ?>" class="form-control"
                                                        placeholder="Type your insurance in Placeholder" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Member Parent</label>
                                                         <input type="text" name="member_parent" value="<?php echo $rows['member_parent']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph#h </label>
                                                        <input type="text" name="phh" value="<?php echo $rows['phh']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w" value="<?php echo $rows['w']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell" value="<?php echo $rows['cell']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-form-label">Address </label>
                                                         <input type="text" name="addresses" value="<?php echo $rows['address2']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                      <div class="col-sm-3">
                                                        <label class="col-form-label">Mbr. Guardian</label>
                                                         <input type="text" name="guardian" value="<?php echo $rows['guardian']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph#h </label>
                                                        <input type="text" name="phh1" value="<?php echo $rows['phh1']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w1" value="<?php echo $rows['w1']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell1" value="<?php echo $rows['cell1']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-12">
                                                        <label class="col-form-label">Address </label>
                                                         <input type="text" name="address2" value="<?php echo $rows['address2']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Emerg. Contact </label>
                                                        <input type="text" name="emerg_contact" value="<?php echo $rows['emerg_contact']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label" >Ph#h </label>
                                                        <input type="text" name="phh2" value="<?php echo $rows['phh2']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w2" value="<?php echo $rows['w2']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell3" value="<?php echo $rows['cell3']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-form-label">Address </label>
                                                         <input type="text" name="address4" value="<?php echo $rows['address4']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Design Rep </label>
                                                        <input type="text" name="designrep" value="<?php echo $rows['designrep']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph#h </label>
                                                        <input type="text" name="phh3" value="<?php echo $rows['phh3']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w3" value="<?php echo $rows['w3']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell7" value="<?php echo $rows['cell7']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="col-form-label">Address </label>
                                                         <input type="text" name="address5" value="<?php echo $rows['address5']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Psychiatrist </label>
                                                        <input type="text" name="pyschiatrist" value="<?php echo $rows['pyschiatrist']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph#h </label>
                                                        <input type="text" name="phh4" value="<?php echo $rows['phh4']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">W</label>
                                                         <input type="text" name="w4" value="<?php echo $rows['w4']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Cell </label>
                                                        <input type="text" name="cell4" value="<?php echo $rows['cell4']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Prob/Parole </label>
                                                        <input type="text" name="parole" value="<?php echo $rows['parole']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph1" value="<?php echo $rows['ph1']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax" value="<?php echo $rows['fax']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Member PCP </label>
                                                        <input type="text" name="member_pcp" value="<?php echo $rows['member_pcp']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph2" value="<?php echo $rows['ph2']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax1" value="<?php echo $rows['fax1']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                    <label class="col-form-label">Member School </label>
                                                        <input type="text" name="school" value="<?php echo $rows['school']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph3"value="<?php echo $rows['ph3']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax2" value="<?php echo $rows['fax2']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                    
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Nurse Pract </label>
                                                        <input type="text" name="pract" value="<?php echo $rows['pract']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph5" value="<?php echo $rows['ph5']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax4" value="<?php echo $rows['fax4']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Prim Provider </label>
                                                        <input type="text" name="prim" value="<?php echo $rows['prim']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">Ph </label>
                                                        <input type="text" name="ph6" value="<?php echo $rows['ph6']; ?>" class="form-control"
                                                        placeholder="Type your ph in Placeholder" required="">
                                                    </div>
                                                     <div class="col-sm-3">
                                                        <label class="col-form-label">e</label>
                                                         <input type="text" name="e" value="<?php echo $rows['e']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Fax</label>
                                                         <input type="text" name="fax5" value="<?php echo $rows['fax5']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                    <br>
                                                    <br>
                                                       <div class="col-sm-12">
                                                        <label class="col-form-label">Name</label>
                                                         <input type="text" name="name3" value="<?php echo $rows['name3']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>
                                                       <div class="col-sm-12">
                                                        <label class="col-form-label">EDS ID</label>
                                                         <input type="text" name="eds_id" value="<?php echo $rows['eds_id']; ?>" class="form-control"
                                                        placeholder="Type your status in Placeholder" required="">
                                                    </div>

                                                    

                                                   </div>

                                                
                                               <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Facesheet"
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