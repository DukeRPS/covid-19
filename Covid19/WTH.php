<?php
require 'controller/controller.php';
$controller = new Controller;
$title="Help";
$n=$controller->RevTemp("name");
$m=$controller->RevTemp("mobile");
$content= '<form action="" method="POST">
                <label class="InputField">Name:     '.$n.'</label><br><br>
                <label class="InputField">Mobile Number:    '.$m.'</label><br><br>
                <label class="InputField">The Service Type:-  Want To Help</label>
                <br><br><br>
                <div class="WTH">
                    <form action="" method="POST">
                        <label class="InputField">Do you want to Donate:-<br></label>
                        <label for="money">Money: </label>
                        <input type="radio" id="Services" name="Services" value="money" class="InputField" checked="checked"/>
                        <label for="food">Food: </label>
                        <input type="radio" id="Services" name="Services" value="food" class="InputField"/><br>
                        <input type="submit" name="next1" value="Next" class="btn-primary"/>
                    </form>
                </div>';
if(isset($_POST['next1'])){
    if($_POST['Services']=="money"){
        header("Location: money.php");
    }
    elseif($_POST['Services']=="food"){
        header("Location: food.php");
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
    