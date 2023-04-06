<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROJET GESTION DES COMMANDES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>
   @include('../menu')
    <div class="container">
        <a href="/commande/add" type="button" class="btn btn-primary btn-lg"><i class="fas fa-plus"></i> Ajouter une commande</a>
        <br>
        <br>
		<h1>Liste des commandes</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>date</th>
                    <th>quantite</th>
                    <th>etat</th>
                    <th>client</th>
                    <th>produit</th>
                    <th>Action</th>
                    
				</tr>
			</thead>
			<tbody>
                @foreach ($commandes as $commande) 
				<tr>
					<td>{{$commande->id}}</td>
					<td>{{$commande->date}}</td>
                    <td>{{$commande->quantite}}</td>
                    <td>{{$commande->etat}}</td>
                    <td>{{$commande->client_nom}}</td>
                    <td>{{$commande->produit_nom}}</td>
                    <td>
                        <a href="{{route('edit_commande',$commande->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{route('delete_commande',$commande->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette commande?');"><i class="fas fa-trash-alt"></i> Delete</a>

                    </td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>