<?php
include 'nav.php';
$user_id=$user_id;
$rec_id=$_GET['updatemoneylog'];

if (isset($_POST['update'])){
    
     $resident1=$_POST['resident'];
    $resident="";
     foreach($resident1 as $resident2)  
     {  
        $resident .= $resident2.",";  
     }
      
       $personnel1=$_POST['personnel'];
      $personnel="";
     foreach($personnel1 as $personnel2)  
     {  
        $personnel .= $personnel2.",";  
     }

       $datelog1=$_POST['datelog'];
      $datelog="";
     foreach($datelog1 as $datelog2)  
     {  
        $datelog .= $datelog2.",";  
     }

     $allowamount1=$_POST['allowamount'];
      $allowamount="";
     foreach($allowamount1 as $allowamount2)  
     {  
        $allowamount .= $allowamount2.",";  
     }

     $clothingamount1=$_POST['clothingamount'];
      $clothingamount="";
     foreach($clothingamount1 as $clothingamount2)  
     {  
        $clothingamount .= $clothingamount2.",";  
     }


     $personalamount1=$_POST['personalamount'];
      $personalamount="";
     foreach($personalamount1 as $personalamount2)  
     {  
        $personalamount .= $personalamount2.",";  
     }


 $sql=mysqli_query($conn,"UPDATE moneylog SET 
    
    resident='$resident',
    personnel='$personnel',
    datelog='$datelog',
    allowamount='$allowamount',
    clothingamount='$clothingamount',
    personalamount='$personalamount'
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
                                    <h5>Money Log</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update Money Log  </a>
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
                                                if (isset($_GET['updatemoneylog'])) {
                                                    $orient_id=$_GET['updatemoneylog'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM moneylog WHERE moneylog.id=$orient_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <div class="form-group row">
                                                        <h4>Money Log</h4>
                                                    </div>
                                                       
                                                    <div class="form-group row Log">
                                                     
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Resident Signature</label>
                                                            <input type="text" name="resident[]" value="<?php echo $row['resident']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Personnel Signature</label>
                                                            <input type="text" name="personnel[]" value="<?php echo $row['personnel']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="datelog[]" value="<?php echo $row['datelog']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Allowance Amount</label>
                                                            <input type="text" name="allowamount[]" value="<?php echo $row['allowamount']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Clothing Amount</label>
                                                            <input type="text" name="clothingamount[]" value="<?php echo $row['clothingamount']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                          <div class="col-sm-4">
                                                            <label class=" col-form-label">Personal Amount</label>
                                                            <input type="text" name="personalamount[]" value="<?php echo $row['personalamount']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                             <a href="javascript:void(0);" class="add_Skill" title="Add field"><img src="add-icon.png" width="20"></a>
                                                        </div>
                                                     
                                                       
                                                    </div><br>
                                                    
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Money Log"
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
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Resident Signature</label><input type='text' name='resident[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Personnel Signature</label><input type='text' name='personnel[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Date</label><input type='date' name='datelog[]' placeholder='Frequency of Treatment'  class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Allowance Amount</label><input type='text' name='allowamount[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Clothing Amount</label><input type='text' name='clothingamount[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Personal Amount</label><input type='text' name='personalamount[]' class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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