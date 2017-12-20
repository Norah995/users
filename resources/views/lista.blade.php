@extends('layaut')

@section('content')
 <!– {{$users}}–>
    <h1><center>LISTADO DE USUARIOS</center></h1>
    <table class="table">
	<thead class="thead-dark">
		<tr>
			<th>iD</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Sexo</th>
			<th>Email</th>
			<th>Contraseña</th>
			<th></th>
            <th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		<tr>
			<td>{{ $user->id}}</td>
			<td>{{ $user->nombre}}</td>
			<td>{{ $user->apellido}}</td>
			<td>{{ $user->sexo}}</td>
			<td>{{ $user->email}}</td>
			<td>{{ $user->contraseña}}</td>
			<th><a href="/edita/{{ $user->id}}"> Modificar </a></th>
            <th><a href="/borra/{{ $user->id}}"> Eliminar </a></th>
		</tr>
	@endforeach
@endsection