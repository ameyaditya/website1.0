<!DOCTYPE html>
<html>
<head>
	<title>Amity Ramapriya Apartments</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=deivce-width, initial-scale=1">

	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <script>
  	$(document).ready(function(){
  		$('#loadAssociation').click(function(){
  			$('#Association-container').toggle();
  		});
  	});
  </script>


</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Amity Ramapriya Apartments</a>	
		</div>	
			<div class="collapse navbar-collapse" id="MyNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#contact">Contact</a></li>			
				</ul>				
			</div>
	</div>	
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>	
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="img/mountains.png">			
			<div class="carousel-caption">
				<h1>Amity Ramapriya Apartments</h1>
				<br>
				<button type="button" class="btn btn-default" onclick="location.href='login.php'">
					Log In					
				</button>
			</div>
		</div> <!--end active-->	
		<div class="item">
			<img src="img/snow.png">
		</div>
		<div class="item">
			<img src="img/red.png">
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
</div> <!-- end slider-->

<div class="container text-center Association" id="about">
	<h1>Association Members</h1>	
	<div class="row">
		<div class="col-sm-4"></div>		
		<div class="col-sm-2">
			<img src="img/user.svg" id="icon">
			<h4>Honorable President</h4>
			<h3>Mr. ABCD</h3>
		</div>
		<div class="col-sm-2">
			<img src="img/user.svg" id="icon">
			<h4>President</h4>
			<h3>Mr. ABCD</h3>
		</div>
		<div class="col-sm-4" id="icon"></div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			<img src="img/user.svg" id="icon">
			<h4>Vice President</h4>
			<h3>Mr.ABCD</h3>
		</div>		
		<div class="col-sm-2">
			<img src="img/user.svg" id="icon">
			<h4>Vice President</h4>
			<h3>Mr.ABCD</h3>
		</div>
		<div class="col-sm-2">
			<img src="img/user.svg" id="icon">
			<h4>Vice President</h4>
			<h3>Mr.ABCD</h3>
		</div>
		<div class="col-sm-2">
			<img src="img/user.svg" id="icon">
			<h4>Secretary</h4>
			<h3>Mr.ABCD</h3>
		</div>
		<div class="col-sm-2">
			<img src="img/user.svg" id="icon">
			<h4>Secretary</h4>
			<h3>Mr.ABCD</h3>
		</div>
		<div class="col-sm-2">
			<img src="img/user.svg" id="icon">
			<h4>Joint Secretary</h4>
			<h3>Mr.ABCD</h3>
		</div>
	</div>
		<div class="row">
			<div class="col-sm-2">
				<img src="img/user.svg" id="icon">
				<h4>Joint Secretary</h4>
				<h3>Mr.ABCD</h3>
			</div>
			<div class="col-sm-2">
				<img src="img/user.svg" id="icon">
				<h4>Joint Secretary</h4>
				<h3>Mr.ABCD</h3>
			</div>
			<div class="col-sm-2">
				<img src="img/user.svg" id="icon">
				<h4>Treasurer</h4>
				<h3>Mr.ABCD</h3>
			</div>
			<div class="col-sm-2">
				<img src="img/user.svg" id="icon">
				<h4>Lady Secretary</h4>
				<h3>Mr.ABCD</h3>
			</div>
			<div class="col-sm-2">
				<img src="img/user.svg" id="icon">
				<h4>Lady Secretary</h4>
				<h3>Mr.ABCD</h3>
			</div>
			<div class="col-sm-2">
				<img src="img/user.svg" id="icon">
				<h4>Lady Secretary</h4>
				<h3>Mr.ABCD</h3>
			</div>
		</div>
</div>

<div class="container" id="events">
	<h1>Events</h1>
	<div class="row">
		<div class="col-lg-12 boxes">
			<h2>New Year Party</h2>			
		</div>	
		<div class="col-lg-12 boxes">
			<h2>More Events to Come</h2>			
		</div>		
	</div>
</div>

<footer class="container-fluid text-center">
	<div class="row" id="contact">
		<div class="col-xs-4 col-xs-offset-4">
			<h3>Contact Us</h3>
			<h4>9912345678</h4>
		</div>
	</div>
</footer>
</body>
</html>