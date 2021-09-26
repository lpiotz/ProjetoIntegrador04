<?php

$text = "<span class='fail'>Erro! Tente novamente.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to = "loh.piotz@gmail.com";
	$subject = "Aracruz ES - Formulário de contato";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Aracruz ES - Site";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span class='success'>Sua mensagem foi enviada com sucesso!</span>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Aracruz">
    <meta name="author" content="Lohaina Piotz">
	
    <title>Aracruz - ES</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="single-page">
<div class="wrap-body">
		<!-- Intro -->
		<div id="intro">
			<span class="line-1">Cidade</span>
			<span class="line-2">Aracruz</span>
			<span class="line-3">Paraíso no Espírito Santo</span>
			<span class="line-4"></span>
		</div>

		<header id="page-header">
			<!--Navigation-->
			<nav id="menu" class="navbar">
				<div class="container">
					<div class="row">
						<div class="navbar-header"><span id="heading" class="visible-xs">Menu</span>
							<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="index.html">Home</a></li>
								<li><a href="single.html">Sobre</a></li>
								<li><a href="gallery.html">Galeria</a></li>
								<li class="active"><a href="contact.html">Contato</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</header>
		
		<!-- /////////////////////////////////////////Content -->
		<div id="page-content" class="container">
			<div class="row">
				<!-----------------Content-------------------->
				<section class="box-content box-2 box-style-0">
					<div class="flex-box no-gutter">
						<div class="col-sm-12">
							<div class="box-text">
								<div class="box-text-inner pd-exlarge-lg pd-small-xs">
									<div class="heading">
										<h2>Contato</h2>
									</div>
									<form class="clearfix" role="form" id="contactForm" method="post" action="contact.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Seu Nome" required="required" />
												</div>
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required="required" />
												</div>
												<div class="form-group">
													<input type="number" class="form-control" name="phone" id="phone" placeholder="Seu Telefone" required="required" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Mensagem"></textarea>
												</div>	
											</div>
										</div>
										<button type="submit" id="form-submit" class="btn btn-skin pull-right">Enviar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<footer id="page-footer" class="footer-contact">			
			<div class="bottom-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<p>Copyright - Designed by <a href="#">Lohaina Piotz</a></p>
						</div>
						<div class="col-md-6">
							<ul class="list-inline social-link">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="list-inline quicklinks">
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- Footer -->

	
	</div><!-- .wrap-body -->
	
	
	<!-- jQuery and Plugin-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	<!-- Logo -->
	<script src="js/arctext.min.js"></script>
	<script>
		$(document).ready(function() {
		  $(".line-2").arctext({radius: 400});
		});
	</script>
	
</body>
</html>