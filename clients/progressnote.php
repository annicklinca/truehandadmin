<?php include 'nav.php' ?>

<?php

$user_id=$resident_id;

// if (isset($_POST['addprogressnote'])){
      
//    $clientname=$_POST['clientname'];
//    $dob=$_POST['dob'];
//    $doa=$_POST['doa'];
//    $ahcccsid=$_POST['ahcccsid1'];
//    $writer=$_POST['writer'];
//    $dxcodes = $_POST['dxcodes'];
//    $datesession=$_POST['datesession'];
//    $times = $_POST['times'];
//    $description =$_POST['description'];
//    $assessment = $_POST['assessment'];
//    $recommendation = $_POST['recommendation'];
//    $dimensions6 = $_POST['dimensions6'];
//    $dimensions1 =$_POST['dimensions1'];
//    $dimensions2 =$_POST['dimensions2'];
//    $dimensions3 =$_POST['dimensions3'];
//    $dimensions4 =$_POST['dimensions4'];
//    $dimensions5 =$_POST['dimensions5'];
//    $datesession =$_POST['datesession'];
//    $plan =$_POST['plan'];

//     $sql=mysqli_query($conn,"INSERT INTO therapy(clientname,dob,doa,dxcodes,ahcccsid,writer,times,description,assessment,recommendation,dimensions,dimensions1,dimensions2,dimensions3,dimensions4,dimensions5,datesession,userid,plan)
//     VALUES ('$clientname','$dob','$doa','$dxcodes','$ahcccsid','$writer','$times','$description','$assessment','$recommendation','$dimensions1','$dimensions2','$dimensions3','$dimensions4','$dimensions5','$dimensions6','$datesession','$user_id','$plan')");
//     if ($sql) {
//         $successmessage .='New Progress note saved, Successefully';	
//     }
//     else {
//         $errormessage .='New progress note failed, try Again';	    
//     }    

