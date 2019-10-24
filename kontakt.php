<!DOCTYPE HTML>
<html>

<head>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NZ8Q3X6');
	</script>
	<!-- End Google Tag Manager -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Kontaktirajte nas | ASAP </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=" Pošaljite nam email, pratite nas na društvenim mrežama i uvek budite u toku sa ASAP dešavanjima!" />
	<meta name="keywords" content="ASAP, elektronska muzika, dogadjaj, muzika, Pančevo, žurke" />
	<meta name="author" content="Lenka živković" />

	<link rel="shortcut icon" href="images/logo/logo-title.png">

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- FONT  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZ8Q3X6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<!-- <div class="top-menu"> -->
			<?php
			include "views/fixed/top-menu.php";
			?>
			<!-- </div> -->
		</nav>

		<div id="fh5co-contact" class="fh5co-section animate-box">
			<div class="container">

				<!-- <div class='row text-center'>

					<div class="col-sm-3"> <a href="https://www.facebook.com/asap.pancevo"><i class="icon-facebook2"></i></a></div>
					<div class="col-sm-3"> <a href="https://www.instagram.com/asap.pancevo/"><i class="icon-instagram2"></i></a> </div>
					<div class="col-sm-3"> <a href="https://goo.gl/maps/8uyUyHtLZYjLqE7P9"><i class="icon-location"></i></a> </div>
					<div class="col-sm-3"> <a href="#"><i class="icon-ticket"></i></a> </div>
				</div> -->

				<?php
				// if(isset($_POST['name']) && isset($_POST['email'])){
				// 	$name = $_POST['name'];
				// 	$email = $_POST['email'];
				// 	$to = "asap.pancevo@gmail.com";
				// 	$subject = "Nova poruka!";
				// 	$body = '<html> <body>
				// 		<h2> Nova poruka </h2>
				// 		</hr>
				// 		<p> Ime<br> '.$name . '</p>
				// 		<p> Email<br> '.$email.' </p>
				// 	</body>
				// 	</html>';

				// 	//headers
				// 	$headers = "Od: ". $name . " <". $email ." > \r\n";
				// 	$headers .= "Odgovori: " .$email ."\r\n";
				// 	$headers .= "MIME-Version: 1.0 \r\n";
				// 	$headers .= "Content-type: text/html; charset=utf-8";

				// 	//send
				// 	$send = mail($to, $subject, $body, $header);
				// 	if($send){
				// 		alert("Hvala na poslatoj poruci. Odgovoricemo u najkracem mogucem roku!");
				// 	} else {
				// 		alert("Greska!");
				// 	}


				// }
				?>

				<div class="row">
					<div class="col-md-6  col-sm-12 ">
						<form method="POST" name='email-form' action="mailto:asap.pancevo@gmail.com" id="form-wrap">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="name">Ime</label>
									<input type="text" class="form-control" id="name" name='name'>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" name='email'>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Vaša poruka</label>
									<textarea name="message" id="message" name='message' cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="submit" id='submmit' name='send-message' class="btn btn-primary btn-outline btn-lg" value="Pošalji">
								</div>
							</div>

						</form>

					</div>

					<div class="col-md-6  col-sm-12 " style="text-align:center; padding-top: 40px;">
						<div class="mapouter " style='display: inline-block;'>
							<div class="gmap_canvas map-responsive"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Maksima%20Gorkog%206&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
							<style>
								.mapouter {
									position: relative;
									text-align: center;
									height: 100%;
									width: 500px;
								}

								.gmap_canvas {
									overflow: hidden;
									background: none !important;
									height: 100%;
									width: 500px;
								}
							</style>
						</div>

					</div>
				</div>




			</div>



		</div>
	</div>

	<?php
	include "views/fixed/book.php";
	?>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<?php
		include "views/fixed/footer.php";
		?>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<?php
	include "views/fixed/top-js-includes.php";
	?>

</body>

</html>