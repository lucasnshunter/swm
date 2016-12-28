<!DOCTYPE html>
<html>
<head>


<?php

$home="background-color:#ffffff;";
$about="background-color:#ffffff;";
$services="background-color:#ffffff;";
$blog="background-color:#ffffff;";
$quote="background-color:#ffffff;";


switch ($active) {
case 'home':
$title = "SWM - Home";
$home="background-color:#f1af08;";
break;
case 'about':
$title = "SWM - About";
$about="background-color:#f1af08;";
break;
case 'services':
$title = "SWM - Services";
$services="background-color:#f1af08;";
break;
case 'blog':
$title = "SWM - Blog";
$blog="background-color:#f1af08;";
break;
case 'quote':
$title = "SWM - Quotation";
$quote="background-color:#f1af08;";
break;


}


?>
	<meta charset=utf-8 />
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title?></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>


 
<nav class="navbar navbar-fixed-top" style="padding=0px;">

   


<div class="container-fluid topbar">
	<div class="row">
		<div class="container ">

<div id="menut" name="menut" class="col-md-4 col-lg-4  hidden-md hidden-lg" style="margin-left:-15px;">
<div id="menutoggle" name="menutoggle"><i class="fa fa-bars fa-2x"></i></div>
				<div class="pull-right" style="float:right; margin-top:-20px;">
					<a href="http://www.facebook.com/swmenterprise" class="socialink"><i class="fa fa-facebook-f fa-lg"></i></a>
					<a href="http://www.instagram.com/swmenterprise/" class="socialink"><i class="fa fa-instagram fa-lg"></i></a>
					<a href="http://plus.google.com/114196839944517408867" class="socialink"><i class="fa fa-google-plus fa-lg"></i></a>
					<a href="http://www.youtube.com/channel/UCd3MrAn6byULRW1WeGmNXKQ" class="socialink"><i class="fa fa-youtube-play fa-lg"></i></a>
				</div>  
</div>

<div  id="menut2" name="menut2"  class="col-md-4 col-lg-4  hidden-md hidden-lg" style="margin:-15px;padding:15px;display:none;background-color:white;">
<div id="menutoggle2" name="menutoggle2" ><i class="fa fa-bars fa-2x"></i></div>

				<div class="pull-right" style="float:right; margin-top:-20px;margin-right:15px;">
					<a href="http://www.facebook.com/swmenterprise" class="socialink"><i class="fa fa-facebook-f fa-lg"></i></a>
					<a href="http://www.instagram.com/swmenterprise/" class="socialink"><i class="fa fa-instagram fa-lg"></i></a>
					<a href="http://plus.google.com/114196839944517408867" class="socialink"><i class="fa fa-google-plus fa-lg"></i></a>
					<a href="http://www.youtube.com/channel/UCd3MrAn6byULRW1WeGmNXKQ" class="socialink"><i class="fa fa-youtube-play fa-lg"></i></a>
				</div>  
				
</div>
		
		
		
		
			<div class="col-md-4 col-lg-4  hidden-sm hidden-xs">
			</div>
			<div class="col-md-4 col-md-offset-4 hidden-sm hidden-xs">
				<div class="pull-right">
					<a href="http://www.facebook.com/swmenterprise" class="socialink"><i class="fa fa-facebook-f fa-lg"></i></a>
					<a href="http://www.instagram.com/swmenterprise/" class="socialink"><i class="fa fa-instagram fa-lg"></i></a>
					<a href="http://plus.google.com/114196839944517408867" class="socialink"><i class="fa fa-google-plus fa-lg"></i></a>
					<a href="http://www.youtube.com/channel/UCd3MrAn6byULRW1WeGmNXKQ" class="socialink"><i class="fa fa-youtube-play fa-lg"></i></a>
				</div>  
			</div>
		</div>
	</div>
</div>

<div id ="secmenu" name="secmenu" class="container-fluid topbar-infinity hidden-md hidden-lg" style="margin:0px;margin-top:-5px;display:none">
	<div class="row">
		<div  class="container-fluid blackier black2" style="background-color:#ffffff;margin:0px;">
		<a href="index.php" style="<?php echo $home;?>" >Home</a> 
	 
		<a href="about.php" style="<?php echo $about;?>border-top: 1px solid  #dddddd;"> About us</a>
		 
		<a href="services.php" style="<?php echo $services;?>border-top: 1px solid  #dddddd;">Services</a>  
		 
		<a href="blog.php" style="<?php echo $blog;?>border-top: 1px solid  #dddddd;">Blog</a>
	 
		<a href="quotation.php" style="<?php echo $quote;?>border-top: 1px solid  #dddddd;border-bottom: 1px solid  #dddddd;">Quotation</a>
		</div>
	</div>
</div>





 
<div class="container-fluid toparea">
	<div class="container">
		<div class="row">
			
			<div class="col-md-3 middler">
				<img src="img/logo.png"/>
			</div>

			<div class="a col-md-8 linkage  hidden-sm hidden-xs"   >
					<a href="index.php" class="link <?php if ($active=='home') echo 'hovery'; ?>">
					<br/><br/><br/><span class="<?php if ($active=='home') echo 'hovery'; ?>">Home</span></a>

					<a href="about.php" class="link <?php if ($active=='about') echo 'hovery'; ?>">
					<br/><br/><br/><span class="<?php if ($active=='about') echo 'hovery'; ?>">About us</span></a>

					<a href="services.php" class="link <?php if ($active=='services') echo 'hovery'; ?>">
					<br/><br/><br/><span class="<?php if ($active=='services') echo 'hovery'; ?>">Services </span></a>

					<a href="blog.php" class="link <?php if ($active=='blog') echo 'hovery'; ?>">
					<br/><br/><br/><span class="<?php if ($active=='blog') echo 'hovery'; ?>">Blog</span></a>

					<a href="quotation.php" class="link <?php if ($active=='quote') echo 'hovery'; ?>">
					<br/><br/><br/><span  class="<?php if ($active=='quote') echo 'hovery'; ?>" >Quotation</span></a>

			

			</div>




		</div>
	</div>
</div>

<div class="container-fluid topdivider" >

</div>


</nav>


<div style="margin-top:180px;">
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>




<script>
$( document ).ready(function() {
 
$( "#menutoggle" ).click(function() {
 
//alert('toggled');
$( "#secmenu" ).slideToggle("slow");

$( "#menut" ).toggle();
$( "#menut2" ).toggle();

});



$( "#menutoggle2" ).click(function() {
 
//alert('toggled');
$( "#secmenu" ).slideToggle("slow");

$( "#menut" ).toggle();
$( "#menut2" ).toggle();

});



});
</script>


</body>
</html>
