<?php
include 'nav.php';
$user_id=$user_id;
$rec_id=$_GET['updatecontact'];

if (isset($_POST['update'])){
    
    $resident_name=$_POST['resident_name'];
    $dob=$_POST['dob'];
     $contactlogdate1=$_POST['contactlogdate'];
    $contactlogdate="";
     foreach($contactlogdate1 as $contactlogdate2)  
     {  
        $contactlogdate .= $contactlogdate2.",";  
     }
      
       $contactlogsummary1=$_POST['contactlogsummary'];
      $contactlogsummary="";
     foreach($contactlogsummary1 as $contactlogsummary2)  
     {  
        $contactlogsummary .= $contactlogsummary2.",";  
     }

       $contactloginitials1=$_POST['contactloginitials'];
      $contactloginitials="";
     foreach($contactloginitials1 as $contactloginitials2)  
     {  
        $contactloginitials .= $contactloginitials2.",";  
     }

  $sql=mysqli_query($conn,"UPDATE contactlog SET 
    
    resident_name='$resident_name',
    dob='$dob',
    contactlogdate='$contactlogdate',
    contactlogsummary='$contactlogsummary',
     contactloginitials='$contactloginitials'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update Contact Successfully';
            
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
                                    <h5>Contact Log </h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update Contact Log  </a>
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
                                                if (isset($_GET['updatecontact'])) {
                                                    $orient_id=$_GET['updatecontact'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM contactlog WHERE contactlog.id=$orient_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                         <div class="form-group row">
                                                        <h4>Contact Log</h4>
                                                    </div>

                                                 <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident Name</label>
                                                            <input type="text" name="resident_name" value="<?php echo $row['resident_name']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" name="dob" value="<?php echo $row['dob']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                   
                                                       
                                                        <div class="row Log">
                                                     
                                                        <div class="col-sm-4">
                                                            <?php  
                                                                $contactlogdates=explode (",",strval($row['contactlogdate']));
                                                                ?>
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="contactlogdate[]" value="<?php echo $contactlogdates[0]; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <?php  
                                                                $contactlogsummarys=explode (",",strval($row['contactlogsummary']));
                                                                ?>
                                                            <label class=" col-form-label">Summary</label>
                                                            <input type="text" name="contactlogsummary[]" value="<?php echo $contactlogsummarys[0]; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                             <?php  
                                                                $contactloginitialss=explode (",",strval($row['contactloginitials']));
                                                                ?>
                                                            <label class=" col-form-label">Staff Initials</label>
                                                            <input type="text" name="contactloginitials[]" value="<?php echo $contactloginitialss[0]; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                     
                                                        <a href="javascript:void(0);" class="add_Skill" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div><br>
                                                    
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Contact Log"
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
<script>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_Skill'); //Add button selector
    var wrapper = $('.Log'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='form-row'><div class='col-sm-4'><label class='col-form-label' for='title'>Date</label><input type='date' name='contactlogdate[]' class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Summary</label><input type='text' name='contactlogsummary[]'   class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Staff Initials</label><input type='text' name='contactloginitials[]' class='form-control form-control-normal' /></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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