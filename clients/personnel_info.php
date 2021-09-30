
<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
       
     
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
    
 

    $sql=mysqli_query($conn,"INSERT INTO personnel_information VALUES ('',
        '$first_name',
        '$last_name',
        '$mi1',
        '$street_address',
        '$appartment',
        '$city',
        '$state',
        '$zip_code',
        '$home_phone',
        '$alternate_phone',
        '$email',
        '$security_no',
        '$birth_date',
        '$marital_status',
        '$spouse_name',
        '$spouse_emp',
        '$spouse_phone',
        '$title',
        '$personnel_id',
        '$supervisor',
        '$department',
        '$work_location',
        '$email_address',
        '$work_phone',
        '$cellphone',
        '$start_date',
        '$salary',
        '$first_name1',
        '$last_name1',
       '$mi2',
        '$street_address1',
        '$appartment1',
        '$city1',
        '$state1',
        '$zip_code1',
        '$home_phone1',
        '$alternate_phone1',
        '$relationship',''  
    )");
    if ($sql) {
        $successmessage .='Add personal Information Successefully';  
    }
    else {
        $errormessage .='Add Personnel Information failed!';      
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
                                    <h5>Personnel Information</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add content</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All content</a>
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
                                                        <input type="text" name="first_name" class="form-control"
                                                        placeholder="Enter Firstname" required="">
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Lastname</label>
                                                        <input type="text" name="last_name" class="form-control"
                                                        placeholder="Enter Lastname" required="">
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">M.I</label>
                                                        <input type="text" name="mi1" class="form-control"
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
                                                        <input type="text" name="street_address" class="form-control"
                                                        placeholder="Enter address" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Apartment/Unit #</label>
                                                        <input type="text" name="appartment" class="form-control"
                                                        placeholder="Enter address" required="">
                                                    </div>
                                                    </div>
                                                       <div class="form-group row">
                                                        <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">City</label>
                                                        <input type="text" name="city" class="form-control"
                                                        placeholder="Enter city" required="">
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">State</label>
                                                        <input type="text" name="state" class="form-control"
                                                        placeholder="Enter state" required="">
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Zip Code</label>
                                                        <input type="text" name="zip_code" class="form-control"
                                                        placeholder="Enter zip code" required="">
                                                    </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Home Phone</label>
                                                        <input type="text" name="home_phone" class="form-control"
                                                        placeholder="(  )........." required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Alternate Phone</label>
                                                        <input type="text" name="alternate_phone" class="form-control"
                                                        placeholder="Enter alternate phone" required="">
                                                    </div>
                                                    </div> 

                                                   <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Email Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="email" class="form-control form-control-normal"
                                                            placeholder="Enter Email">
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Social Security Number or Government ID:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="security_no" class="form-control form-control-normal"
                                                            placeholder="Enter Security Number">
                                                        </div>
                                                    </div>
                                                   
                                                        <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Birth Date</label>
                                                        <input type="date" name="birth_date" class="form-control"
                                                        placeholder="(  )........." required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Marital Status</label>
                                                        <select name="marital_status" class="form-control">
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                             <option value="Divorced">Divorced</option>
                                                        </select>
                                                    </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Spouse’s Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="spouse_name" class="form-control form-control-normal"
                                                            placeholder="Enter Spouse’s Name">
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Spouse’s Employer</label>
                                                        <input type="text" name="spouse_emp" class="form-control"
                                                        placeholder="Enter Spouse’s Employer" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Spouse’s Work Phone</label>
                                                         <input type="text" name="spouse_phone" class="form-control"
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
                                                        <input type="text" name="title" class="form-control"
                                                        placeholder="Enter Title" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Personnel Id</label>
                                                         <input type="text" name="personnel_id" class="form-control"
                                                        placeholder="Enter personnel id" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Supervisor</label>
                                                        <input type="text" name="supervisor" class="form-control"
                                                        placeholder="Enter supervisor" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Department</label>
                                                         <input type="text" name="department" class="form-control"
                                                        placeholder="Enter  department" required="">
                                                    </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Work Location</label>
                                                        <input type="text" name="work_location" class="form-control"
                                                        placeholder="Enter supervisor" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">E-mail Address</label>
                                                         <input type="text" name="email_address" class="form-control"
                                                        placeholder="Enter  email" required="">
                                                    </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Work Phone</label>
                                                        <input type="text" name="work_phone" class="form-control"
                                                        placeholder="(        )" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Cell Phone</label>
                                                         <input type="text" name="cellphone" class="form-control"
                                                        placeholder="Enter  cell phone" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Start Date</label>
                                                        <input type="date" name="start_date" class="form-control"
                                                        placeholder="(        )" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Salary</label>
                                                         <input type="text" name="salary" class="form-control"
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
                                                        <input type="text" name="first_name1" class="form-control"
                                                        placeholder="Enter Firstname" required="">
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Lastname</label>
                                                        <input type="text" name="last_name1" class="form-control"
                                                        placeholder="Enter Lastname" required="">
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">M.I</label>
                                                        <input type="text" name="mi2" class="form-control"
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
                                                        <input type="text" name="street_address1" class="form-control"
                                                        placeholder="Enter address" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark1">Apartment/Unit #</label>
                                                        <input type="text" name="appartment1" class="form-control"
                                                        placeholder="Enter address" required="">
                                                    </div>
                                                    </div>
                                                       <div class="form-group row">
                                                        <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">City</label>
                                                        <input type="text" name="city1" class="form-control"
                                                        placeholder="Enter city" required="">
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">State</label>
                                                        <input type="text" name="state1" class="form-control"
                                                        placeholder="Enter state" required="">
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <label class="col-form-label text-dark">Zip Code</label>
                                                        <input type="text" name="zip_code1" class="form-control"
                                                        placeholder="Enter zip code" required="">
                                                    </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Primary Phone</label>
                                                        <input type="text" name="home_phone1" class="form-control"
                                                        placeholder="(  )........." required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Alternate Phone</label>
                                                        <input type="text" name="alternate_phone1" class="form-control"
                                                        placeholder="Enter alternate phone" required="">
                                                    </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Relationship</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="relationship" class="form-control form-control-normal"
                                                            placeholder="Enter Relationship">
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="Add Personnel Information"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
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
                                                                    <th>Firstname</th>
                                                                    <th>Lastname</th>
                                                                    <th>M.I</th>
                                                                    <th>Street Address</th>
                                                                    <th>Appartment</th>
                                                                    <th>City</th>
                                                                    <th>State</th>
                                                                    <th>Zip code</th>
                                                                    <th>Home Phone</th>
                                                                    <th>Alternate Phone</th>
                                                                    <th>Email Address</th>
                                                                     <th>Government ID</th>
                                                                    <th>Birth Date</th>
                                                                    <th>Marital Status</th>
                                                                    <th>Spouse’s Name</th>
                                                                    <th>Spouse’s Employer</th>
                                                                    <th>Spouse’s Work Phone</th>
                                                                    <th>Title</th>
                                                                    <th>Personnel Id</th>
                                                                    <th>Supervisor</th>
                                                                    <th>Department</th>
                                                                    <th>Work Location</th>
                                                                    <th>E-mail Address</th>
                                                                     <th>Work Phone</th>
                                                                    <th>Cell Phone</th>
                                                                    <th>Start Date</th>
                                                                    <th>Salary</th>
                                                                    <th>Firstname E</th>
                                                                    <th>Lastname E</th>
                                                                    <th>M.I E</th>
                                                                    <th>Street Address E</th>
                                                                    <th>Appartment E</th>
                                                                    <th>City E</th>
                                                                    <th>State E</th>
                                                                    <th>Zip code E</th>
                                                                    <th>Primary Phone</th>
                                                                    <th>Alternate Phone</th>
                                                                    <th>Relationship</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM personnel_information");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['first_name'] ; ?></td>
                                                                    <td><?php echo $row['last_name'] ; ?></td>
                                                                    <td><?php echo $row['mi1'] ; ?></td>
                                                                    <td><?php echo $row['street_address'] ; ?></td>
                                                                    <td><?php echo $row['appartment'] ; ?></td>
                                                                    <td><?php echo $row['city'] ; ?></td>
                                                                    <td><?php echo $row['state'] ; ?></td>
                                                                    <td><?php echo $row['zip_code'] ; ?></td>
                                                                    <td><?php echo $row['home_phone'] ; ?></td>
                                                                    <td><?php echo $row['alternate_phone'] ; ?></td>
                                                                    <td><?php echo $row['email'] ; ?></td>
                                                                    <td><?php echo $row['security_no'] ; ?></td>
                                                                    <td><?php echo $row['birth_date'] ; ?></td>
                                                                    <td><?php echo $row['marital_status'] ; ?></td>
                                                                    <td><?php echo $row['spouse_name'] ; ?></td>
                                                                     <td><?php echo $row['spouse_emp'] ; ?></td>
                                                                    <td><?php echo $row['spouse_phone'] ; ?></td>
                                                                    <td><?php echo $row['title'] ; ?></td>
                                                                    <td><?php echo $row['personnel_id'] ; ?></td>
                                                                    <td><?php echo $row['supervisor'] ; ?></td>
                                                                    <td><?php echo $row['department'] ; ?></td>
                                                                       <td><?php echo $row['work_location'] ; ?></td>
                                                                     <td><?php echo $row['email_address'] ; ?></td>
                                                                    <td><?php echo $row['work_phone'] ; ?></td>
                                                                    <td><?php echo $row['cellphone'] ; ?></td>
                                                                    <td><?php echo $row['start_date'] ; ?></td>
                                                                    <td><?php echo $row['salary'] ; ?></td>
                                                                    <td><?php echo $row['first_name1'] ; ?></td>
                                                                      <td><?php echo $row['last_name1'] ; ?></td>
                                                                       <td><?php echo $row['mi2'] ; ?></td>
                                                                     <td><?php echo $row['street_address1'] ; ?></td>
                                                                    <td><?php echo $row['appartment1'] ; ?></td>
                                                                    <td><?php echo $row['city1'] ; ?></td>
                                                                    <td><?php echo $row['state1'] ; ?></td>
                                                                    <td><?php echo $row['zip_code1'] ; ?></td>
                                                                    <td><?php echo $row['home_phone1'] ; ?></td>
                                                                    <td><?php echo $row['alternate_phone1'] ; ?></td>
                                                                    <td><?php echo $row['relationship'] ; ?></td>
                                                                    <td><a class="btn btn-danger"  href="delete.php?delpersonnel=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this personnel content.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary"  href="personelupdate.php?id=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                                        <td><a class="btn btn-success"  href="personnelprint.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                        <td><a class="btn btn-primary"  href="personnelsign.php?id=<?php echo $row['id']; ?> "  id="red">Sign Now</a></td>
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