<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Help";?></title>
        
        <link rel="stylesheet" type="text/css" href="Style/StyleSheet.css"/>
        
        </head>
        <body onload="myLoader()">
        <div id="loader"></div>
        </div>
        
        <div id="wrapper">
            <div id="banner">
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="self-test.php">Self-Test</a></li>
                    <li><a href="help.php">Help</a></li>
                    <!--<li><a href=#>Management</a></li>-->
                    <li><a href="about.php">About</a></li>
                    
                </ul>
            </nav>
            
            
            <div id="sidebar">
                <div class="sbheading">
                        <h2>State Wise HelpLine No.</h2>
                        <a href="https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf " target="_blank">
                        <img src="Images/hel.png" width="210" height="215" alt="hel"/></a>
                        <br><h3>Toll free: 1075</h3><h6>By Government of India</h6></div>
            </div>
            
            <div id="content_area">
                <h1 class="InputField1">Food Donation</h1>
                <label for="search" class="InputField2">District Wise</label>
                <input type="radio" id="search" name="search" value="district" onclick="hideIt1()"/>
                
                <label for="search" class="InputField2">City Wise</label>
                <input type="radio" id="search" name="search" value="city" onclick="hideIt2()"/>
                
                <label for="search" class="InputField2">PIN Wise</label>
                <input type="radio" id="search" name="search" value="PIN" onclick="hideIt3()"/>
                
                <br><br>
                <input type="number" name="district" class="hide1" placeholder="district">
                <br><br>
                <input type="number" name="city" class="hide2" placeholder="city">
                <br><br>
                <input type="number" name="PIN" class="hide3" placeholder="Postal Index No">
                <br>
                <input type="submit" value="submit" name="next2" class="btn-primary1"/>
                <table class ="sbtable1"
                <tr>
                <td></td>
                <td><b>Token No.</b></td>
                <td><b>Name</b></td>
                <td><b>Mobile No.</b></td>
                <td><b>Adult</b></td>
                <td><b>Child</b></td>
                <td><b>Address</b></td>
                <td><b>Status</b></td>
                </tr><?php 
                require 'controller/controller.php';
                $controller = new Controller;
                echo $controller->OverViewDate($controller->ConnectionSql($controller->QuaryTable()));
                ?></table><?php
                
                ?>
            </div>
            
            <footer id="footer"><p>Stay Home, Stay Safe</p>
           </footer>
        </div>

        <script>
            var preloader = document.getElementById('loader');

            function myLoader(){
            preloader.style.display = 'none';     
            };
            function hideIt1() {
            document.querySelector(".hide1").style.display = "flex";
            document.querySelector(".hide2").style.display = "none";
            document.querySelector(".hide3").style.display = "none";
            
        }
        function hideIt2() {
            document.querySelector(".hide1").style.display = "none";
            document.querySelector(".hide2").style.display = "flex";
            document.querySelector(".hide3").style.display = "none";
            
        }
        function hideIt3() {
            document.querySelector(".hide1").style.display = "none";
            document.querySelector(".hide2").style.display = "none";
            document.querySelector(".hide3").style.display = "flex";
            
        }
            
            </script>
    </body>
</html>
<?php
$title="Help";
/*

require 'controller/controller.php';
$controller = new Controller;
$content= '<h1 class="InputField1">Food Donation</h1>
                <label for="search" class="InputField2">District Wise</label>
                <input type="radio" id="search" name="search" value="district" onclick="hideIt1()"/>
                
                <label for="search" class="InputField2">City Wise</label>
                <input type="radio" id="search" name="search" value="city" onclick="hideIt2()"/>
                
                <label for="search" class="InputField2">PIN Wise</label>
                <input type="radio" id="search" name="search" value="PIN" onclick="hideIt3()"/>
                
                <br><br>
                <input type="number" name="district" class="hide1" placeholder="district">
                <br><br>
                <input type="number" name="city" class="hide2" placeholder="city">
                <br><br>
                <input type="number" name="PIN" class="hide3" placeholder="Postal Index No">
                <br>
                <input type="submit" value="submit" name="next2" class="btn-primary1" onclick="hideIt4()"/>
                ';
echo '<script>function hideIt1() {
            document.querySelector(".hide1").style.display = "flex";
            document.querySelector(".hide2").style.display = "none";
            document.querySelector(".hide3").style.display = "none";
            
        }
        function hideIt2() {
            document.querySelector(".hide1").style.display = "none";
            document.querySelector(".hide2").style.display = "flex";
            document.querySelector(".hide3").style.display = "none";
            
        }
        function hideIt3() {
            document.querySelector(".hide1").style.display = "none";
            document.querySelector(".hide2").style.display = "none";
            document.querySelector(".hide3").style.display = "flex";
        }
        
        </script>';

$sidebar='<div class="sbheading">
<h2>State Wise HelpLine No.</h2>
<a href="https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf " target="_blank">
<img src="Images/hel.png" width="210" height="215" alt="hel"/></a>
<br><h3>Toll free: 1075</h3><h6>By Government of India</h6></div>';
$footer="<p>Stay Home, Stay Safe</p>";
include 'template.php';
?>*/
?>

            
    

