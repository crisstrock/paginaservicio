@extends('layouts.admin')

@section('content')


<table class="table">
	<thead>
		<th>Foto</th>
		<th>Clasificación</th>
		<th>Modelo</th>
		<th>Marca</th>
		<th>Fecha de creación</th>
		<th>Opciones</th>
	</thead>


	@foreach($mobis as $mobi)

	@if($mobi->clasificacion != "Pc")

	@include('mobiliario.forms_show.ver_mobiliario')

	@endif
	
	@endforeach

</table>

@endsection