// }
?>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Progress note </h5>
                                            <div class="card-header-right"><i
                                                class="icofont icofont-spinner-alt-5"></i></div>
                                        </div>    
                                    <div class="col-lg-12 col-xl-12">
                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">New note </a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#profile3" role="tab">All note </a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane active" id="home3" role="tabpanel">
                                                        
                                       
                                            
                                            <?php
                                                if ( isset($successmessage)) {
                                                    echo '
                                                        <div class="card borderless-card">
                                                            <div class="card-block success-breadcrumb">
                                                                <div class="breadcrumb-header">
                                                                    <span>'.$successmessage.'</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';
                                                }
                                                ?>
                                                <?php
                                                if ( isset($errormessage)) {
                                                  echo '
                                                      <div class="card borderless-card">
                                                          <div class="card-block danger-breadcrumb">
                                                              <div class="breadcrumb-header">
                                                                  <span>'.$errormessage.'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                            <div class="card-block">
                                            
        <div class="container-fluid">
                                            <?php 
      $p=$_SESSION['email'];
      $hiu=rand(1,10000000000);
      $huga="$hiu $title";
      $hash=md5($huga); 

   









    // prepare sql and bind parameters
    if (isset($_POST['submit'])){
        # code...
      
        $client=$_POST['client'];
        $date1=$_POST['date1'];
        $shift1=$_POST['shifts'];
        $shifts="";
        foreach ($shift1 as $shift ) {
            $shifts .= addslashes($shift). ",";
        }
        $adl1=$_POST['adls'];
        $adls="";
        foreach ($adl1 as $adl) {
           $adls .= addslashes($adl). ",";
        }
        $tim=addslashes($_POST['tim']);
        $appointment=addslashes($_POST['appointment']);
        $groupname=addslashes($_POST['groupname']);
        $transport=addslashes($_POST['transport']);
        $task=addslashes($_POST['task']);
        $hores=addslashes($_POST['hores']);
        $self1=$_POST['selfs'];
        $selfs="";
        foreach ($self1 as $self) {
          $selfs .= addslashes($self). ",";
        }
        
        $education1=$_POST['educations'];
        $educations="";
        foreach ($education1 as $education) {
           $educations .= addslashes($education). ",";
        }
         $therapy1=$_POST['therapyst'];
        $therapyst="";
        foreach ($therapy1 as $therapy) {
           $therapyst .= addslashes($therapy). ",";
        }
    
        $prompting=addslashes($_POST['prompting']);

        $numbers=addslashes($_POST['numbers']);
        $meals1=$_POST['meal'];
        $meal="";
        foreach ($meals1 as $meals) {
           $meal .= addslashes($meals). ",";
        }
        $beds=addslashes($_POST['beds']);
        
        $care1=$_POST['cares'];
        $cares="";
        foreach ($care1 as $care) {
           $cares .= addslashes($care). ",";
        }
        $behavior1=$_POST['behaviors'];
        $behaviors="";
        foreach ($behavior1 as $behavior) {
           $behaviors .= addslashes($behavior). ",";
        }
        $mood1=$_POST['moods'];
        $moods="";
        foreach ($mood1 as $mood) {
           $moods .= addslashes($mood). ",";
        }
       $tima=$_POST['tima'];

       $outburst1=$_POST['outbursts'];
        $outbursts="";
        foreach ($outburst1 as $outburst) {
           $outbursts .= addslashes($outburst). ",";
        }
        $outing1=$_POST['outings'];
        $outings="";
        foreach ($outing1 as $outing) {
           $outings .= addslashes($outing). ",";
        }

        $other1=$_POST['others'];
        $others="";
        foreach ($other1 as $other) {
           $others .= addslashes($other). ",";
        }
        $staff1=$_POST['staffs'];
        $staffs="";
        foreach ($staff1 as $staff) {
           $staffs .= addslashes($staff). ",";
        }
       
        $treat1=$_POST['treats'];
        $treats="";
        foreach ($treat1 as $treat) {
           $treats .= addslashes($treat). ",";
        }
         $calls1=$_POST['calld'];
        $call="";
        foreach ($calls1 as $calls) {
           $call .= addslashes($calls). ",";
        }
        $visit1=$_POST['visits'];
        $visits="";
        foreach ($visit1 as $visit) {
           $visits .= addslashes($visit). ",";
        }

        $page=addslashes($_POST['paged']);
        $hour=addslashes($_POST['hour']);
     
        $checks=addslashes($_POST['checks']);
        $specify=addslashes($_POST['specify']);
        $shiftsummary=addslashes($_POST['shiftsummary']);
        $supervtitle=addslashes($_POST['supervtitle']);
        $superdate=addslashes($_POST['superdate']);
       
        
 
    // prepare sql and bind parameters

        // work
       $sql=$conn->query("INSERT INTO dailyprogress
       (
        client,
date1,
shifts,
adls,
tim,
appointment,
groupname,
transport,
task,
hores,
selfs,
educations,
therapyst,
prompting,
numbers,
 meal,
beds,
cares,
ehaviors,
moods,
tima,
outbursts,
 outings,
others,
staffs,
treats,
calld,
visits,
paged,
hour,
checks,
shiftsummary,user_id,
specify,
supervtitle,
superdate
         )
        VALUES (
'$client',
'$date1',
'$shifts',
'$adls',
'$tim',
'$appointment',
'$groupname',
'$transport',
'$task',
'$hores',
'$selfs',
'$educations',
'$therapyst',
'$prompting',
'$numbers',
 '$meal',
'$beds',
'$cares',
'$behaviors',
'$moods',
'$tima',
'$outbursts',
 '$outings',
'$others',
'$staffs',
'$treats',
'$call',
'$visits',
'$page',
'$hour',
'$checks',
'$shiftsummary',
'$user_id',
'$specify', 
'$supervtitle',
'$superdate'

   )");
       
              
     // use exec() because no results are returned
     if($sql){

      echo '<div class="alert alert-success" role="alert">
   Success added
 </div>';
      }else{
          echo '<div class="alert alert-danger" role="alert">
          not inserted '.$conn->error.'
        </div>';
      }
     
  }

     
     ?>



 
<form action="" enctype="multipart/form-data" method="POST" accept-charset="utf-8">


       
   
       
                  <div class="row">
                    <div class="col-sm-12"><p><b> DAILY PROGRESS NOTES (AM/PM)</b></p></div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Client Name</label>
                                <input type="text" name="client" class="form-control shadow p-3 mb-3 bg-white rounded">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Date </label>
                                <input type="date" name="date1" class="form-control shadow p-3 mb-3 bg-white rounded">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Shift from:</label><br>
                                <input type="checkbox" name="shifts[]" value="8am-8pm"><label>8am-8pm</label>&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="shifts[]" value="8pm-8am"><label>8pm-8am</label>&nbsp;&nbsp;&nbsp;
                              
                                <label>(specify time)</label><input type="text" name="specify" class="form-control">
                            </div>
                        </div>
                  </div>
                   <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">I ensured client’s chores and ADL’s were completed correctly: </label>
                                <input type="radio" name="adls[]" value="yes">yes  <input type="radio" name="adls[]" value="no">no&nbsp;;<label>if no why?</label>
                              <textarea name="adls[]" class="form-control"></textarea>
                            </div>
                        </div></div>

                       <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                        <label><b>Scheduled appointment and/or group</b></label><br>
                      <div class="row col-sm-12">
                       
                        <div class="col-sm-2">
                        <label class="control-label" for="title">Time:</label>
                     
                        </div>
                        <div class="col-sm-10"><input type="text" name="tim" class="form-control">
                    </div> </div> </div>
                      </div>
                 </div> 
                  <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                      <div class="row col-sm-12">
                       
                        <div class="col-sm-2">
                        <label class="control-label" for="title">Apppoitment for:</label>
                     
                        </div>
                        <div class="col-sm-10"><input type="text" name="appointment" class="form-control">
                    </div> </div> </div>
                      </div>
                 </div> 

                        <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                      <div class="row col-sm-12">
                       
                        <div class="col-sm-2">
                        <label class="control-label" for="title">Group name:</label>
                     
                        </div>
                        <div class="col-sm-10"><input type="text" name="groupname" class="form-control">
                    </div> </div> </div>
                      </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label class="control-label" for="title">Mode of transportation? (staff, cab, etc.):</label>
                       <input type="text" name="transport" class="form-control">
                     </div>
                   </div>
                 </div>
                  <div class="row">

                              <div class="col-sm-12">
                         <div class="form-group">
                             <label class="col-form-label"><b>Stayed on task:</label>
                             <input type="radio" name="task" value="yes" ><label>Yes</label>
                             <input type="radio" name="task" value="no"><label>No</label><br>
                             <label>Completed Chores:</label>
                               <input type="radio" name="hores" value="yes"><label>yes</label>
                               <input type="radio" name="hores" value="no"><label>no</label>
                         </div>
                        </div>
       
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Self-Administered Medication(s)? </label>
                          <input type="radio" name="selfs[]" value="yes">yes<input type="radio" name="selfs[]" value="no">no &nbsp;&nbsp;<label>(if no state why?)</label>
                          <textarea name="selfs[]" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Med education provided? </label>
                          <input type="radio" name="educations[]" value="yes">yes<input type="radio" name="educations[]" value="no">no &nbsp;&nbsp;<label>(if no state why?)</label>
                          <textarea name="educations[]" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Completed Therapy Group?  </label>
                          <input type="radio" name="therapyst[]" value="yes">yes<input type="radio" name="therapyst[]" value="no">no &nbsp;&nbsp;<label>(Group?)</label>
                          <textarea name="therapyst[]" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Comments (Prompting?) </label>
                          <textarea name="prompting" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Number of prompts? </label>
                      <input type="text" name="numbers" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">MEALS:  </label>
                          <input type="checkbox" name="meal[]" value="ate well">Yes,ate well&nbsp;&nbsp;
                          <input type="checkbox" name="meal[]" value="ate partial">Ate partial&nbsp;&nbsp;
                             <input type="checkbox" name="meal[]" value="refused">Refused
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Soiled the bed: </label>
                          <input type="radio" name="beds" value="yes">Yes &nbsp;&nbsp;
                          <input type="radio" name="beds" value="no">No &nbsp;&nbsp;
                            
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title"><b>Personal Care:</b> Prompted? </label>
                          <input type="checkbox" name="cares[]" value="yes">Yes &nbsp;&nbsp;
                          <input type="checkbox" name="cares[]" value="no">No &nbsp;&nbsp;
                           <input type="checkbox" name="cares[]" value="well groomed">well groomed &nbsp;&nbsp; 
                             <input type="checkbox" name="cares[]" value="hygiene neglected">Hygiene Neglected (document below)<br> 
                            <label>comment:</label><textarea name="cares[]" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Behavior:  </label>
                          <input type="checkbox" name="behaviors[]" value="cooperative"> Cooperative &nbsp;&nbsp;
                          <input type="checkbox" name="behaviors[]" value="calm">Calm &nbsp;&nbsp;
                          <input type="checkbox" name="behaviors[]" value="agitated">Agitated &nbsp;&nbsp;
                          <input type="checkbox" name="behaviors[]" value="irritable">Irritable &nbsp;&nbsp;
                          <input type="checkbox" name="behaviors[]" value="threatening">Threatening &nbsp;&nbsp;
                           <input type="checkbox" name="behaviors[]" value="combative">Combative &nbsp;&nbsp;
                          <input type="checkbox" name="behaviors[]" value="other">Other &nbsp;&nbsp;
                        <br>
                        <label>comment:</label>
                        <textarea name="behaviors[]" class="form-control"></textarea>
                      </div></div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Mood:</label>
                          <input type="checkbox" name="moods[]" value="Will not listen"> Will not listen &nbsp;&nbsp;
                          <input type="checkbox" name="moods[]" value="Angry">Angry &nbsp;&nbsp;
                          <input type="checkbox" name="moods[]" value="Apathetic">Apathetic &nbsp;&nbsp;
                          <input type="checkbox" name="moods[]" value="irritable">Irritable &nbsp;&nbsp;
                          <input type="checkbox" name="moods[]" value="threatening">Depressed &nbsp;&nbsp;
                           <input type="checkbox" name="moods[]" value="Sad">Sad  &nbsp;&nbsp;
                          <input type="checkbox" name="moods[]" value="Withdrawn">Withdrawn &nbsp;&nbsp;
                           <input type="checkbox" name="moods[]" value="Euthymic">Euthymic &nbsp;&nbsp;
                        <br>
                        <label>comment:</label>
                        <textarea name="moods[]" class="form-control"></textarea>
                      </div></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Reflection Time:</label>
                          <input type="radio" name="tima" value="yes"> Yes &nbsp;&nbsp;
                          <input type="radio" name="tima" value="no">No &nbsp;&nbsp;
                          <label class="control-label" for="title">Behavioral Outburst:</label>
                          <input type="radio" name="outbursts[]" value="yes">yes &nbsp;&nbsp;
                          <input type="radio" name="outbursts[]" value="yes">no &nbsp;&nbsp;(if yes comment below in documentation)<br>
                             <label>comment:</label>
                        <textarea name="outbursts[]" class="form-control"></textarea>
                           <label class="control-label" for="title">Outing:</label>
                          <input type="radio" name="outings[]" value="yes">yes &nbsp;&nbsp;
                           <input type="radio" name="outings[]" value="no">no  &nbsp;&nbsp;
                           <label class="control-label" for="info"> If yes please indicate where/how long:</label>
                        <input type="text" name="outings[]" class="form-control">
                     
                      </div></div>
                    </div>
                     <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="title">Interaction with other residents:</label>
                          <input type="checkbox" name="others[]" value="Good"> Good &nbsp;&nbsp;
                          <input type="checkbox" name="others[]" value="Poor">Poor &nbsp;&nbsp;
                          <input type="checkbox" name="others[]" value="Isolated"> Isolated &nbsp;&nbsp;
                         <label class="control-label" for="title">W/Staff:</label>
                          <input type="checkbox" name="staffs[]" value="Good">Good &nbsp;&nbsp;
                          <input type="checkbox" name="staffs[]" value="Poor">Poor &nbsp;&nbsp;
                           <input type="checkbox" name="staffs[]" value="Avoided">Avoided  &nbsp;&nbsp;<br>
                          <label class="control-label" for="info">Treatment Goals:Processed w/Client?</label>
                          <input type="radio" name="treats[]" value="yes">yes &nbsp;&nbsp;
                          <input type="radio" name="treats[]" value="no">no &nbsp;&nbsp;
                           <input type="radio" name="treats[]" value="refused">refused &nbsp;&nbsp;
                        <label>Treatment goals addressed this shift: </label>
                        <textarea name="treats[]" class="form-control"></textarea>
                      </div></div>
                    </div>
                     <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                      <div class="row col-sm-12">
                       
                        <div class="col-sm-6">
                        <label class="control-label" for="title">Phone calls:</label>
                        <input type="checkbox" name="calld[]" value="N/A">N/A &nbsp;
                        <input type="checkbox" name="calld[]" value="Family">Family &nbsp;
                        <input type="text" name="calld[]" class="form-control">
                        </div>
                        <div class="col-sm-6"> <input type="checkbox" name="calld[]" value="CM/PO">CM/PO <br><input type="text" name="calld[]" class="form-control">
                    </div>  <div class="col-sm-6"><input type="checkbox" name="calld[]" value="Other Duration">Other Duration &nbsp;<input type="text" name="calld[]" class="form-control"></div> </div> </div>
                      </div>
                 </div> 
                 <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                      <div class="row col-sm-12">
                       
                        <div class="col-sm-6">
                        <label class="control-label" for="title">Visits:</label>
                        <input type="checkbox" name="visits[]" value="N/A">N/A &nbsp;
                        <input type="checkbox" name="visits[]" value="Family">Family &nbsp;
                        <input type="text" name="visits[]" class="form-control">
                        </div>
                        <div class="col-sm-6"> <input type="checkbox" name="visits[]" value="CM/PO">CM/PO <br><input type="text" name="visit[]" class="form-control">
                       </div>  <div class="col-sm-6"><input type="checkbox" name="visits[]" value="Other Duration">Other Duration &nbsp;<input type="text" name="visit[]" class="form-control"></div> </div> </div>
                      </div>
                 </div> 
                 <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label class="control-label" >Additional Documentation Page:</label>&nbsp;&nbsp;
                       <input type="radio" name="paged" value="yes">yes&nbsp;&nbsp;<input type="radio" name="paged" value="no">no
                     </div>
                   </div>
                 </div>
                  <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label class="control-label">Overnight hourly respirations:</label>&nbsp;&nbsp;
                       <input type="radio" name="hour" value="yes">yes&nbsp;&nbsp;<input type="radio" name="hour" value="no">no
                     </div>
                   </div>
                 </div>
                  <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label class="control-label" >15 min checks for safety needed:</label>&nbsp;&nbsp;
                       <input type="radio" name="checks" value="yes">yes&nbsp;&nbsp;<input type="radio" name="checks" value="no">no
                     </div>
                   </div>
                 </div>
                  <div class="row">
                   <div class="col-sm-12">
                     <div class="form-group">
                       <label class="control-label" >Shift Summary:</label>
                     <textarea name="shiftsummary" class="form-control"></textarea>
                    </div>
                   </div>
                 </div>
                  <div class="row">
                   <div class="col-sm-6">
                     <div class="form-group">
                       <label class="control-label" >Staff Title</label>
                       <input type="text" name="supervtitle" class="form-control">
                    </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                       <label class="control-label" >Date:</label>
                       <input type="date" name="superdate" class="form-control">
                    </div>
                   </div>
                 </div>

                  
<div class="form-group">
            <input type="submit" name="submit" value="Submit"  class="form-control shadow p-3 mb-3 rounded btn-success" id="submit" />
            </div>
</form>
 
 
   
                                                    </div>
                                                </div>
                                                  
                                                    </div>
                                                    <div class="tab-pane" id="profile3" role="tabpanel">
                                                        
                                                        <h2>All progress note</h2>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                            <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                            <th>print</th>
                                                <th>update</th>
                                                                                           <th>sign</th>
                                                <th>delete</th>
                                               <th>client</th>
                                               <th>date1</th>
                                               <th>shifts</th>
                                               <th>adls</th>
                                               <th>tim</th>
                                               <th>appointment</th>
                                               <th>groupname</th>
                                               <th>transport</th>
                                               <th>task</th>
                                               <th>chores</th>
                                               <th>selfs</th>
                                               <th>educations</th>
                                               <th>therapyst</th>
                                               <th>prompting</th>
                                               <th>numbers</th>
                                               <th>meal</th>
                                               <th>beds</th>
                                               <th>cares</th>
                                               <th>behaviors</th>
                                               <th>moods</th>
                                               <th>tima</th>
                                               <th>outbursts</th>
                                               <th>outings</th>
                                               <th>others</th>
                                               <th>staffs</th>
                                               <th>treat</th>
                                                <th>call</th>
                                               <th>visits</th>
                                               <th>page</th>
                                               <th>hour</th>
                                               <th>checks</th>
                                               <th>shift summary</th>
                                               <th> Title</th>
                                               <th> Date</th>
                                                                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sel=$conn->query("SELECT * from dailyprogress  order by id desc ");
                                             while($rows=mysqli_fetch_array($sel))
                                             { 
                                            
                                            ?>
                                            <tr>
                                            <td><a href="printprogressnote.php?id=<?php  echo $rows['id'] ?>"><span class="btn btn-success">Print</span></a></td>                                              
                                              <td><a href="updateprogress.php?id=<?php  echo $rows['id'] ?>"><span class="btn btn-primary">Update</span></a></td>
                                              <td><a href="progresssign.php?id=<?php  echo $rows['id'] ?>"><span class="btn btn-success">Sign</span></a></td>
                                              <td><a href="delete.php?delprogress=<?php echo $rows['id']; ?>"><span class="btn btn-danger">Delete</span></a></td>
                               <td> <?php echo $rows['client'];?></td>
                               <td> <?php echo $rows['date1'];?></td>
                               	<td> <?php echo $rows['shifts'];?></td>
                               	<td> <?php
                                 $ad=$rows['adls'];
                                 echo rtrim($ad, ' , ');?></td>
                               	<td> <?php echo $rows['tim'];?></td>
                               	<td> <?php echo $rows['appointment'];?></td>
                               	<td> <?php echo $rows['groupname'];?></td>
                               	<td> <?php echo $rows['transport'];?></td>
                               	<td> <?php echo $rows['task'];?></td>
                               		<td> <?php echo $rows['hores'];?></td>
                               		<td> <?php 
                                   $selfs=strval($rows['selfs']);
                                   $selfu=rtrim($selfs, " , ");
                                        echo $selfu;
                                   ?></td>
                               		<td> <?php echo rtrim($rows['educations'], ' , ');?></td>
                               		<td> <?php echo rtrim($rows['therapyst'], ' , ');?></td>
                               		<td> <?php echo $rows['prompting'];?></td>
                               		<td> <?php echo $rows['numbers'];?></td>
                               		<td> <?php echo rtrim($rows['meal'], ' , ');?></td>
                               		<td> <?php echo $rows['beds'];?></td>
                               		<td> <?php echo rtrim($rows['cares'], ' , ');?></td>
                               		<td> <?php echo rtrim($rows['ehaviors'], ' , ');?></td>
                               		<td> <?php echo rtrim($rows['moods'],' , ');?></td>
                               		<td> <?php echo $rows['tima'];?></td>
                               		<td> <?php echo rtrim($rows['outbursts'], ' , ');?></td>
                               		<td> <?php echo rtrim($rows['outings'], ' , ');?></td>
                               		<td> <?php echo $rows['others'];?></td>
                               		<td> <?php echo $rows['staffs'];?></td>
                               			<td> <?php echo $rows['treats'];?></td>
                               				<td> <?php echo rtrim($rows['calld'], ' , ');?></td>
                               					<td> <?php echo rtrim($rows['visits'], ' , ');?></td>
                               					<td> <?php echo $rows['paged'];?></td>
                               					<td> <?php echo $rows['hour'];?></td>
                               					<td> <?php echo $rows['checks'];?></td>
                               					<td> <?php echo $rows['shiftsummary'];?></td>
                               					<td> <?php echo $rows['supervtitle'];?></td>
                               					<td> <?php echo $rows['superdate'];?></td>
                                               
                                              
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
<?php include 'footer.php' ?>