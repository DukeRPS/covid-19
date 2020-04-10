<?php
require 'controller/controller.php';
$controller = new Controller;
$title="Help";
$content= '
                <form action="" method="POST">
                <label class="InputField">Name:   </label>
                <input type="text" name="name" placeholder="Enter Your Name" class="InputField2" required/><br>
    
                <label class="InputField">Mobile Number:   </label>
                <input type="number" name="mobile" placeholder="Enter Your Mobile No." class="InputField2" required/><br>
                <label class="InputField">Please Select The Service Type:-<br></label>
                <label for="WTH">Want To Help: </label>
                <input type="radio" id="WTH" name="Services" value="WTH" class="InputField" checked="checked"/>
                <label for="NTH">Help is Needed: </label>
                <input type="radio" id="NTH" name="Services" value="NTH" class="InputField"/><br>
                <input type="submit" id ="next" name="next" value="Next" class="btn-primary"/></form>
                
';

if(isset($_POST['next'])){
    if((strlen($_POST['mobile']))==10){
        $mobile=$_POST['mobile'];
        $name=$_POST['name'];
        if($_POST['Services']=="WTH"){
            $controller->InsertTemp($name, $mobile);
            header("Location: WTH.php");
        }
        if($_POST['Services']=="NTH"){
            $controller->InsertTemp($name, $mobile);
            header("Location: NTH.php");
        }
    }
    else{
        echo "<script>alert('Enter a valid M.no.')</script>";
    }
}
$sidebar='<div class="sbheading">
<h2>State Wise HelpLine No.</h2>
<a href="https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf " target="_blank">
<img src="Images/hel.png" width="210" height="215" alt="hel"/></a>
<br><h3>Toll free: 1075</h3><h6>By Government of India</h6></div>';
$footer="<p>Stay Home, Stay Safe</p>";
include 'template.php';
?>



