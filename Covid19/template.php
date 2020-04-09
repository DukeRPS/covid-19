<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        
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
                    <li><a href=#>About</a></li>
                    
                </ul>
            </nav>
            
            
            <div id="sidebar">
                <?php echo $sidebar ?>
            </div>
            
            <div id="content_area">
                <?php echo $content;?>
            </div>
            
            <footer id="footer"><?php echo $footer ?>
           </footer>
        </div>

        <script>
            var preloader = document.getElementById('loader');

            function myLoader(){
            preloader.style.display = 'none';     
            }
        </script>
    </body>
</html>
<?php

