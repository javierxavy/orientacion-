@extends('layout.tema')

@section('content')
<br>
<br>
<br>
<legend>
<h1>
El Tacto De La Enseñanza 
</h1>
</legend>
    <br>
    <br>
		<div class="container">
			<embed src="../Libros/El Tacto De La Ensenanza.pdf" type="application/pdf" width="1200" height="1000"></embed>
		</div>
		<button class="btn btn-lg btn-danger btn-block"><a href="{{route('Descargas')}}">Volver</a></button>

@endsection