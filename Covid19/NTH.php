<?php
require 'controller/controller.php';
$controller = new Controller;
$title="Help";
$n=$controller->RevTemp("name");
$m=$controller->RevTemp("mobile");
$content= '<form action="" method="POST">
                <h1>Food Donation</h1>
                <label class="InputField">Name:     '.$n.'</label><br><br>
                <label class="InputField">Mobile Number:    '.$m.'</label><br><br>
                <div class="WTH">
                    <form action="" method="POST">
                        <label class="InputField">Number of Family Members:-<br></label>
                        <select name="Adult" required>
                            <option value="">Adult</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select>
                        <select name="child" required>
                            <option value="">Child</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select><br><br>
                <fieldset>
                <h2>Address:</h2>
                <label class="control-label">House No.</label>
                <input id="Hno" name="Hno" type="text" class="input-xlarge"><br><br>
                    
                <label class="control-label">Address Line 1</label>
                <input id="line1" name="line1" type="text" placeholder="address line 1" class="input-xlarge" required>
                        <p class="help-block">Street address, P.O. box, company name, c/o</p>
                   
                <label class="control-label">Address Line 2</label>
                <input id="line2" name="line2" type="text" placeholder="address line 2" class="input-xlarge"><br><br>
                
                <label class="control-label">City / Town / Village</label>
                <input id="city" name="city" type="text" placeholder="City / Town / Village" class="input-xlarge" required><br><br>
                
                <label class="control-label">District </label>
                <input id="district" name="district" type="text" placeholder="district" class="input-xlarge" required><br><br>
                
                <label class="control-label">State</label>
                <select id="state" name="state" class="input-xlarge" required>
                            <option value="" selected="selected">(please select a State)</option>
                            <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadra & Nagar Haveli">Dadra & Nagar Haveli</option>
                            <option value="Daman & Diu">Daman & Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="West Bengal">West Bengal</option>
                        </select><br><br>
                
                <label class="control-label">Postal Code</label>
                <input id="postal-code" name="postal-code" type="number" placeholder="postal code"
                        class="input-xlarge" required><br><br>
                </fieldset>
                </div>        
                <input type="submit" name="next1" value="Submit" class="btn-primary"/>
                </form>';
if(isset($_POST['next1'])){
    $name=$n;
    $mobile=$m;
    $adult=$_POST['Adult'];
    $child=$_POST['child'];
    $address="House no. ".$_POST['Hno'].", ".$_POST['line1'].", ".$_POST['line2'].", "
            . "City:".$_POST['city'].", District:".$_POST['district'].", State:".$_POST['state'].", "
            . "PIN:".$_POST['postal-code']."";
    $pin=$_POST['postal-code'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $controller->InsertNTH($name, $mobile, $adult, $child, $address, $city, $district, $pin);
}

$sidebar='<div class="sbheading">
<h2>State Wise HelpLine No.</h2>
<a href="https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf " target="_blank">
<img src="Images/hel.png" width="210" height="215" alt="hel"/></a>
<br><h3>Toll free: 1075</h3><h6>By Government of India</h6></div>';
$footer="<p>Stay Home, Stay Safe</p>";
include 'template.php';

          