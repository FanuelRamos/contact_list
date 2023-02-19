<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6b20b1c14d.js" crossorigin="anonymous"></script>

	<title>Contatos</title>
</head>
<body>

	<div class="container">
		<!--  SEARCH FORM -->
		<header class="header">
			<a href="{{ route('add') }}" class="addbutton"> Adicionar &nbsp; <i class="fas fa-plus-circle add"></i></a>
		</header>

		<!--  CONTACT LIST -->
		<section class="contacts-library">
			<ul class="contacts-list">
				
					<div class="contact-section">
						<a href="{{ route('profile') }}">
							<li class="list__item">
								<p class="contact-name">John Doe</p>
							</li>
						</a>
						<li class="list__item">
							<i class="fas fa-edit"></i>
							<i class="fas fa-trash"></i>
						</li>
					</div>

				<hr>
			</ul>
		</section>
	</div>

</body>
</html>
