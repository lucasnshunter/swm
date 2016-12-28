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
<body>



<!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
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
                <h1>Pintura residencial</h1>
        <p align="justify" style="margin:20px;">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a justo interdum purus sodales semper semper nec libero. Proin vestibulum justo placerat, efficitur tortor vel, laoreet diam. Suspendisse orci ligula, auctor eget neque sed, ornare volutpat ante. Nam molestie eget felis quis condimentum. Sed eu leo sapien. Sed vitae scelerisque mauris, vel iaculis tortor. Etiam vel velit quis nibh convallis luctus non a orci. Aliquam diam nunc, consequat sed gravida id, pellentesque nec dui. Nullam et leo a ante blandit rhoncus. Proin vestibulum tellus at purus congue, sodales egestas mi gravida.
      </p>
        <p align="justify" style="margin:20px;">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a justo interdum purus sodales semper semper nec libero. Proin vestibulum justo placerat, efficitur tortor vel, laoreet diam. Suspendisse orci ligula, auctor eget neque sed, ornare volutpat ante. Nam molestie eget felis quis condimentum. Sed eu leo sapien. Sed vitae scelerisque mauris, vel iaculis tortor. Etiam vel velit quis nibh convallis luctus non a orci. Aliquam diam nunc, consequat sed gravida id, pellentesque nec dui. Nullam et leo a ante blandit rhoncus. Proin vestibulum tellus at purus congue, sodales egestas mi gravida.
      </p>
        <p align="justify" style="margin:20px;">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a justo interdum purus sodales semper semper nec libero. Proin vestibulum justo placerat, efficitur tortor vel, laoreet diam. Suspendisse orci ligula, auctor eget neque sed, ornare volutpat ante. Nam molestie eget felis quis condimentum. Sed eu leo sapien. Sed vitae scelerisque mauris, vel iaculis tortor. Etiam vel velit quis nibh convallis luctus non a orci. Aliquam diam nunc, consequat sed gravida id, pellentesque nec dui. Nullam et leo a ante blandit rhoncus. Proin vestibulum tellus at purus congue, sodales egestas mi gravida.
      </p>
            </div>
        </div>

        <hr>

    </div>


</div>



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
