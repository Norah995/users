@extends('layaut')

@section('content')
 <!–{{$users}}->
    <h1><center>LISTADO DE USUARIOS</center></h1>
    <table class="table">
	<thead class="thead-dark">
		<tr>
			<th>iD</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Sexo</th>
			<th>Email</th>
			<!--<th>Contraseña</th>-->
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
			<!-- <td>{{ $user->contraseña}}</td>-->
			<td><a class="btn btn-primary" href="/edita/{{ $user->id}}" role="button">Modificar</a></td>	
            <!-- <th><a href="/borra/{{ $user->id}}"> Eliminar </a></th>-->
            <td>@include('modalf')</td>
		</tr>
	@endforeach

@endsection