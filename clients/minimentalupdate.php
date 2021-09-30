<?php
include 'nav.php';
$user_id=$user_id;
$rec_id=$_GET['updatestatus']; 
if (isset($_POST['update'])){
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


     $sql=mysqli_query($conn,"UPDATE minimentalstatus SET 
    
    date_resident='$date_resident',
    resident_name='$resident_name',
    resident_id='$resident_id',
    orientationmaxscore='$orientationmaxscore',
    orientationscore='$orientationscore',
    orientation_qualifier='$orientation_qualifier',
    reg_maxscore='$reg_maxscore',
    registration_score='$registration_score',
    registration_qualifier='$registration_qualifier',
    calculate_maxscore='$calculate_maxscore',
    calculate_score='$calculate_score',
    calculate_qualifier='$calculate_qualifier',
    recall_maxscore='$recall_maxscore',
    recall_score='$recall_score',
    recall_qualifier='$recall_qualifier',
    language_maxscore='$language_maxscore',
    language_score='$language_score',
    language_qualifier='$language_qualifier',
    producedby='$producedby',
    title='$title',
    supervisor='$supervisor',
    date='$date'
    
   
  

 WHERE id='$rec_id';");
    if ($sql) {
        $successmessage .='Update STATUS Successefully';
    }
    else {
        $errormessage .='Add STATUS failed!';       
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
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update MINI MENTAL STATUS EXAMINATION  </a>
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
                                        if (isset($_GET['updatestatus'])) {
                                        $ser_id=$_GET['updatestatus'];
                                        $sel=$conn->query("SELECT * from minimentalstatus where id='$ser_id' ");
                                        while($rows=mysqli_fetch_array($sel))
                                         {
                                         ?>

                                                 <div class="form-group row">
                                                       <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="date_resident" value="<?php echo $rows['date_resident']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident Name</label>
                                                            <input type="text" name="resident_name" value="<?php echo $rows['resident_name']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                           <div class="col-sm-12">
                                                            <label class="col-form-label">RESIDENT ID#</label>
                                                            <input type="text" name="resident_id" value="<?php echo $rows['resident_id']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                     
                                                    </div>
                                                   
                                                       
                                                        <div class="row Log">
                                                        <div class="col-sm-12">
                                                          <label class=" col-form-label">ORIENTATION</label>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">MAXIMUM SCORE</label>
                                                            <input type="text" name="orientationmaxscore[]" value="<?php echo $rows['orientationmaxscore']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="orientationscore[]" value="<?php echo $rows['orientationscore']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="orientation_qualifier[]" value="<?php echo $rows['orientation_qualifier']?>" class="form-control form-control-normal"
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
                                                            <input type="text" name="reg_maxscore[]" value="<?php echo $rows['reg_maxscore']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="registration_score[]" value="<?php echo $rows['registration_score']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="registration_qualifier[]" value="<?php echo $rows['registration_qualifier']?>" class="form-control form-control-normal"
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
                                                            <input type="text" name="calculate_maxscore[]" value="<?php echo $rows['calculate_maxscore']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="calculate_score[]" value="<?php echo $rows['calculate_score']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="calculate_qualifier[]" value="<?php echo $rows['calculate_qualifier']?>" class="form-control form-control-normal"
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
                                                            <input type="text" name="recall_maxscore[]" value="<?php echo $rows['recall_maxscore']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="recall_score[]" value="<?php echo $rows['recall_score']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="recall_qualifier[]" value="<?php echo $rows['recall_qualifier']?>" class="form-control form-control-normal"
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
                                                            <input type="text" name="language_maxscore[]" value="<?php echo $rows['language_maxscore']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Score</label>
                                                            <input type="text" name="language_score[]" value="<?php echo $rows['language_score']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Qualifier</label>
                                                            <input type="text" name="language_qualifier[]" value="<?php echo $rows['language_qualifier']?>" class="form-control form-control-normal"
                                                            placeholder="Ask for 3 objects repeated above.  Give 1 point for each correct response">
                                                        </div>
                                                     
                                                        <a href="javascript:void(0);" class="add_Langue" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>

                                                      <div class="row">
                                                      
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Prepared by</label>
                                                            <input type="text" name="producedby" value="<?php echo $rows['producedby']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Title  </label>
                                                            <input type="text" name="title" value="<?php echo $rows['title']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>

                                                     <div class="row">
                                                      
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Clinical Supervisor</label>
                                                            <input type="text" name="supervisor" value="<?php echo $rows['supervisor']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date    </label>
                                                            <input type="date" name="date" value="<?php echo $rows['date']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Mini Mental "
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