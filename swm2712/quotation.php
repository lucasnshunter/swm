<?php   $active = 'quote';?>
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>SWM - Quotation</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/master.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
 <br/><br/>
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
		    <label for="email">Phone</label>
		    <input type="email" class="form-control" id="phone" name="phone" placeholder="Phone">
		  </div>
		   <div class="form-group">
		    <label for="subject">Address </label>
		    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
		  </div>
		   <div class="form-group">
		    <label for="subject">Subject </label>
		    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
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

</body>
</html>

<?php include 'footer.php'; ?>
