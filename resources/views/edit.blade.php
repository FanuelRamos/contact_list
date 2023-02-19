<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-edit.css') }}">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6b20b1c14d.js" crossorigin="anonymous"></script>
	<title>Editar Contato</title>
</head>
<body>

	<div class="container">
		<header class="hero">
			
			<a href="{{ route('index') }}">
			     <i class="fas fa-chevron-circle-left back-btn"></i>
			</a>

			<div class="hero-info">
				@if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
				@else
					<h1 class="name">Editar Contacto</h1>
				@endif
			</div>
		</header>
		<form method="POST" action="{{ route('contact.update', $contact) }}">
			{{ csrf_field() }}
			@method('PUT')

			<section class="contact-info">

				<div class="info-line">
					<i class="fas fa-user icon-gradient"></i>
					<input type="text" class="type" name="name" value="{{ $contact->name }}" required>
				</div>

				<div class="info-line">
					<i class="fas fa-phone icon-gradient"></i>
					<input type="number" class="type" name="phone-number" value="{{ $contact->contact }}" required>
				</div>

				

				<div  class="info-line">
					<i class="fas fa-envelope icon-gradient"></i>
					<input type="email" class="type" name="email" value="{{ $contact->email }}" required>
				</div>

			<section class="button-container">
				<div class="update-contact">
					<i  class="fas fa-check-circle icon-gradient"></i>
					<button type="submit" class="button">Atualizar</button>
				</div>
			</section>
		</form>

	</div>


</body>
</html>
