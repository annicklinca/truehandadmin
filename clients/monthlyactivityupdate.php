<?php
 include 'nav.php';
 $user_id=$user_id;
 $rec_id=$_GET['updatemonthlyactivity']; 
 if (isset($_POST['updatmonthlyactivity'])){
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

    $sql=mysqli_query($conn,"UPDATE monthlyactivity SET 
    Name='$Name',
    Month='$Month',
    OneDate='$OneDate',
    OneActivity='$OneActivity',
    OneStaff='$OneStaff',
    GuardianDate='$GuardianDate',
    GuardianActivity='$GuardianActivity',
    GuardianStaff='$GuardianStaff',
    GroupDate='$GroupDate',
    GroupActivity='$GroupActivity',
    GroupStaff='$GroupStaff'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update monthly activity Successefully';     
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
                                    <h5>Monthly Activity</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update monthly activity</a>
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
                                                                    <span style="color:white;">'.$successmessage.'</span> <br>
                                                                    <a href="monthlyactivity.php"><button class="btn btn-success">Go to monthly activity page</button></a>
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
                                                                  <a href="monthlyactivity.php"><button class="btn btn-success">Go to monthly activity page</button></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updatemonthlyactivity'])) {
                                                    $ser_id=$_GET['updatemonthlyactivity'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM monthlyactivity WHERE monthlyactivity.id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <form action="" method="POST" >
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Name</label>
                                                            <input type="text" name="Name" value="<?php echo $row['Name']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Month</label>
                                                            <input type="text" name="Month" value="<?php echo $row['Month']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row One">
                                                        <div class="col-sm-12">
                                                            <h5>One-on-one Activities:</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="OneDate[]" value="<?php echo $row['OneDate']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Activity</label>
                                                            <input type="text" name="OneActivity[]" value="<?php echo $row['OneActivity']; ?>" placeholder="Accessing Records" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Staff</label>
                                                            <input type="text" name="OneStaff[]" value="<?php echo $row['OneStaff']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_one"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row Guardian">
                                                        <div class="col-sm-12">
                                                            <h5>Family/Friends/Guardian Contacts:</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="GuardianDate[]" value="<?php echo $row['GuardianDate']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Activity</label>
                                                            <input type="text" name="GuardianActivity[]" value="<?php echo $row['GuardianActivity']; ?>" placeholder="Accessing Records" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Staff</label>
                                                            <input type="text" name="GuardianStaff[]" value="<?php echo $row['GuardianStaff']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_guardian"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row Group">
                                                        <div class="col-sm-12">
                                                            <h5>Group Activities:</h5>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="GroupDate[]" value="<?php echo $row['GroupDate']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Activity</label>
                                                            <input type="text" name="GroupActivity[]" value="<?php echo $row['GroupActivity']; ?>" placeholder="Accessing Records" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Staff</label>
                                                            <input type="text" name="GroupStaff[]" value="<?php echo $row['GroupStaff']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_group"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updatmonthlyactivity" value="update monthly activity"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                        <?php
                                                    } 
                                                }
                                                ?>
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