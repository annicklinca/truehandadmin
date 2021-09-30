<?php
include "../../connection.php";
$stylesheet = file_get_contents('/../../tailwind.css');
require_once __DIR__ . '/../../vendor/autoload.php';
$id=$_GET['id'];

 $sel=$conn->query("SELECT * from dailyprogress where id='$id' order by id desc ");
                                             while($rows=mysqli_fetch_array($sel))
                                             { 
                                             $client=$rows['client'];
                                             $date1=date("m-d-Y", strtotime($rows['date1']));
                                             $shifts=$rows['shifts'];
                                             $shift=explode (",",strval($shifts));
                                             if(in_array("8am-4pm",$shift)){
                                               $shiftam ='<input type="checkbox" checked="checked"/>8am-4pm';
                                               }else{
                                                $shiftam  ='<input type="checkbox" />8am-4pm';
                                               }
                                               if(in_array("4pm-12am",$shift)){
                                                 $shiftpm ='<input type="checkbox" checked="checked"/>4pm-12am';
                                                 }else{
                                                  $shiftpm ='<input type="checkbox" />4pm-12am';
                                                 }
                                                 if(in_array("12am- 8am",$shift)){
                                                    $shift12am ='<input type="checkbox" checked="checked"/>12am-8am';
                                                    }else{
                                                     $shift12am ='<input type="checkbox" />12am-8am';
                                                    }
                                              $adls=$rows['adls'];
                                              $adl=explode (",",strval($adls));
if(in_array("yes",$adl)){
  $adlyes ='<input type="checkbox" checked="checked"/> Yes';
  }else{
   $adlyes ='<input type="checkbox" />Yes';
  }
  if(in_array("no",$adl)){
    $adlno ='<input type="checkbox" checked="checked"/>No';
    }else{
     $adlno ='<input type="checkbox" />No';
    }
                                              $tim=$rows['tim'];
                                              $appointment=$rows['appointment'];
                                              $groupname=$rows['groupname'];
                                              $transport=$rows['transport'];
                                              $tasks=$rows['task'];
                                              
                                            $task=explode (",",strval($tasks));
if(in_array("yes",$task)){
  $taskyes ='<input type="checkbox" checked="checked"/>Yes';
  }else{
   $taskyes ='<input type="checkbox" />Yes';
  }
  if(in_array("no",$task)){
    $taskno ='<input type="checkbox" checked="checked"/>No';
    }else{
     $taskno ='<input type="checkbox" />No';
    }
                                             $chores=$rows['hores'];
                                             $chore=explode (",",strval($chores));
if(in_array("yes",$chore)){
  $choreyes ='<input type="checkbox" checked="checked"/>Yes';
  }else{
   $choreyes ='<input type="checkbox" />Yes';
  }
  if(in_array("no",$chore)){
    $choreno ='<input type="checkbox" checked="checked"/>No';
    }else{
     $choreno ='<input type="checkbox" />No';
    }
                                            $selfs=$rows['selfs'];
                                            $educations=$rows['educations'];
                                            $therapyst=$rows['therapyst'];
                                            $prompting=$rows['prompting'];
                                            $numbers=$rows['numbers'];
                                            $meal=$rows['meal'];
                                            $beds=$rows['beds'];
                                            $cares=$rows['cares'];
                                            $ehaviors=$rows['ehaviors'];
                                            $behaviors=explode (",",strval($ehaviors));

                                            if(in_array("cooperative",$behaviors)){
                                              $cooperative ='<input type="checkbox" checked="checked"/>cooperative';
                                              }else{
                                               $cooperative ='<input type="checkbox" />cooperative';
                                              }

                                            if(in_array("calm",$behaviors)){
                                                $calm ='<input type="checkbox" checked="checked"/>calm';
                                                }else{
                                                 $calm ='<input type="checkbox" />calm';
                                                }
                                        
                                            if(in_array("agitated",$behaviors)){
                                              $agitated ='<input type="checkbox" checked="checked"/>agitated';
                                              }else{
                                                $agitated ='<input type="checkbox" />agitated';
                                              } 
                                            
                                            if(in_array("irritable",$behaviors)){
                                              $irritable ='<input type="checkbox" checked="checked"/>irritable';
                                              }else{
                                                $irritable ='<input type="checkbox" />irritable';
                                              }  
                                            
                                              if(in_array("threatening",$behaviors)){
                                                $threatening ='<input type="checkbox" checked="checked"/>threatening';
                                                }else{
                                                  $threatening ='<input type="checkbox" />threatening';
                                                }  
                                            
                                                if(in_array("combative",$behaviors)){
                                                  $combative ='<input type="checkbox" checked="checked"/>combative';
                                                  }else{
                                                    $combative ='<input type="checkbox" />combative';
                                                  }  
                                            
                                                  if(in_array("other",$behaviors)){
                                                    $other ='<input type="checkbox" checked="checked"/>other';
                                                    }else{
                                                      $other ='<input type="checkbox" />other';
                                                    } 

                                            $moods=$rows['moods'];
                                            $mood=explode (",",strval($moods));

                                            if(in_array("Will not listen",$mood)){
                                              $Willnotlisten ='<input type="checkbox" checked="checked"/>Will not listen';
                                              }else{
                                               $Willnotlisten ='<input type="checkbox" />Will not listen';
                                              }

                                              if(in_array("Angry",$mood)){
                                                $Angry ='<input type="checkbox" checked="checked"/>Angry';
                                                }else{
                                                 $Angry ='<input type="checkbox" />Angry';
                                                }

                                                if(in_array("Apathetic",$mood)){
                                                  $Apathetic ='<input type="checkbox" checked="checked"/>Apathetic';
                                                  }else{
                                                   $Apathetic ='<input type="checkbox" />Apathetic';
                                                  }

                                                  if(in_array("irritable",$mood)){
                                                    $irritable ='<input type="checkbox" checked="checked"/>irritable';
                                                    }else{
                                                     $irritable ='<input type="checkbox" />irritable';
                                                    }

                                                    if(in_array("threatening",$mood)){
                                                      $threatening ='<input type="checkbox" checked="checked"/>threatening';
                                                      }else{
                                                       $cooperative ='<input type="checkbox" />threatening';
                                                      }
                                                      
                                                    if(in_array("Sad",$mood)){
                                                      $Sad ='<input type="checkbox" checked="checked"/>Sad';
                                                      }else{
                                                       $Sad ='<input type="checkbox" />Sad';
                                                      }
                                                      
                                                    if(in_array("Withdrawn",$mood)){
                                                      $Withdrawn ='<input type="checkbox" checked="checked"/>Withdrawn';
                                                      }else{
                                                       $Withdrawn ='<input type="checkbox" />Withdrawn';
                                                      }
                                                      
                                                    if(in_array("Euthymic",$mood)){
                                                      $Euthymic ='<input type="checkbox" checked="checked"/>Euthymic';
                                                      }else{
                                                        $Euthymic ='<input type="checkbox" />Euthymic';
                                                      }

                                              
                                            $tima=$rows['tima'];
                                            
                                            $tim=explode (",",strval($tima));

                                            if(in_array("yes",$tim)){
                                              $timyes ='<input type="checkbox" checked="checked"/> Yes';
                                              }else{
                                               $timyes ='<input type="checkbox" />Yes';
                                              }
                                              if(in_array("no",$hou)){
                                                $timno ='<input type="checkbox" checked="checked"/>No';
                                                }else{
                                                 $timno ='<input type="checkbox" />No';
                                                }
                                                
                                            $outbursts=$rows['outbursts'];
                                            $outburst=explode (",",strval($outbursts));

                                            if(in_array("yes",$outburst)){
                                              $outburstyes ='<input type="checkbox" checked="checked"/> Yes';
                                              }else{
                                               $outburstyes ='<input type="checkbox" />Yes';
                                              }
                                              if(in_array("no",$outburst)){
                                                $outburstno ='<input type="checkbox" checked="checked"/>No';
                                                }else{
                                                 $outburstno ='<input type="checkbox" />No';
                                                }

                                            $outings=$rows['outings'];
                                            $outing=explode (",",strval($outings));
                                            if(in_array("yes",$outing)){
                                              $outingsyes ='<input type="checkbox" checked="checked"/> Yes';
                                              }else{
                                               $outingstyes ='<input type="checkbox" />Yes';
                                              }
                                              if(in_array("no",$outing)){
                                                $outingsno ='<input type="checkbox" checked="checked"/>No';
                                                }else{
                                                 $outingsno ='<input type="checkbox" />No';
                                                }

                                            $others=$rows['others'];
                                            $other=explode (",",strval($others));

                                            if(in_array("Good",$other)){
                                              $Good ='<input type="checkbox" checked="checked"/> Good';
                                              }else{
                                               $Good ='<input type="checkbox" />Good';
                                              }
                                              if(in_array("Poor",$other)){
                                                $Poor ='<input type="checkbox" checked="checked"/>Poor';
                                                }else{
                                                 $Poor ='<input type="checkbox" />Poor';
                                                }
                                                if(in_array("Isolated",$other)){
                                                  $Isolated ='<input type="checkbox" checked="checked"/> Isolated';
                                                  }else{
                                                   $Isolated ='<input type="checkbox" />Isolated';
                                                  }
                                            
                                            $staffs=$rows['staffs'];
                                            $staff=explode (",",strval($staffs));

                                            if(in_array("Good",$staff)){
                                              $Good ='<input type="checkbox" checked="checked"/> Good';
                                              }else{
                                               $Good ='<input type="checkbox" />Good';
                                              }
                                              if(in_array("Poor",$staff)){
                                                $Poor ='<input type="checkbox" checked="checked"/>Poor';
                                                }else{
                                                 $Poor ='<input type="checkbox" />Poor';
                                                }
                                                if(in_array("Avoided",$staff)){
                                                  $Avoided ='<input type="checkbox" checked="checked"/> Avoided';
                                                  }else{
                                                   $Avoided ='<input type="checkbox" />Avoided';
                                                  }
                                            
                                            $treats=$rows['treats'];
                                            $treat=explode (",",strval($treats));

                                            if(in_array("yes",$treat)){
                                              $yes ='<input type="checkbox" checked="checked"/> yes';
                                              }else{
                                               $yes ='<input type="checkbox" />yes';
                                              }
                                              if(in_array("no",$treat)){
                                                $no ='<input type="checkbox" checked="checked"/>no';
                                                }else{
                                                 $no ='<input type="checkbox" />no';
                                                }
                                                if(in_array("refused",$treat)){
                                                  $refused ='<input type="checkbox" checked="checked"/> refused';
                                                  }else{
                                                   $refused ='<input type="checkbox" />refused';
                                                  }
                                            $calld=$rows['calld'];
                                            $call=explode (",",strval($calld));

                                            if(in_array("N/A",$call)){
                                              $na ='<input type="checkbox" checked="checked"/> N/A';
                                              }else{
                                               $na ='<input type="checkbox" />N/A';
                                              }
                                              if(in_array("Family",$call)){
                                                $Family ='<input type="checkbox" checked="checked"/>Family';
                                                }else{
                                                 $Family ='<input type="checkbox" />Family';
                                                }
                                                if(in_array("CM/PO",$call)){
                                                  $CM ='<input type="checkbox" checked="checked"/> CM/PO';
                                                  }else{
                                                   $CM ='<input type="checkbox" />CM/PO';
                                                  }
                                                  if(in_array("Other Duration",$call)){
                                                    $OtherDuration ='<input type="checkbox" checked="checked"/> Other Duration';
                                                    }else{
                                                     $OtherDuration ='<input type="checkbox" />Other Duration';
                                                    }

                                            $visits=$rows['visits'];
                                            $visit=explode (",",strval($visits));

                                            if(in_array("N/A",$visit)){
                                              $naa ='<input type="checkbox" checked="checked"/> N/A';
                                              }else{
                                               $naa ='<input type="checkbox" />N/A';
                                              }
                                              if(in_array("Family",$visit)){
                                                $Familya ='<input type="checkbox" checked="checked"/>Family';
                                                }else{
                                                 $Familya ='<input type="checkbox" />Family';
                                                }
                                                if(in_array("CM/PO",$visit)){
                                                  $CMA ='<input type="checkbox" checked="checked"/> CM/PO';
                                                  }else{
                                                   $CMA ='<input type="checkbox" />CM/PO';
                                                  }
                                                  if(in_array("Other Duration",$visit)){
                                                    $OtherDurationa ='<input type="checkbox" checked="checked"/> Other Duration';
                                                    }else{
                                                     $OtherDurationa ='<input type="checkbox" />Other Duration';
                                                    }
                                            $paged=$rows['paged'];
                                            $page=explode (",",strval($paged));

                                            if(in_array("yes",$page)){
                                              $pageyes ='<input type="checkbox" checked="checked"/> Yes';
                                              }else{
                                               $pageyes ='<input type="checkbox" />Yes';
                                              }
                                              if(in_array("no",$hou)){
                                                $pageno ='<input type="checkbox" checked="checked"/>No';
                                                }else{
                                                 $pageno ='<input type="checkbox" />No';
                                                }


                                            $hour=$rows['hour'];
                                            $hou=explode (",",strval($hour));

                                            if(in_array("yes",$hou)){
                                              $houryes ='<input type="checkbox" checked="checked"/> Yes';
                                              }else{
                                               $houryes ='<input type="checkbox" />Yes';
                                              }
                                              if(in_array("no",$hou)){
                                                $hourno ='<input type="checkbox" checked="checked"/>No';
                                                }else{
                                                 $hourno ='<input type="checkbox" />No';
                                                }

                                            $checks=$rows['checks'];
                                            $chore=explode (",",strval($checks));

                                            if(in_array("yes",$chore)){
                                              $checksyes ='<input type="checkbox" checked="checked"/> Yes';
                                              }else{
                                               $checksyes ='<input type="checkbox" />Yes';
                                              }
                                              if(in_array("no",$chore)){
                                                $checksno ='<input type="checkbox" checked="checked"/>No';
                                                }else{
                                                 $checksno ='<input type="checkbox" />No';
                                                }

                                            $supervisorsign=$rows['supervisorsign'];
                                            $supervtitle=$rows['supervisorsign'];
                                            $superdate=$rows['supervisorsign'];
                                            $shiftsummary=$rows['shiftsummary'];
                                            $specify=$rows['specify'];
                                            $supervtitle=$rows['supervtitle'];
                                            $superdate=$rows['superdate'];
                                        }

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($stylesheet,1);
$html = '<page> 
<page_header backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm"> 
         
