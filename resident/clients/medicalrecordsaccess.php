<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addmedicalrecordsaccess'])){
    $ResidentName=$_POST['ResidentName'];
    $DateOfBirth=$_POST['DateOfBirth'];
    $Date1=$_POST['Date'];
    $Date="";
     foreach($Date1 as $Date2)  
     {  
        $Date .= $Date2.",";  
     }
    $NamePerson1=$_POST['NamePerson'];
    $NamePerson="";
     foreach($NamePerson1 as $NamePerson2)  
     {  
        $NamePerson .= $NamePerson2.",";  
     }
    $DiagnosisMedical1=$_POST['DiagnosisMedical'];
    $DiagnosisMedical="";
     foreach($DiagnosisMedical1 as $DiagnosisMedical2)  
     {  
        $DiagnosisMedical .= $DiagnosisMedical2.",";  
     }
    $PurposeandUseMedical1=$_POST['PurposeandUseMedical'];
    $PurposeandUseMedical="";
     foreach($PurposeandUseMedical1 as $PurposeandUseMedical2)  
     {  
        $PurposeandUseMedical .= $PurposeandUseMedical2.",";  
     }
    $sql=mysqli_query($conn,"INSERT INTO medicalrecordsaccess(
        ResidentName,
        DateOfBirth,
        Date,
        NamePerson,
        DiagnosisMedical,
        PurposeandUseMedical,
        resident_id,
        user_id) VALUES (
            '$ResidentName',
            '$DateOfBirth',
            '$Date',
            '$NamePerson',
            '$DiagnosisMedical',
            '$PurposeandUseMedical',
            '$residentid',
            '$user_id')");
    if ($sql) {
        $successmessage .='Add medical records access Successefully';	
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
                                    <h5>medical records access</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add medical records access</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All medical records access</a>
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
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Confidentiality Statement Review</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident Name:</label>
                                                            <input type="text" name="ResidentName" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Birth:</label>
                                                            <input type="date" name="DateOfBirth" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row Records">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Date:</label>
                                                            <input type="date" name="Date[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Name of Person</label>
                                                            <input type="text" name="NamePerson[]" placeholder="Accessing Records" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Organization</label>
                                                            <input type="text" name="DiagnosisMedical[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Purpose and Use of Medical </label>
                                                            <textarea name="PurposeandUseMedical[]" placeholder="Information Accessed:" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_records"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addmedicalrecordsaccess" value="add medical records access"
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
                                                                    <th>ResidentName</th>
                                                                    <th>DateOfBirth</th>
                                                                    <th>Date</th>
                                                                    <th>NamePerson</th>
                                                                    <th>DiagnosisMedical</th>
                                                                    <th>PurposeandUseMedical</th>
                                                                    <th>sign</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM medicalrecordsaccess WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['ResidentName'] ; ?></td>
                                                                    <td><?php echo $row['DateOfBirth'] ; ?></td>
                                                                    <td><?php echo $row['Date'] ; ?></td>
                                                                    <td><?php echo $row['NamePerson'] ; ?></td>
                                                                    <td><?php echo $row['DiagnosisMedical'] ; ?></td>
                                                                    <td><?php echo $row['PurposeandUseMedical'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="medicalrecordsaccesssign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="printmedicalrecordsaccess.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delmedicalrecordsaccess=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this medical records access.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="medicalrecordsaccessupdate.php?updatemedicalrecordsaccess=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
    var addButton = $('.add_records'); //Add button selector
    var wrapper = $('.Records'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Date</label><input type='date' name='Date[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Name Person</label><input type='text' name='NamePerson[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Diagnosis Medical</label><input type='text' name='DiagnosisMedical[]' placeholder='Frequency of Treatment'  class='form-control form-control-normal' /></div></div><div class='col-sm-3'><label class='col-form-label'>Purpose and Use of Medical </label><textarea name='PurposeandUseMedical[]' placeholder='Information Accessed:' class='form-control form-control-normal'></textarea></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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