<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-profile.css') }}">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6b20b1c14d.js" crossorigin="anonymous"></script>
	<title>Perfil do Contato</title>
</head>
<body>

	<div class="container">
		<header class="hero">
			<a href="{{ route('index') }}">
				<i  class="fas fa-chevron-circle-left back-btn"></i>
			</a>
			<div class="hero-info">
				<h1 class="name">Fanuel Ramos</h1>
			</div>
		</header>

		<section class="contact-info">

			<div class="info-line">
				<i class="fas fa-phone icon-gradient"></i>
				<p class="phone-number">888.888.888</p>
			</div>

			<div class="info-line">
				<i class="fas fa-envelope icon-gradient"></i>
				<p class="email">fanuelramos@example.com</p>
			</div>

			

			<div class="info-line">
				<i id="location" class="fas fa-map-marker-alt icon-gradient"></i>
				<p class="address">888 Example St</p>
			</div>
		</section>
	</div>

</body>
</html>
