<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
    
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

     $sql=mysqli_query($conn,"INSERT INTO contactlog(resident_name,dob,contactlogdate,contactlogsummary,contactloginitials,user_id) VALUES ('$resident_name','$dob','$contactlogdate','$contactlogsummary','$contactloginitials','$user_id')");
    if ($sql) {
        $successmessage .='New Contact Log saved, Successefully';  
    }
    else {
        $errormessage .='New Contact Log failed, try Again';       
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
                                    <h5>Family Contact Log</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Contact Log  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Contact Log</a>
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
                                                        <h4>Contact Log</h4>
                                                    </div>

                                                 <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident Name</label>
                                                            <input type="text" name="resident_name" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" name="dob" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                   
                                                       
                                                        <div class="row Log">
                                                     
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="contactlogdate[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Summary</label>
                                                            <input type="text" name="contactlogsummary[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Staff Initials</label>
                                                            <input type="text" name="contactloginitials[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                     
                                                        <a href="javascript:void(0);" class="add_Skill" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div><br>
                                                    
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="Add Contact Log"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
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
                                                            <th>Resident Name</th>
                                                            <th>Date of Birth</th>
                                                            <th>Date</th>
                                                            <th>Summary</th>
                                                            <th>Staff Initials</th>
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM contactlog");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo $row['resident_name']; ?></td>
                                                            <td><?php echo $row['dob']; ?></td>
                                                            <td><?php echo $row['contactlogdate']; ?></td>
                                                            <td><?php echo $row['contactlogsummary'] ; ?></td>
                                                            <td><?php echo $row['contactloginitials'] ; ?></td>
                                                         
                                                            <td><a class="btn btn-danger"  href="delete.php?delcontactlog=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this consent of treatment.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="contactlogupdate.php?updatecontact=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-primary"  href="contactlogsign.php?id=<?php echo $row['id']; ?> "  id="red">Sign </a></td>
                                                            <td><a class="btn btn-success"  href="contactlogprint.php?printcontact=<?php echo $row['id']; ?>"  id="red">Print</a></td>
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
    var addButton = $('.add_Skill'); //Add button selector
    var wrapper = $('.Log'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Resident Signature</label><input type='text' name='resident[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Personnel Signature</label><input type='text' name='personnel[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Date</label><input type='date' name='datelog[]' placeholder='Frequency of Treatment'  class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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