</page_header> 
<h1 style="text-decoration: underline;text-align:center">The Family House Behavioral Services , LLC </h1>,
<h2 style="text-align:center" >DAILY PROGRESS NOTES (AM/PM)</h2>
<br>
<br>
<div style="max-width:1200px;width:100%;display:inline-block ">
<div style="width:50%;float:left;"><p style="padding-left:4px;font-size:1.2em">CLIENT NAME '.$client.'  </p></div>
<div style="width:49%;float:left">
<p style="padding-left:4px;font-size:1.2em"> Date: '.$date1.'</p>
  </div>
  </div>

<p style="padding-left:4px;font-size:1.2em">SHIFT : '.$shiftam.'  '.$shiftpm.'   '.$shift12am.' </p>
<p style="padding-left:4px;font-size:1.2em">(specify time) '.$specify.'</p>
<p style="padding-left:4px;font-size:1.2em">
I ensured client’s chores and ADL’s were completed correctly:'.$adlyes.'  '.$adlno.'            <br> if not why? 
'.$adl[1].'
</p>
<hr>

<p style="padding-left:4px;font-size:1.2em">Scheduled appointment and/or group (Time/appt for/group name):'.$tim.','.$appointment.','.$groupname.'<br>
</p>
<p style="padding-left:4px;font-size:1.2em">Mode of transportation? (staff, cab, etc.)'.$transport.' <br></p>
<br>
<div style="max-width:1200px;width:100%;display:inline-block ">
<div style="width:50%;float:left;"><p style="padding-left:4px;font-size:1.2em">Stayed on task: '.$taskyes.'   '.$taskno.'   </p></div>
<div style="width:49%;float:left">
<p style="padding-left:4px;font-size:1.2em">                    Completed Chores:    '.$choreyes.'  '.$choreno.'  </p></div> 
</div>  
<br>
<br>
Self-Administered Medication(s)?:  '.$selfs.'                 No, if not why? <br>
'.$selfs.'
<br>
<br>
Med education provided?:   '.$educations.'                      No, if not why? <br>
'.$educations.'
<br>
<br>
Completed Therapy Group? :    '.$therapyst.'                     Group? <br>
'.$therapyst.'
<br>
<br>
Comments (Prompting?) (Number of prompts?)'.$prompting.','.$numbers.'
<br>
<br>
MEALS: '.$meal.'                            Soiled the bed:  '.$bed.'
<br>
<br>
Personal Care: Prompted? :  '.$cares.'                          <br>
<br>
Comments: '.$cares.'
<br>
<br>
Behavior: '.$cooperative.' '.$calm.' '.$agitated.' '.$irritable.' '.$threatening.' '.$combative.' '.$other.'
<br>
<br>
Mood: '.$Willnotlisten.' '.$Angry.' '.$Apathetic.' '.$irritable.' '.$threatening.' '.$Sad.' '.$Withdrawn.' '.$Euthymic.'

