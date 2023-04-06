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
		<h1>Modifier un produit</h1>
		<form action="{{route('update_produit',$p->id)}}" method="POST">
            @csrf
        
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required value="{{$p->nom}}">
			</div>
			<div class="form-group">
				<label for="nom">quantite:</label>
				<input type="text" class="form-pontrol" id="nom" name="quantite" required value="{{$p->quantite}}">
			</div>
			<div class="form-group">
				<label for="nom">prix:</label>
				<input type="text" class="form-pontrol" id="nom" name="prix" required value="{{$p->prix}}">
			</div>
			<div class="form-group">
				<label for="nom">categorie:</label>
				<select class="form-select" name="categorie_id" aria-label="Default select example">
					@foreach ($categorie as $c)
					<option value="{{$c->id}}" {{$c->id==$p->categorie_id  ? 'selected':''}}>{{$c->nom}}</option>
					@endforeach 
				  </select>
			</div>
			<div class="form-group">
				<label for="nom">fournisseur:</label>
				<select class="form-select form-select-lg" name="fournisseur_id" aria-label="Default select example">
					 @foreach ($fournisseur as $f ) 
					<option value="{{$f->id}}" {{$f->id==$p->fournisseur_id ? 'selected':''}}>{{$f->nom}}</option>
					@endforeach 
				  </select>
			</div>
			<button type="submit" class="btn btn-primary">Modifier</button>
		</form>
	</div>

        
</body>
</html>