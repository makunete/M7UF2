@extends('layouts.master')

@section('content')

    <div class="row">

    <div class="col-sm-4">

        <img src="{{$pelicula['poster']}}" style="height: 300px"/>

    </div>
    <div class="col-sm-8">

        <h2 style="min-height: 45px;margin: 5px 0 10px 0">
        	{{$pelicula['title']}}
		</h2>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	Año: {{$pelicula['year']}}
		</h4>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	Director: {{$pelicula['director']}}
		</h4>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	<b>Resumen</b>: {{$pelicula['synopsis']}}
		</h4>
        <br />

        <?php if ("{$pelicula['rented']}"==0): ?>
            <h4 style="min-height: 45px;margin: 5px 0 10px 0" </h4> 
            <p><b>Estado:</b>Película actualmente alquilada</p>

        <?php else: ?>
            <h4 style="min-height: 45px;margin: 5px 0 10px 0" </h4> 
            <p><b>Estado:</b>Película disponible</p>
            
        <?php endif ?>
        <br />
        <button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/catalog/{{$id}}/edit'">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar peli</button>
        <button type="button" class="btn btn-default" onclick="window.history.back()">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Tornar</button>

        <button type="button" class="btn btn-danger"> Devolver pelicula</button>
    </div>
</div>

@stop