<br>
<br>
Reflection Time:  '.$timyes.' '.$timno.'              Behavioral Outburst:  '.$outburstyes.' '.$outburstno.'     
<br>
<br>
Outing:  '.$outingsyes.' '.$outingsno.'
<br> 
<br>
 If yes please indicate where/howlong <br>
 Comments: '.$outing[2].'
 <br>
 <br>
 Interaction with other residents: '.$Good.' '.$Poor.' '.$Isolated.'         
 <br>
 <br>
 Treatment Goals: Processed w/Client? :  '.$Good.' '.$Poor.''.$Avoided.'      
 <br>
 <br>
 Treatment goals addressed this shift: '.$yes.' '.$no.''.$refused.'
 <br>
 <br>
  Phone calls:    '.$na.' '.$Family.' '.$CM.' '.$OtherDuration.'    
 <br>
 <br>
  Visits:  '.$naa.'  '.$Familya.'  '.$CMA.'  '.$OtherDurationa.'
 <br>
 <br>
  Additional Documentation Page:  '.$pageyes.'  '.$pageno.'   
 <br>
 <br>
  Overnight hourly respirations:     '.$houryes.'  '.$hourno.'
 <br>
 <br>
  15 min checks for safety needed:  '.$checksyes.'  '.$checksno.'
 <br><br>
  Shift summary:  <br><br>  '.$shiftsummary.'
 <br>
 
<br>
<table border="0" style="width:100%;border-collapse: collapse;">
  <tr>
    <td style="width:20%"> <img src="../resident/signatures/'.$supervisorsign.'" width="200"/><br><b>Staff Signature</b></td>
    <td style="width:20%">'.$supervtitle.'<br><b>Title</b><br></td>
    <td style="width:20%">'.$superdate.'<br><b>Date</b><br></td>
  </tr>
</table>

<page_footer> 
</page_footer> 
</page> '  ;

$mpdf->WriteHTML($html,2);
$mpdf->Output();

?>