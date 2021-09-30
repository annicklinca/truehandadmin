<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
    $date_resident=$_POST['date_resident'];
    $resident_name=$_POST['resident_name'];
    $resident_id=$_POST['resident_id'];

     $orientationmaxscore1=$_POST['orientationmaxscore'];
    $orientationmaxscore="";
     foreach($orientationmaxscore1 as $orientationmaxscore2)  
     {  
        $orientationmaxscore .= $orientationmaxscore2.",";  
     }
      
    $orientationscore1=$_POST['orientationscore'];
    $orientationscore="";
     foreach($orientationscore1 as $orientationscore2)  
     {  
        $orientationscore .= $orientationscore2.",";  
     }

    $orientation_qualifier1=$_POST['orientation_qualifier'];
    $orientation_qualifier="";
     foreach($orientation_qualifier1 as $orientation_qualifier2)  
     {  
        $orientation_qualifier .= $orientation_qualifier2.",";  
     }

    $reg_maxscore1=$_POST['reg_maxscore'];
    $reg_maxscore="";
     foreach($reg_maxscore1 as $reg_maxscore2)  
     {  
        $reg_maxscore .= $reg_maxscore2.",";  
     }
      
    $registration_score1=$_POST['registration_score'];
    $registration_score="";
     foreach($registration_score1 as $registration_score2)  
     {  
        $registration_score .= $registration_score2.",";  
     }

    $registration_qualifier1=$_POST['registration_qualifier'];
    $registration_qualifier="";
     foreach($registration_qualifier1 as $registration_qualifier2)  
     {  
        $registration_qualifier .= $registration_qualifier2.",";  
     }

    $calculate_maxscore1=$_POST['calculate_maxscore'];
    $calculate_maxscore="";
     foreach($calculate_maxscore1 as $calculate_maxscore2)  
     {  
        $calculate_maxscore .= $calculate_maxscore2.",";  
     }
      
    $calculate_score1=$_POST['calculate_score'];
    $calculate_score="";
     foreach($calculate_score1 as $calculate_score2)  
     {  
        $calculate_score .= $calculate_score2.",";  
     }

    $calculate_qualifier1=$_POST['calculate_qualifier'];
    $calculate_qualifier="";
     foreach($calculate_qualifier1 as $calculate_qualifier2)  
     {  
        $calculate_qualifier .= $calculate_qualifier2.",";  
     }

    $recall_maxscore1=$_POST['recall_maxscore'];
    $recall_maxscore="";
     foreach($recall_maxscore1 as $recall_maxscore2)  
     {  
        $recall_maxscore .= $recall_maxscore2.",";  
     }
      
    $recall_score1=$_POST['recall_score'];
    $recall_score="";
     foreach($recall_score1 as $recall_score2)  
     {  
        $recall_score .= $recall_score2.",";  
     }

    $recall_qualifier1=$_POST['recall_qualifier'];
    $recall_qualifier="";
     foreach($recall_qualifier1 as $recall_qualifier2)  
     {  
        $recall_qualifier .= $recall_qualifier2.",";  
     }

    $language_maxscore1=$_POST['language_maxscore'];
    $language_maxscore="";
     foreach($language_maxscore1 as $language_maxscore2)  
     {  
        $language_maxscore .= $language_maxscore2.",";  
     }
      
    $language_score1=$_POST['language_score'];
    $language_score="";
     foreach($language_score1 as $language_score2)  
     {  
        $language_score .= $language_score2.",";  
     }

    $language_qualifier1=$_POST['language_qualifier'];
    $language_qualifier="";
     foreach($language_qualifier1 as $language_qualifier2)  
     {  
        $language_qualifier .= $language_qualifier2.",";  
     }
    $producedby=$_POST['producedby'];
    $title=$_POST['title'];
    $supervisor=$_POST['supervisor'];
    $date=$_POST['date'];


     $sql=mysqli_query($conn,"INSERT INTO minimentalstatus(date_resident,resident_name,resident_id,orientationmaxscore,orientationscore,orientation_qualifier,reg_maxscore,registration_score,registration_qualifier,calculate_maxscore,calculate_score,calculate_qualifier,recall_maxscore,recall_score,recall_qualifier,
    language_maxscore,language_score,language_qualifier,producedby,title,supervisor,date,user_id) VALUES ('$date_resident','$resident_name','$resident_id','$orientationmaxscore','$orientationscore','$orientation_qualifier','$reg_maxscore','$registration_score','$registration_qualifier','$calculate_maxscore','$calculate_score','$calculate_qualifier','$recall_maxscore','$recall_score','$recall_qualifier','$language_maxscore','$language_score','$language_qualifier','$producedby','$title','$supervisor','$date','$user_id')");
    if ($sql) {
        $successmessage .='New Status saved, Successefully';  
    }
    else {
        $errormessage .='New Status failed, try Again';       
    }    

}

