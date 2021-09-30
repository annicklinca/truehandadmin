
<?php
include 'nav.php';
$user_id=$user_id;
 $id=$_GET['id'];

if (isset($_POST['update'])){
       
   
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $mi1=$_POST['mi1'];
    $street_address=$_POST['street_address'];
    $appartment=$_POST['appartment'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip_code=$_POST['zip_code'];
    $home_phone=$_POST['home_phone'];
    $alternate_phone=$_POST['alternate_phone'];
    $email=$_POST['email'];
    $security_no=$_POST['security_no'];
    $birth_date=$_POST['birth_date'];
    $marital_status=$_POST['marital_status'];
    $spouse_name=$_POST['spouse_name'];
    $spouse_emp=$_POST['spouse_emp'];
    $spouse_phone=$_POST['spouse_phone'];
    $title=$_POST['title'];
    $personnel_id=$_POST['personnel_id'];
    $supervisor=$_POST['supervisor'];
    $department=$_POST['department'];
    $work_location=$_POST['work_location'];
    $email_address=$_POST['email_address'];
    $work_phone=$_POST['work_phone'];
    $cellphone=$_POST['cellphone'];
    $start_date=$_POST['start_date'];
    $salary=$_POST['salary'];
    $first_name1=$_POST['first_name1'];
    $last_name1=$_POST['last_name1'];
    $mi2=$_POST['mi2'];
    $street_address1=$_POST['street_address1'];
    $appartment1=$_POST['appartment1'];
    $city1=$_POST['city1'];
    $state1=$_POST['state1'];
    $zip_code1=$_POST['zip_code1'];
    $home_phone1=$_POST['home_phone1'];
    $alternate_phone1=$_POST['alternate_phone1'];
    $relationship=$_POST['relationship'];
    

    $sql=mysqli_query($conn,"UPDATE personnel_information SET 
    
    first_name='$first_name',
    last_name='$last_name',
    mi1='$mi1',
    street_address='$street_address',
    appartment='$appartment',
    city='$city',
    state='$state',
    zip_code='$zip_code',
    home_phone='$home_phone',
    alternate_phone='$alternate_phone',
    email='$email',
    security_no='$security_no',
    birth_date='$birth_date',
    marital_status='$marital_status',
    spouse_name='$spouse_name',
    spouse_emp='$spouse_emp',
    spouse_phone='$spouse_phone',
    title='$title',
    personnel_id='$personnel_id',
    supervisor='$supervisor',
    department='$department',
    work_location='$work_location',
    email_address='$email_address',
    work_phone='$work_phone',
    cellphone='$cellphone',
    start_date='$start_date',
    salary='$salary',
    first_name1='$first_name1',
    last_name1='$last_name1',
    mi2='$mi2',
    street_address1='$street_address1',
    appartment1='$appartment1',
    city1='$city1',
    state1='$state1',
    zip_code1='$zip_code1',
    home_phone1='$home_phone1',
    alternate_phone1='$alternate_phone1',
    relationship='$relationship'

     WHERE id=$id;");
    if ($sql) {
        $successmessage .='Update Reciept of Information Successefully';
            
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
                                    <h5>Contact</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add content</a>
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
                                        $sel=$conn->query("SELECT * from personnel_information where id='$id' ");
                                        while($rows=mysqli_fetch_array($sel))
                                         {
                                         ?>
                                                 <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">Personnel Information</span>
                                                  </div>
                                              </div>
                                                     <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">Fullname</span>
                                                  </div>  
                                          
                                                </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Firstname</label>
                                                        <input type="text" name="first_name" value="<?php echo $rows['first_name']?>" class="form-control"
                                                        placeholder="Enter Firstname" required="">
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Lastname</label>
                                                        <input type="text" name="last_name" value="<?php echo $rows['last_name']?>" class="form-control"
                                                        placeholder="Enter Lastname" required="">
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">M.I</label>
                                                        <input type="text" name="mi1" value="<?php echo $rows['mi1']?>"class="form-control"
                                                        placeholder="Enter M.I" required="">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">Address</span>
                                                  </div>
                                                  </div>  
                                                  <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Street Address</label>
                                                        <input type="text" name="street_address" value="<?php echo $rows['street_address']?>" class="form-control"
                                                        placeholder="Enter address" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Apartment/Unit #</label>
                                                        <input type="text" name="appartment" value="<?php echo $rows['appartment']?>" class="form-control"
                                                        placeholder="Enter address" required="">
                                                    </div>
                                                    </div>
                                                       <div class="form-group row">
                                                        <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">City</label>
                                                        <input type="text" name="city" value="<?php echo $rows['city']?>" class="form-control"
                                                        placeholder="Enter city" required="">
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">State</label>
                                                        <input type="text" name="state" value="<?php echo $rows['state']?>" class="form-control"
                                                        placeholder="Enter state" required="">
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Zip Code</label>
                                                        <input type="text" name="zip_code" value="<?php echo $rows['zip_code']?>" class="form-control"
                                                        placeholder="Enter zip code" required="">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Home Phone</label>
                                                        <input type="text" name="home_phone" value="<?php echo $rows['home_phone']?>" class="form-control"
                                                        placeholder="(  )........." required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Alternate Phone</label>
                                                        <input type="text" name="alternate_phone" value="<?php echo $rows['alternate_phone']?>" class="form-control"
                                                        placeholder="Enter alternate phone" required="">
                                                    </div>
                                                    </div> 

                                                   <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Email Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="email" value="<?php echo $rows['email']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Email">
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Social Security Number or Government ID:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="security_no" value="<?php echo $rows['security_no']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Security Number">
                                                        </div>
                                                    </div>
                                                   
                                                        <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Birth Date</label>
                                                        <input type="date" name="birth_date" value="<?php echo $rows['birth_date']?>" class="form-control"
                                                        placeholder="(  )........." required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Marital Status</label>
                                                        <select name="marital_status" value="<?php echo $rows['marital_status']?>" class="form-control" >
                                                            <option value="single">Single</option>
                                                            <option value="Married">Married</option>
                                                             <option value="Divorced">Divorced</option>
                                                        </select>
                                                    </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Spouse’s Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="spouse_name" value="<?php echo $rows['spouse_name']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Spouse’s Name">
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Spouse’s Employer</label>
                                                        <input type="text" name="spouse_emp" value="<?php echo $rows['spouse_emp']?>" class="form-control"
                                                        placeholder="Enter Spouse’s Employer" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Spouse’s Work Phone</label>
                                                         <input type="text" name="spouse_phone" value="<?php echo $rows['spouse_emp']?>" class="form-control"
                                                        placeholder="Enter Spouse’s Work phone" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">Job Information</span>
                                                  </div>
                                                  </div> 
                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Title</label>
                                                        <input type="text" name="title" value="<?php echo $rows['title']?>" class="form-control"
                                                        placeholder="Enter Title" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Personnel Id</label>
                                                         <input type="text" name="personnel_id" value="<?php echo $rows['personnel_id']?>" class="form-control"
                                                        placeholder="Enter personnel id" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Supervisor</label>
                                                        <input type="text" name="supervisor" value="<?php echo $rows['supervisor']?>" class="form-control"
                                                        placeholder="Enter supervisor" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Department</label>
                                                         <input type="text" name="department" value="<?php echo $rows['department']?>" class="form-control"
                                                        placeholder="Enter  department" required="">
                                                    </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Work Location</label>
                                                        <input type="text" name="work_location" value="<?php echo $rows['work_location']?>" class="form-control"
                                                        placeholder="Enter supervisor" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">E-mail Address</label>
                                                         <input type="text" name="email_address" value="<?php echo $rows['email_address']?>" class="form-control"
                                                        placeholder="Enter  email" required="">
                                                    </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Work Phone</label>
                                                        <input type="text" name="work_phone" value="<?php echo $rows['work_phone']?>" class="form-control"
                                                        placeholder="(        )" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Cell Phone</label>
                                                         <input type="text" name="cellphone" value="<?php echo $rows['cellphone']?>" class="form-control"
                                                        placeholder="Enter  cell phone" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Start Date</label>
                                                        <input type="date" name="start_date" value="<?php echo $rows['start_date']?>" class="form-control"
                                                        placeholder="(        )" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Salary</label>
                                                         <input type="text" name="salary" value="<?php echo $rows['salary']?>" class="form-control"
                                                        placeholder="$    " required="">
                                                    </div>
                                                    </div>


                                                      <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">Emergency Contact Information</span>
                                                  </div>
                                                  </div>

                                                    <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">Fullname</span>
                                                  </div>  
                                          
                                                </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Firstname</label>
                                                        <input type="text" name="first_name1" value="<?php echo $rows['first_name1']?>" class="form-control"
                                                        placeholder="Enter Firstname" required="">
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Lastname</label>
                                                        <input type="text" name="last_name1" value="<?php echo $rows['last_name1']?>" class="form-control"
                                                        placeholder="Enter Lastname" required="">
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">M.I</label>
                                                        <input type="text" name="mi2" value="<?php echo $rows['mi2']?>" class="form-control"
                                                        placeholder="Enter M.I" required="">
                                                    </div>
                                                    </div>

                                                     <div class="form-group row">
                                                  <div class="col-sm-12">
                                                    <span class="text-custom">Address</span>
                                                  </div>
                                                  </div>  
                                                  <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Street Address</label>
                                                        <input type="text" name="street_address1" value="<?php echo $rows['street_address1']?>" class="form-control"
                                                        placeholder="Enter address" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark1">Apartment/Unit #</label>
                                                        <input type="text" name="appartment1" value="<?php echo $rows['appartment1']?>" class="form-control"
                                                        placeholder="Enter address" required="">
                                                    </div>
                                                    </div>
                                                       <div class="form-group row">
                                                        <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">City</label>
                                                        <input type="text" name="city1" value="<?php echo $rows['city1']?>" class="form-control"
                                                        placeholder="Enter city" required="">
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">State</label>
                                                        <input type="text" name="state1" value="<?php echo $rows['state1']?>" class="form-control"
                                                        placeholder="Enter state" required="">
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Zip Code</label>
                                                        <input type="text" name="zip_code1" value="<?php echo $rows['zip_code1']?>" class="form-control"
                                                        placeholder="Enter zip code" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Primary Phone</label>
                                                        <input type="text" name="home_phone1" value="<?php echo $rows['home_phone1']?>" class="form-control"
                                                        placeholder="(  )........." required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Alternate Phone</label>
                                                        <input type="text" name="alternate_phone1" value="<?php echo $rows['alternate_phone1']?>" class="form-control"
                                                        placeholder="Enter alternate phone" required="">
                                                    </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Relationship</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="relationship" value="<?php echo $rows['relationship']?>" class="form-control form-control-normal"
                                                            placeholder="Enter Relationship">
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Personnel Information"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>

                                                  <?php
                                                 } 
                                                 ?>   
                                                </form>
                                               
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