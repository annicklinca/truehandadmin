<?php
 include 'nav.php';


$rec_id=$_GET['id'];

if (isset($_POST['submit'])){
    
    
    $client=$_POST['client'];
    $date1=$_POST['date1'];
    $shift1=$_POST['shifts'];
    $shifts="";
    foreach ($shift1 as $shift ) {
        $shifts .= $shift. ",";
    }
    $adl1=$_POST['adls'];
    $adls="";
    foreach ($adl1 as $adl) {
       $adls .= $adl. ",";
    }
    $tim=$_POST['tim'];
    $appointment=$_POST['appointment'];
    $groupname=$_POST['groupname'];
    $transport=$_POST['transport'];
    $task=$_POST['task'];
    $chores=$_POST['chores'];
    $self1=$_POST['selfs'];
    $selfs="";
    foreach ($self1 as $self) {
      $selfs .= $self. ",";
    }
    
    $education1=$_POST['educations'];
    $educations="";
    foreach ($education1 as $education) {
       $educations .= $education. ",";
    }
     $therapy1=$_POST['therapyst'];
    $therapyst="";
    foreach ($therapy1 as $therapy) {
       $therapyst .= $therapy. ",";
    }

    $prompting=$_POST['prompting'];

    $numbers=$_POST['numbers'];
    $meals1=$_POST['meal'];
    $meal="";
    foreach ($meals1 as $meals) {
       $meal .= $meals. ",";
    }
    $beds=$_POST['beds'];
    
    $care1=$_POST['cares'];
    $cares="";
    foreach ($care1 as $care) {
       $cares .= $care. ",";
    }
    $behavior1=$_POST['behaviors'];
    $behaviors="";
    foreach ($behavior1 as $behavior) {
       $behaviors .= $behavior. ",";
    }
    $mood1=$_POST['moods'];
    $moods="";
    foreach ($mood1 as $mood) {
       $moods .= $mood. ",";
    }
   $tima=$_POST['tima'];

   $outburst1=$_POST['outbursts'];
    $outbursts="";
    foreach ($outburst1 as $outburst) {
       $outbursts .= $outburst. ",";
    }
    $outing1=$_POST['outings'];
    $outings="";
    foreach ($outing1 as $outing) {
       $outings .= $outing. ",";
    }

    $other1=$_POST['others'];
    $others="";
    foreach ($other1 as $other) {
       $others .= $other. ",";
    }
    $staff1=$_POST['staffs'];
    $staffs="";
    foreach ($staff1 as $staff) {
       $staffs .= $staff. ",";
    }
   
    $treat1=$_POST['treats'];
    $treats="";
    foreach ($treat1 as $treat) {
       $treats .= $treat. ",";
    }
     $calls1=$_POST['call'];
    $call="";
    foreach ($calls1 as $calls) {
       $call .= $calls. ",";
    }
    $visit1=$_POST['visits'];
    $visits="";
    foreach ($visit1 as $visit) {
       $visits .= $visit. ",";
    }

    $page=$_POST['page'];
    $hour=$_POST['hour'];
 
    $checks=$_POST['checks'];
    $sql=mysqli_query($conn,"UPDATE dailyprogress SET client='$client',date1='$date1',
    shifts='$shifts',
    
    adls='$adls',
    tim='$tim',
    appointment='$appointment',
    groupname='$groupname',
    
    transport='$transport',
    task='$task',
    

    hores='$chores',
    selfs='$selfs',
    
    educations='$educations',
    
    therapyst='$therapyst',
    
    prompting='$prompting',
    
    numbers='$numbers',
    
    meal='$meal',
    
    beds='$beds',
    
    cares='$cares',
    ehaviors='$behaviors',
    
    moods='$moods',
    tima='$tima',
    
    outbursts='$outbursts',
    
    outings='$outings',
    
    others='$others',
    
    staffs='$staffs',
    
    treats='$treats',
    
    calld='$call',

    visits='$visits',
    paged='$page',
    hour='$hour',
    checks='$checks'
    
   
   
    ");
   
    if ($sql) {
        $successmessage .='Update progress note';
        	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
    }    

}


?>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Progress note</h5>
                                            <div class="card-header-right"><i
                                                class="icofont icofont-spinner-alt-5"></i></div>
                                        </div>    
                                    <div class="col-lg-12 col-xl-12">
                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">Update progress</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
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
                                                                </div> <br>
                                                                <div class="breadcrumb-header">
                                                                <a class="btn btn-success"  href="progressnote.php"> GO to progress</a> 
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
                                            <?php
                                                if (isset($_GET['id'])) {
                                                    $recp_id=$_GET['id'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM  dailyprogress WHERE  dailyprogress.id=$recp_id");
                                                    while ($rows=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                

                                                        <form action="" enctype="multipart/form-data" method="POST" accept-charset="utf-8">


                                                            
                                                        
                                                            
                                                        <div class="row">
                                                        <div class="col-sm-12"><p><b> DAILY PROGRESS NOTES (AM/PM)</b></p></div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Client Name</label>
                                                                    <input type="text" name="client" value="<?php echo $rows['client'] ; ?>" class="form-control shadow p-3 mb-3 bg-white rounded">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Date </label>
                                                                    <input type="date" name="date1" value="<?php echo $rows['date1'] ; ?>" class="form-control shadow p-3 mb-3 bg-white rounded">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Shift from:</label><br>
                                                                    <input type="checkbox" name="shifts[]" value="8am-4pm"><label>8am-4pm</label>&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" name="shifts[]" value="4pm-12am"><label>4pm-12am</label>&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" name="shifts[]" value="12am- 8am"><label>12am-8am</label><br>
                                                                    <label>(specify time)</label><input type="text" name="shift[]" value="<?php echo $rows['shifts'] ; ?>" class="form-control">
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">I ensured client’s chores and ADL’s were completed correctly: </label>
                                                                    <input type="radio" name="adls[]" value="yes">yes  <input type="radio" name="adls[]" value="no">no&nbsp;;<label>if no why?</label>
                                                                    <textarea name="adls[]" class="form-control">
                                                                    <?php echo $rows['adls'] ; ?>
                                                                    </textarea>
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
                                                            <div class="col-sm-10"><input type="text"  value="<?php echo $rows['tim'] ; ?>"  name="tim" class="form-control">
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
                                                            <div class="col-sm-10"><input type="text" name="appointment" value="<?php echo $rows['appointment'] ; ?>" class="form-control">
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
                                                            <div class="col-sm-10"><input type="text" name="groupname" value="<?php echo $rows['groupname'] ; ?>" class="form-control">
                                                        </div> </div> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="title">Mode of transportation? (staff, cab, etc.):</label>
                                                            <input type="text" name="transport" value="<?php echo $rows['transport'] ; ?>" class="form-control">
                                                        </div>
                                                        </div>
                                                        </div>
                                                        <div class="row">

                                                                    <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="col-form-label"><b>Stayed on task:</label>
                                                                <input type="radio" name="task" <?php if ($rows['task']=='yes'){echo 'checked';}?> value="yes" ><label>Yes</label>
                                                                <input type="radio" name="task" <?php if ($rows['task']=='no'){echo 'checked';}?> value="no"><label>No</label><br>
                                                                <label>Completed Chores:</label>
                                                                    <input type="radio" name="chores" <?php if ($rows['chores']=='yes'){echo 'checked';}?> value="yes"><label>yes</label>
                                                                    <input type="radio" name="chores" <?php if ($rows['chores']=='no'){echo 'checked';}?> value="no"><label>no</label>
                                                            </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="title">Self-Administered Medication(s)? </label>
                                                                <input type="radio" name="selfs[]" value="yes">yes<input type="radio" name="selfs[]" value="no">no &nbsp;&nbsp;<label>(if no state why?)</label>
                                                                <textarea name="selfs[]" class="form-control">
                                                                <?php echo $rows['selfs'] ; ?>
                                                                </textarea>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="title">Med education provided? </label>
                                                                <input type="radio" name="educations[]" value="yes">yes<input type="radio" name="educations[]" value="no">no &nbsp;&nbsp;<label>(if no state why?)</label>
                                                                <textarea name="educations[]" class="form-control">
                                                                <?php echo $rows['educations'] ; ?>
                                                                </textarea>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="title">Completed Therapy Group?  </label>
                                                                <input type="radio" name="therapyst[]" value="yes">yes<input type="radio" name="therapyst[]" value="no">no &nbsp;&nbsp;<label>(Group?)</label>
                                                                <textarea name="therapyst[]" class="form-control">
                                                                <?php echo $rows['therapyst'] ; ?>
                                                                </textarea>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="title">Comments (Prompting?) </label>
                                                                <textarea name="prompting" class="form-control">
                                                                <?php echo $rows['prompting'] ; ?>
                                                                </textarea>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="title">Number of prompts? </label>
                                                            <input type="text" name="numbers" value="<?php echo $rows['numbers'] ; ?>" class="form-control">
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
                                                            <input type="text" name="meal[]" value="<?php echo $rows['meal'] ; ?>" class="form-control">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="title">Soiled the bed: </label>
                                                                <input type="radio" name="beds" <?php if ($rows['beds']=='yes'){echo 'checked';}?> value="yes">Yes &nbsp;&nbsp;
                                                                <input type="radio" name="beds" <?php if ($rows['beds']=='no'){echo 'checked';}?> value="no">No &nbsp;&nbsp;
                                                                
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
                                                                <label>comment:</label><textarea name="cares[]" class="form-control">
                                                                <?php echo $rows['cares'] ; ?>
                                                                </textarea>
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
                                                            <textarea name="behaviors[]" class="form-control">
                                                            <?php echo $rows['ehaviors'] ; ?>
                                                            </textarea>
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
                                                            <textarea name="moods[]" class="form-control">
                                                            <?php echo $rows['moods'] ; ?>
                                                            </textarea>
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
                                                            <textarea name="outbursts[]" class="form-control">
                                                            <?php echo $rows['outbursts'] ; ?>
                                                            </textarea>
                                                                <label class="control-label" for="title">Outing:</label>
                                                                <input type="radio" name="outings[]" value="yes">yes &nbsp;&nbsp;
                                                                <input type="radio" name="outings[]" value="no">no  &nbsp;&nbsp;
                                                                <label class="control-label" for="info"> If yes please indicate where/how long:</label>
                                                            <input type="text" name="outings[]" value="<?php echo $rows['outings'] ; ?>" class="form-control">
                                                        
                                                            </div></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="title">Interaction with other residents:</label>
                                                                <input type="checkbox" name="others[]" value="Good"> Good &nbsp;&nbsp;
                                                                <input type="checkbox" name="others[]" value="Poor">Poor &nbsp;&nbsp;
                                                                <input type="checkbox" name="others[]" value=" Isolated"> Isolated &nbsp;&nbsp;
                                                            <label class="control-label" for="title">W/Staff:</label>
                                                                <input type="checkbox" name="staffs[]" value="Good">Good &nbsp;&nbsp;
                                                                <input type="checkbox" name="staffs[]" value="Poor">Poor &nbsp;&nbsp;
                                                                <input type="checkbox" name="staffs[]" value="Avoided">Avoided  &nbsp;&nbsp;<br>
                                                                <label class="control-label" for="info">Treatment Goals:Processed w/Client?</label>
                                                                <input type="radio" name="treats[]" value="yes">yes &nbsp;&nbsp;
                                                                <input type="radio" name="treats[]" value="no">no &nbsp;&nbsp;
                                                                <input type="radio" name="treats[]" value="refused">refused &nbsp;&nbsp;
                                                            <label>Treatment goals addressed this shift: </label>
                                                            <textarea name="treats[]" class="form-control">
                                                            <?php echo $rows['treats'] ; ?>
                                                            </textarea>
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
                                                            <input type="text" name="calld[]" value="<?php echo $rows['calld'] ; ?>" class="form-control">
                                                            </div>
                                                            <div class="col-sm-6"> <input type="checkbox" name="calld[]" value="CM/PO">CM/PO <br><input type="text" name="calld[]" class="form-control">
                                                        </div>  <div class="col-sm-6"><input type="checkbox" name="calld[]" value="Other Duration">Other Duration &nbsp;
                                                        <input type="text" name="calld[]" value="<?php echo $rows['calld']; ?>" class="form-control"></div> </div> </div>
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
                                                            <input type="text" name="visits[]"  class="form-control">
                                                            </div>
                                                            <div class="col-sm-6"> <input type="checkbox" name="visits[]" value="CM/PO">CM/PO <br>
                                                            <input type="text" name="visit[]" class="form-control">
                                                        </div>  <div class="col-sm-6"><input type="checkbox" name="visits[]" value="Other Duration">Other Duration &nbsp;
                                                        <input type="text" name="visit[]" class="form-control"></div> </div> </div>
                                                            </div>
                                                            <input type="text" name="visits[]" value="<?php echo $rows['visits'] ; ?>" class="form-control">

                                                        </div> 
                                                        <div class="row">
                                                        <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label" >Additional Documentation Page:</label>&nbsp;&nbsp;
                                                            <input type="radio" name="paged" <?php if ($rows['paged']=='yes'){echo 'checked';}?> value="yes">yes&nbsp;&nbsp;
                                                            <input type="radio" name="paged" <?php if ($rows['paged']=='no'){echo 'checked';}?>  value="no">no
                                                        </div>
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Overnight hourly respirations:</label>&nbsp;&nbsp;
                                                            <input type="radio" name="hour" <?php if ($rows['hour']=='yes'){echo 'checked';}?>  value="yes">yes&nbsp;&nbsp;
                                                            <input type="radio" name="hour" <?php if ($rows['hour']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label" >15 min checks for safety needed:</label>&nbsp;&nbsp;
                                                            <input type="radio" name="checks" <?php if ($rows['checks']=='yes'){echo 'checked';}?> value="yes">yes&nbsp;&nbsp;
                                                            <input type="radio" name="checks" <?php if ($rows['checks']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        </div>
                                                        </div>


                                                        <div class="form-group">
                                                        <input type="submit" name="submit" value="Submit"  class="form-control shadow p-3 mb-3 rounded btn-success" id="submit" />
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
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warning Section Starts -->
            <!-- Older IE warning message -->
        <!--[if lt IE 9]>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <!-- am chart -->
    <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Todo js -->
    <script type="text/javascript " src="assets/pages/todo/todo.js "></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
    var $window = $(window);
    var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        }
        else {
            nav.removeClass('active');
        }
    });
    </script>
    </body>

    </html>
