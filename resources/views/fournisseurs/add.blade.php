<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GESTION DES COMMANDES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	@include('../menu')
    <div class="container">
		<h1>Ajouter un fournisseur</h1>
		<form action="{{route('add_fournisseur')}}" method="POST">
            @csrf
        
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required>
			</div>
			<div class="form-group">
				<label for="nom">Prenom:</label>
				<input type="text" class="form-control" id="nom" name="prenom" required>
			</div>
			<div class="form-group">
				<label for="nom">Adresse :</label>
				<input type="text" class="form-control" id="nom" name="addresse" required>
			</div>
			<div class="form-group">
				<label for="nom">Email:</label>
				<input type="text" class="form-control" id="nom" name="email" required>
			</div>
			<div class="form-group">
				<label for="nom">Tel :</label>
				<input type="text" class="form-control" id="nom" name="tel" required>
			</div>
			<button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
	</div>


</body>
</html>