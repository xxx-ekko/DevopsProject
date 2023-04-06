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
		<h1>Modifier un fournisseur</h1>
		<form action="{{route('update_fournisseur',$f->id)}}" method="POST">
            @csrf
        
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required value="{{$f->nom}}">
			</div>
			<div class="form-group">
				<label for="nom">Prenom:</label>
				<input type="text" class="form-control" id="nom" name="prenom" required value="{{$f->prenom}}">
			</div>
			<div class="form-group">
				<label for="nom">Adresse :</label>
				<input type="text" class="form-control" id="nom" name="addresse" required value="{{$f->addresse}}">
			</div>
			<div class="form-group">
				<label for="nom">Email:</label>
				<input type="text" class="form-control" id="nom" name="email" required value="{{$f->email}}">
			</div>
			<div class="form-group">
				<label for="nom">Tel :</label>
				<input type="text" class="form-control" id="nom" name="tel" required value="{{$f->tel}}">
			</div>
			<button type="submit" class="btn btn-primary">Modifier</button>
		</form>
	</div>


</body>
</html>