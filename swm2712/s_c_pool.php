<?php   $active = 'services';?>
<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>SWM - services</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/master.css" />
        <link href="css/half-slider.css" rel="stylesheet">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body style="margin-top:180px;">



<!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>

        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('./img/cleaning/pool/slider/slider1.jpg');"></div>

            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('./img/cleaning/pool/slider/slider2.jpg');"></div>

            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    <div class="container-fluid divisionwhite">
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Pool Maintenance and Cleaning</h1>
        <p align="justify" style="margin:20px;">
         Pool looking more green than clean? Cleaning and
maintenance are crucial to keeping the water safe for you and your family, and to make sure
you actually get to use it! Without regular sanitisation, all pools develop bacteria – which can
pose serious health risks. As well as sanitisation, you also need to chemically balance your pool
water. But dont worry, get the pros involved!</p>
            </div>
        </div>

        <hr>

    </div>


</div>


<br>
<br>
<!--cotações-->
<div class="container divisonwhiter">
<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
		 <div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Quotation</h3>
		  </div>
		  <div class="panel-body">
		  <form method="POST" enctype="multipart/form-data" action="sendqt.php">
		  <div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
		  </div>
		   <div class="form-group">
		    <label for="subject">Subject </label>
		    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
		  </div>
		  <div class="form-group">
		    <label for="email">Phone</label>
		    <input type="email" class="form-control" id="phone" name="phone" placeholder="Phone">
		  </div>
		   <div class="form-group">
		    <label for="subject">Address </label>
		    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
		  </div>
		   <div class="form-group">
		    <label for="contents">Message</label>
		    <textarea class="form-control" rows="3" name="contents" id="contents"></textarea>
		  </div>
		 
		 
		  <div class="form-group">
		    <label for="file1">File input</label>
		    <input type="file" id="file1" name="file1">
		  </div>
		 
		  <button type="submit" class="btn btn-primary" style="border-color: #f1af08;background-color: #f1af08;">Submit</button>
		</form>
		  </div>

		<div class="col-lg-2"></div>
</div>

</div>	 
</div>
<br>
<br>
<br>
<!--fim cotações-->


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> 

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
</html>

<?php include 'footer.php'; ?>
