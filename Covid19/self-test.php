<?php
$title="Self-Test";
function Options(){
        $option="<option value=''>-</option>
                 <option value='no'>No</option>
                 <option value='rare'>Rare</option>
                 <option value='occasional'>Occasionally</option>
                 <option value='frequent'>Frequently</option>";
        return $option;
        }
$content= "<form action='' method='POST'>
                     <fieldset>
                     <legend>Self-Test</legend>
                       <label for='name'>Name: </label>
                       <input type ='text' class='InputField1' name='txtName' required/><br/>
                       
                      <label for='type'>Age: </label>
                      <input type ='number' class='InputField1' name='txtAge' required/><br/><br/>
                      
                        <label for='fever'>Do you have Fever? </label>
                         <select class='InputField' name='fever' required/>".
                         Options().
                        "</select><br/>
                            
                        <label for='fever'>Suffering from Triedness? </label>
                         <select class='InputField' name='tried'/>".
                         Options().
                        "</select><br/>
                            
                        <label for='fever'>Sneezing? </label>
                         <select class='InputField' name='Snezzing'/>".
                         Options().
                        "</select><br/>
                            
                        <label for='fever'>Have Body Aches/ Pain? </label>
                         <select class='InputField' name='pain'/>".
                         Options().
                        "</select><br/>
                            
                        <label for='fever'>Do you have Stuffy or Runny Nose? </label>
                         <select class='InputField' name='nose'/>".
                         Options().
                        "</select><br/>
                            
                        <label for='fever'>Suffering from Cough? </label>
                         <select class='InputField' name='cough'/>".
                         Options().
                        "</select><br/>
                            
                        <label for='fever'>Shortness of Breath? </label>
                         <select class='InputField' name='breath' required/>".
                         Options().
                        "</select><br/>
                            
                        <label for='fever'>History of diabetes/Heart Problem/Lung Problem?</label>
                         <select class='InputField' name='history' required/>
                         <option value=''>-</option>
                         <option value='yes'>YES</option>
                         <option value='no'>NO</option>
                         </select><br/>
                         
                         <label for='fever'>Have you traveled anywhere internationally in last 14 Days?</label>
                         <select class='InputField' name='tavel' required/>
                         <option value=''>-</option>
                         <option value='yes'>YES</option>
                         <option value='no'>NO</option>
                         </select><br/>
                         <input type='submit' value = 'Submit' name='Submit' class='btn-primary' /></fieldset></form>";
        if(isset($_POST['Submit']))
            {
                $msg="";
                $name = $_POST['txtName'];
                $age = $_POST['txtAge'];
                $fever = $_POST['fever'];
                $tried = $_POST['tried'];
                $cough = $_POST['cough'];
                $breath = $_POST['breath'];
                $history = $_POST['history'];
                $tavel = $_POST['tavel'];
                if(($tavel=="yes") || ($fever=="frequent" && $breath==('occasional' || 'frequent') && $cough==('occasional' || 'frequent')))
                {
                    $msg="Please Visit to a Doctor or Call on +91-11-23978046";
                }
                elseif($fever=="frequent" && $breath!=('occasional' || 'frequent') && $cough==('occasional' || 'frequent'))
                {
                    $msg="You just have Flu, Dont Worry.";
                }
                elseif($history=="YES"  || $age>=60)
                {
                    $msg="Be Careful, You are vulnerable";
                }
                else 
                {
                    $msg="Relax You are alright.";
                }
                echo "<script>alert('".$name."   ".$msg."')</script>";
            }
$sidebar='<div class="sbheading">
<h2>For Better Analysis</h2>
<h4>Please Install Aarogya Setu App</h4>
<a href="https://www.mygov.in/aarogya-setu-app/ " target="_blank">
<img src="Images/ar_qr.jpg" width="231" height="231" alt="AAROGYA SETU" />
</a>
<h6>By Government of India</h6></div>';
$footer="<p>Stay Home, Stay Safe</p>";
include 'template.php';
?>





