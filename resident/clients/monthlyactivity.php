<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addmonthlyactivity'])){
    $Name=$_POST['Name'];
    $Month=$_POST['Month'];

    $OneDate1=$_POST['OneDate'];
    $OneDate="";
     foreach($OneDate1 as $OneDate2)  
     {  
        $OneDate .= $OneDate2.",";  
     }
     
    $OneActivity1=$_POST['OneActivity'];
    $OneActivity="";
     foreach($OneActivity1 as $OneActivity2)  
     {  
        $OneActivity .= $OneActivity2.",";  
     }

    $OneStaff1=$_POST['OneStaff'];
    $OneStaff="";
     foreach($OneStaff1 as $OneStaff2)  
     {  
        $OneStaff .= $OneStaff2.",";  
     }


     $GuardianDate1=$_POST['GuardianDate'];
     $GuardianDate="";
      foreach($GuardianDate1 as $GuardianDate2)  
      {  
         $GuardianDate .= $GuardianDate2.",";  
      }
      
     $GuardianActivity1=$_POST['GuardianActivity'];
     $GuardianActivity="";
      foreach($GuardianActivity1 as $GuardianActivity2)  
      {  
         $GuardianActivity .= $GuardianActivity2.",";  
      }
 
     $GuardianStaff1=$_POST['GuardianStaff'];
     $GuardianStaff="";
      foreach($GuardianStaff1 as $GuardianStaff2)  
      {  
         $GuardianStaff .= $GuardianStaff2.",";  
      }


      $GroupDate1=$_POST['GroupDate'];
      $GroupDate="";
       foreach($GroupDate1 as $GroupDate2)  
       {  
          $GroupDate .= $GroupDate2.",";  
       }
       
      $GroupActivity1=$_POST['GroupActivity'];
      $GroupActivity="";
       foreach($GroupActivity1 as $GroupActivity2)  
       {  
          $GroupActivity .= $GroupActivity2.",";  
       }
  
      $GroupStaff1=$_POST['GroupStaff'];
      $GroupStaff="";
       foreach($GuardianStaff1 as $GroupStaff2)  
       {  
          $GroupStaff .= $GroupStaff2.",";  
       }

    $sql=mysqli_query($conn,"INSERT INTO monthlyactivity(
        Name,
        Month,
        OneDate,
        OneActivity,
        OneStaff,
        GuardianDate,
        GuardianActivity,
        GuardianStaff,
        GroupDate,
        GroupActivity,
        GroupStaff,
        resident_id,
        user_id) VALUES (
            '$Name',
            '$Month',
            '$OneDate',
            '$OneActivity',
            '$OneStaff',
            '$GuardianDate',
            '$GuardianActivity',
            '$GuardianStaff',
            '$GroupDate',
            '$GroupActivity',
            '$GroupStaff',
            '$residentid',
            '$user_id')");
    if ($sql) {
        $successmessage .='Add monthly activity Successefully';	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
    }    
}
if (isset($_POST['uploadfile'])){
       
    $target="../../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='monthlyactivity';
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
                                    <h5>Monthly Activity Form</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Monthly Activity Form</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Monthly Activity Form</a>
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
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Name</label>
                                                            <input type="text" name="Name" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Month</label>
                                                            <input type="text" name="Month" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row One">
                                                        <div class="col-sm-12">
                                                            <h5>One-on-one Activities:</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="OneDate[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Activity</label>
                                                            <input type="text" name="OneActivity[]" placeholder="Accessing Records" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Staff</label>
                                                            <input type="text" name="OneStaff[]" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_one"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row Guardian">
                                                        <div class="col-sm-12">
                                                            <h5>Family/Friends/Guardian Contacts:</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="GuardianDate[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Activity</label>
                                                            <input type="text" name="GuardianActivity[]" placeholder="Accessing Records" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Staff</label>
                                                            <input type="text" name="GuardianStaff[]" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_guardian"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row Group">
                                                        <div class="col-sm-12">
                                                            <h5>Group Activities:</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="GroupDate[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Activity</label>
                                                            <input type="text" name="GroupActivity[]" placeholder="Accessing Records" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Staff</label>
                                                            <input type="text" name="GroupStaff[]" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_group"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addmonthlyactivity" value="add monthly activity"
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
                                                                    <th>Name</th>
                                                                    <th>Month</th>
                                                                    <th>OneDate</th>
                                                                    <th>OneActivity</th>
                                                                    <th>OneStaff</th>
                                                                    <th>GuardianDate</th>
                                                                    <th>GuardianActivity</th>
                                                                    <th>GuardianStaff</th>
                                                                    <th>GroupDate</th>
                                                                    <th>GroupActivity</th>
                                                                    <th>GroupStaff</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM monthlyactivity WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['Name'] ; ?></td>
                                                                    <td><?php echo $row['Month'] ; ?></td>
                                                                    <td><?php echo $row['OneDate'] ; ?></td>
                                                                    <td><?php echo $row['OneActivity'] ; ?></td>
                                                                    <td><?php echo $row['OneStaff'] ; ?></td>
                                                                    <td><?php echo $row['GuardianDate'] ; ?></td>
                                                                    <td><?php echo $row['GuardianActivity'] ; ?></td>
                                                                    <td><?php echo $row['GuardianStaff'] ; ?></td>
                                                                    <td><?php echo $row['GroupDate'] ; ?></td>
                                                                    <td><?php echo $row['GroupActivity'] ; ?></td>
                                                                    <td><?php echo $row['GroupStaff'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="printmonthlyactivity.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delmonthlyactivity=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this medical records access.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="monthlyactivityupdate.php?updatemonthlyactivity=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='monthlyactivity' AND user_id=$user_id");
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

<script>



$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_group'); //Add button selector
    var wrapper = $('.Group'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Date</label><input type='date' name='GroupDate[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Activity</label><input type='text' name='GroupActivity[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Staff</label><input type='text' name='GroupStaff[]'   class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});



$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_guardian'); //Add button selector
    var wrapper = $('.Guardian'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Date</label><input type='date' name='GuardianDate[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Activity</label><input type='text' name='GuardianActivity[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Staff</label><input type='text' name='GuardianStaff[]'   class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_one'); //Add button selector
    var wrapper = $('.One'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Date</label><input type='date' name='OneDate[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Activity</label><input type='text' name='OneActivity[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Staff</label><input type='text' name='OneStaff[]'   class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

</script>