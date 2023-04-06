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
        <a href="/client/add" type="button" class="btn btn-primary btn-lg"><i class="fas fa-plus"></i> Ajouter un client</a>
        <br>
        <br>
		<h1>Liste des clients</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Action</th>
                    
				</tr>
			</thead>
			<tbody>
                @foreach ($clients as $client) 
				<tr>
					<td>{{$client->id}}</td>
					<td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->addresse}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->tel}}</td>
                    <td>
                        <a href="{{route('edit_client',$client->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{route('delete_client',$client->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet client ?');"><i class="fas fa-trash-alt"></i> Delete</a>

                    </td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>