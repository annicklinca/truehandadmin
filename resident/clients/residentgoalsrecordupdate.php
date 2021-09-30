<?php
 include 'nav.php';
 $user_id=$user_id;
 $rec_id=$_GET['updateresidentgoalsrecord']; 
 if (isset($_POST['updatresidentgoalsrecord'])){
    $Name=$_POST['Name'];
    $WeekBeginning=$_POST['WeekBeginning'];

    $Goal1=$_POST['Goal'];
    $Goal="";
     foreach($Goal1 as $Goal2)  
     {  
        $Goal .= $Goal2.",";  
     }

     $Mon1=$_POST['Mon'];
     $Mon="";
      foreach($Mon1 as $Mon2)  
      {  
         $Mon .= $Mon2.",";  
      }

      $Tue1=$_POST['Tue'];
      $Tue="";
       foreach($Tue1 as $Tue2)  
       {  
          $Tue .= $Tue2.",";  
       }

       $Wed1=$_POST['Wed'];
       $Wed="";
        foreach($Wed1 as $Wed2)  
        {  
           $Wed .= $Wed2.",";  
        }

        $Thur1=$_POST['Thur'];
        $Thur="";
         foreach($OThur as $OThur)  
         {  
            $Thur.= $Thur2.",";  
         }

         $Fri1=$_POST['Fri'];
         $Fri="";
          foreach($Fri1 as $Fri2)  
          {  
             $Fri .= $Fri2.",";  
          }

          $Sat1=$_POST['Sat'];
          $Sat="";
           foreach($Sat1 as $Sat2)  
           {  
              $Sat .= $Sat2.",";  
           }

           $Sun1=$_POST['Sun'];
           $Sun="";
            foreach($Sun1 as $Sun2)  
            {  
               $Sun .= $Sun2.",";  
            }
    $sql=mysqli_query($conn,"UPDATE residentgoalsrecord SET 
    Name='$Name',
    WeekBeginning='$WeekBeginning',
    Goal='$Goal',
    Mon='$Mon',
    Tue='$Tue',
    Wed='$Wed',
    Thur='$Thur',
    Fri='$Fri',
    Sat='$Sat',
    Sun='$Sun'
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
                                                                    <a href="residentgoalsrecord.php"><button class="btn btn-success">Go to resident goals record page</button></a>
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
                                                                  <a href="residentgoalsrecord.php"><button class="btn btn-success">Go to resident goals record page</button></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updateresidentgoalsrecord'])) {
                                                    $ser_id=$_GET['updateresidentgoalsrecord'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM residentgoalsrecord WHERE residentgoalsrecord.id=$ser_id");
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
                                                            <label class="col-form-label">Week Beginning:</label>
                                                            <input type="text" name="WeekBeginning" value="<?php echo $row['WeekBeginning']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row Goal">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Goal</label>
                                                            <input type="text" name="Goal[]" value="<?php echo $row['Goal']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Mon</label>
                                                            <input type="text" name="Mon[]" value="<?php echo $row['Mon']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Tue</label>
                                                            <input type="text" name="Tue[]" value="<?php echo $row['Tue']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Wed</label>
                                                            <input type="text" name="Wed[]" value="<?php echo $row['Wed']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Thur</label>
                                                            <input type="text" name="Thur[]" value="<?php echo $row['Thur']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Fri</label>
                                                            <input type="text" name="Fri[]" value="<?php echo $row['Fri']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Sat</label>
                                                            <input type="text" name="Sat[]" value="<?php echo $row['Sat']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Sun</label>
                                                            <input type="text" name="Sun[]" value="<?php echo $row['Sun']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-12">
                                                           <a href="javascript:void(0);" class="add_goal"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                        </div>
                                                        
                                                        </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updatresidentgoalsrecord" value="Update resident goals record"
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
    var addButton = $('.add_goal'); //Add button selector
    var wrapper = $('.Goal'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Goal</label><input type='text' name='Goal[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Mon</label><input type='text' name='Mon[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Tue</label><input type='text' name='Tue[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Wed</label><input type='text' name='Wed[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Thur</label><input type='text' name='Thur[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Fri</label><input type='text' name='Fri[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Sat</label><input type='text' name='Sat[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Sun</label><input type='text' name='Sun[]'   class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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