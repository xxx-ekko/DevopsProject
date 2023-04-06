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
		<h1>Ajouter une commande</h1>
		<form action="{{route('add_commande')}}" method="POST">
            @csrf
        
			{{-- <div class="form-group">
				<label for="nom">Date :</label>
				<input type="text" class="form-control" id="nom" name="date" required >
			</div> --}}
			<div class="form-group">
				<label for="nom">quantite:</label>
				<input type="text" class="form-control" id="nom" name="quantite" required >
			</div>
			<div class="form-group">
				<label for="nom">Produit:</label><br>
				<select class="form-select form-select-lg" name="produit_id" aria-label="Default select example">
					@foreach ($produit as $p)
					<option value="{{$p->id}}" >{{$p->nom}}</option>
					@endforeach
				  </select>
			</div>
			<div class="form-group">
				<label for="nom">Client:</label><br>
				<select class="form-select form-select-lg" name="client_id" aria-label="Default select example">
					@foreach ($client as $c)
					<option value="{{$c->id}}" >{{$c->nom}}</option>
					@endforeach
				  </select>
			</div>
			
			<button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
	</div>


</body>
</html>