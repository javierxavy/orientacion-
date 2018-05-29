@extends('layout.tema')

@section('content')
<br>
<br>
<br>
<legend>
<h1>
Educacion para el Desarrollo Sostenible 
</h1>
</legend>
    <br>
    <br>
		<div class="container">
			<embed src="../Libros/Educacion para el Desarrollo Sostenible.pdf" type="application/pdf" width="1200" height="1000"></embed>

		</div>
		<button class="btn btn-lg btn-danger btn-block"><a href="{{route('Descargas')}}">Volver</a></button>

@endsection