if (isset($_POST['uploadfile'])){
       
    $target="../../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='minimentalstatus';
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
                                    <h5>MINI MENTAL STATUS EXAMINATION</h5>
                                    (Must be completed by a clinician trained to perform this assessment)
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add MINI MENTAL STATUS EXAMINATION  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All MINI MENTAL STATUS EXAMINATION</a>
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
                                       <form action="" method="POST" enctype="multipart/form-data">
                                       

                                                 <div class="form-group row">
                                                       <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="date_resident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident Name</label>
                                                            <input type="text" name="resident_name" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                           <div class="col-sm-12">
                                                            <label class="col-form-label">RESIDENT ID#</label>
                                                            <input type="text" name="resident_id" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                     
                                                    </div>
                                                   
                                                       
                                                        <div class="row Log">
                                                        <div class="col-sm-12">
                                                          <label class=" col-form-label">ORIENTATION</label>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">MAXIMUM SCORE</label>
                                                            <input type="text" name="orientationmaxscore[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="orientationscore[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="orientation_qualifier[]" class="form-control form-control-normal"
                                                            placeholder="What is the: (year) (season) (date) (day) (month)?">
                                                        </div>
                                                     
                                                        <a href="javascript:void(0);" class="add_Skill" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div><br>

                                                        <div class="row Reg">
                                                        <div class="col-sm-12">
                                                          <label class=" col-form-label">REGISTRATION</label>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">MAXIMUM SCORE</label>
                                                            <input type="text" name="reg_maxscore[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="registration_score[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="registration_qualifier[]" class="form-control form-control-normal"
                                                            placeholder="Name 3 objects: take a second to say each">
                                                        </div>
                                                     
                                                        <a href="javascript:void(0);" class="add_Reg" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>


                                                        <div class="row Calculate">
                                                        <div class="col-sm-12">
                                                          <label class=" col-form-label">ATTENTION AND CALCULATION</label>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">MAXIMUM SCORE</label>
                                                            <input type="text" name="calculate_maxscore[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="calculate_score[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="calculate_qualifier[]" class="form-control form-control-normal"
                                                            placeholder="Serial 7’s/One point for each correct.  Stop after 5 answers.  Alternately spell “world” backwards. “fruit” (alternative).">
                                                        </div>
                                                     
                                                        <a href="javascript:void(0);" class="add_Calculate" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>

                                                     <div class="row Recall">
                                                        <div class="col-sm-12">
                                                          <label class=" col-form-label">RECALL</label>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">MAXIMUM SCORE</label>
                                                            <input type="text" name="recall_maxscore[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="recall_score[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="recall_qualifier[]" class="form-control form-control-normal"
                                                            placeholder="Ask for 3 objects repeated above.  Give 1 point for each correct response">
                                                        </div>
                                                     
                                                        <a href="javascript:void(0);" class="add_Call" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>

                                                    <div class="row Language">
                                                        <div class="col-sm-12">
                                                          <label class=" col-form-label">LANGUAGE</label>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">MAXIMUM SCORE</label>
                                                            <input type="text" name="language_maxscore[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="language_score[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="language_qualifier[]" class="form-control form-control-normal"
                                                            placeholder="Ask for 3 objects repeated above.  Give 1 point for each correct response">
                                                        </div>
                                                     
                                                        <a href="javascript:void(0);" class="add_Langue" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>

                                                      <div class="row">
                                                      
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Prepared by</label>
                                                            <input type="text" name="producedby" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Title  </label>
                                                            <input type="text" name="title" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>

                                                     <div class="row">
                                                      
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Clinical Supervisor</label>
                                                            <input type="text" name="supervisor" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date    </label>
                                                            <input type="date" name="date" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="Add Mini Mental "
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
                                                            <th>Date</th>
                                                            <th>Resident Name</th>
                                                            <th>RESIDENT ID#</th>
                                                            <th>MAXIMUM SCORE Orientation</th>
                                                            <th> SCORE Orientation</th>
                                                            <th>Qualifier Orientation</th>
                                                            <th>MAXIMUM SCORE Registration</th>
                                                            <th> SCORE Registration</th>
                                                            <th>Qualifier Registration</th>
                                                             <th>MAXIMUM SCORE CALCULATION</th>
                                                            <th> SCORE CALCULATION</th>
                                                            <th>Qualifier CALCULATION</th>
                                                             <th>MAXIMUM SCORE RECALL</th>
                                                            <th> SCORE RECALL</th>
                                                            <th>Qualifier RECALL</th>
                                                            <th>MAXIMUM SCORE LANGUAGE</th>
                                                            <th> SCORE LANGUAGE</th>
                                                            <th>Qualifier LANGUAGE</th>
                                                            <th>Prepared by</th>
                                                            <th>Title</th>
                                                            <th>Clinical Supervisor</th>
                                                            <th>Date</th>
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM minimentalstatus");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                             <td><?php echo $row['date_resident']; ?></td>
                                                            <td><?php echo $row['resident_name']; ?></td>
                                                            <td><?php echo $row['resident_id']; ?></td>
                                                            <td><?php echo $row['orientationmaxscore']; ?></td>
                                                            <td><?php echo $row['orientationscore'] ; ?></td>
                                                            <td><?php echo $row['orientation_qualifier'] ; ?></td>
                                                             <td><?php echo $row['reg_maxscore'] ; ?></td>
                                                             <td><?php echo $row['registration_score']; ?></td>
                                                            <td><?php echo $row['registration_qualifier']; ?></td>
                                                            <td><?php echo $row['calculate_maxscore']; ?></td>
                                                            <td><?php echo $row['calculate_score']; ?></td>
                                                            <td><?php echo $row['calculate_qualifier'] ; ?></td>
                                                            <td><?php echo $row['recall_maxscore'] ; ?></td>
                                                               <td><?php echo $row['recall_score'] ; ?></td>
                                                             <td><?php echo $row['recall_qualifier'] ; ?></td>
                                                             <td><?php echo $row['language_maxscore']; ?></td>
                                                            <td><?php echo $row['language_score']; ?></td>
                                                            <td><?php echo $row['language_qualifier']; ?></td>
                                                            <td><?php echo $row['producedby']; ?></td>
                                                            <td><?php echo $row['title'] ; ?></td>
                                                            <td><?php echo $row['supervisor'] ; ?></td>
                                                             <td><?php echo $row['date'] ; ?></td>
                                                         
                                                            <td><a class="btn btn-danger"  href="delete.php?delstatus=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this mini mental Status.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="minimentalupdate.php?updatestatus=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-primary"  href="minimentalsign.php?id=<?php echo $row['id']; ?> "  id="red">Sign </a></td>
                                                            <td><a class="btn btn-success"  href="minimentalprint.php?printminimental=<?php echo $row['id']; ?>"  id="red">Print</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='minimentalstatus' AND user_id=$user_id");
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
    var addButton = $('.add_Skill'); //Add button selector
    var wrapper = $('.Log'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='form-row'><div class='col-sm-4'><label class='col-form-label' for='title'>MAXIMUM SCORE</label><input type='text' name='orientationmaxscore[]' class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Score</label><input type='text' name='orientationscore[]'   class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Qualifier</label><input type='text' name='orientation_qualifier[]' class='form-control form-control-normal' /></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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
    var addButton = $('.add_Reg'); //Add button selector
    var wrapper = $('.Reg'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='form-row'><div class='col-sm-4'><label class='col-form-label' for='title'>MAXIMUM SCORE</label><input type='text' name='reg_maxscore[]' class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Score</label><input type='text' name='registration_score[]'   class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Qualifier</label><input type='text' name='registration_qualifier[]' class='form-control form-control-normal' /></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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
    var addButton = $('.add_Calculate'); //Add button selector
    var wrapper = $('.Calculate'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='form-row'><div class='col-sm-4'><label class='col-form-label' for='title'>MAXIMUM SCORE</label><input type='text' name='calculate_maxscore[]' class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Score</label><input type='text' name='calculate_score[]'   class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Qualifier</label><input type='text' name='calculate_qualifier[]' class='form-control form-control-normal' /></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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
    var addButton = $('.add_Call'); //Add button selector
    var wrapper = $('.Recall'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='form-row'><div class='col-sm-4'><label class='col-form-label' for='title'>MAXIMUM SCORE</label><input type='text' name='recall_maxscore[]' class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Score</label><input type='text' name='recall_score[]'   class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Qualifier</label><input type='text' name='recall_qualifier[]' class='form-control form-control-normal' /></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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
    var addButton = $('.add_Langue'); //Add button selector
    var wrapper = $('.Language'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='form-row'><div class='col-sm-4'><label class='col-form-label' for='title'>MAXIMUM SCORE</label><input type='text' name='language_maxscore[]' class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Score</label><input type='text' name='language_score[]'   class='form-control form-control-normal' /></div><div class='col-sm-4'><label class='col-form-label' for='title'>Qualifier</label><input type='text' name='language_qualifier[]' class='form-control form-control-normal' /></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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