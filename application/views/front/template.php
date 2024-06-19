<!DOCTYPE html>
<html lang="en">



<?php include ('head.php');?>


<body>

<div id="wrapper">
       <div id="topbar" class="topbar-noborder topbar-light">
            <div class="container">                
                <div class="topbar-left">
                    <span class="topbar-widget"><a href="#">Request a free consultation</a></span>
                    <span class="topbar-widget"><a href="#">Privacy policy</a></span>
                    <span class="topbar-widget"><a href="#">FAQ</a></span>
                </div>
                <div class="topbar-right sm-hide">
                    <span class="topbar-widget tb-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
 <?php include('header.php');?>


 <?php include ($page_name.'.php');?>



   <?php include('footer.php');?>
</div>



   <?php include("script.php");?>
</body>




</html>