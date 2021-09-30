<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addresidentgoalsrecord'])){
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
         foreach($Thur1 as $Thur2)  
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

    $sql=mysqli_query($conn,"INSERT INTO residentgoalsrecord(
        Name,
        WeekBeginning,
        Goal,
        Mon,
        Tue,
        Wed,
        Thur,
        Fri,
        Sat,
        Sun,
        resident_id,
        user_id) VALUES (
            '$Name',
            '$WeekBeginning',
            '$Goal',
            '$Mon',
            '$Tue',
            '$Wed',
            '$Thur',
            '$Fri',
            '$Sat',
            '$Sun',
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
       
    $target="../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='residence';
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
                                    <h5>Resident Goals Record</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Resident Goals Record</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Resident Goals Record</a>
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
                                                            <label class="col-form-label">Week Beginning:</label>
                                                            <input type="text" name="WeekBeginning" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row Goal">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Goal</label>
                                                            <input type="text" name="Goal[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Mon</label>
                                                            <input type="text" name="Mon[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Tue</label>
                                                            <input type="text" name="Tue[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Wed</label>
                                                            <input type="text" name="Wed[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Thur</label>
                                                            <input type="text" name="Thur[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Fri</label>
                                                            <input type="text" name="Fri[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Sat</label>
                                                            <input type="text" name="Sat[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Sun</label>
                                                            <input type="text" name="Sun[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-12">
                                                           <a href="javascript:void(0);" class="add_goal"  title="Add field"><img src="add-icon.png" width="20"></a>
                                                        </div>
                                                        
                                                        </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addresidentgoalsrecord" value="add resident goals record"
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
                                                                    <th>WeekBeginning</th>
                                                                    <th>Goal</th>
                                                                    <th>Mon</th>
                                                                    <th>Tue</th>
                                                                    <th>Wed</th>
                                                                    <th>Thur</th>
                                                                    <th>Fri</th>
                                                                    <th>Sat</th>
                                                                    <th>Sun</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM residentgoalsrecord WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['Name'] ; ?></td>
                                                                    <td><?php echo $row['WeekBeginning'] ; ?></td>
                                                                    <td><?php echo $row['Goal'] ; ?></td>
                                                                    <td><?php echo $row['Mon'] ; ?></td>
                                                                    <td><?php echo $row['Tue'] ; ?></td>
                                                                    <td><?php echo $row['Wed'] ; ?></td>
                                                                    <td><?php echo $row['Thur'] ; ?></td>
                                                                    <td><?php echo $row['Fri'] ; ?></td>
                                                                    <td><?php echo $row['Sat'] ; ?></td>
                                                                    <td><?php echo $row['Sun'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="printresidentgoalsrecord.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delresidentgoalsrecord=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this resident goals record.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="residentgoalsrecordupdate.php?updateresidentgoalsrecord=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='residentgoalsrecord' AND user_id=$user_id");
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
    var addButton = $('.add_goal'); //Add button selector
    var wrapper = $('.Goal'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Goal</label><input type='text' name='Goal[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Mon</label><input type='text' name='Mon[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Tue</label><input type='text' name='Tue[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Wed</label><input type='text' name='Wed[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Thur</label><input type='text' name='Thur[]'  class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Fri</label><input type='text' name='Fri[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Sat</label><input type='text' name='Sat[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Sun</label><input type='text' name='Sun[]'   class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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