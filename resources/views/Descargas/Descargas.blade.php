@extends('layout.tema')

@section('content')

<br>
<br>
<br>
<br>
<legend>
<h1>
Descargas 
</h1>
</legend>
<br>

<div class="container">

  		<div class="row transparent">
    		<div class="col-md-6">
		  		<div class="tuyin first">	
					<span class="title">Libro 1</span>
			 		<div class="plan-name">Pedagogia de la Esperanza</div>
			  			<div class="text" id="TEX">
						<p>La práctica educativa de opción progresista jamás
							dejará de ser una aventura de revelación, una experiencia
							de desocultamiento de la verdad. Es porque siempre he pensado
							así por lo que a veces se discute si soy o no un educador.
							Eso fue lo que ocurrió en un encuentro realizado recientemente
							en la UNESCO, en París, según me contó...</p>
			  			</div>
				<button type="button" class="btn btn-warning"><a href="../Libros/Pedagogia de la Esperanza.pdf" download="Pedagogia de la Esperanza">Descargar </a><span class="glyphicon glyphicon-circle-arrow-down"></span> </button>
						<button type="button" class="btn btn-warning"><a href="{{route('Libro1')}}">Ver </a> <span class="glyphicon glyphicon glyphicon-file"></span></button>
		  </div>
		</div>

		<div class="row transparent">
    		<div class="col-md-6">
		  		<div class="tuyin first">	
					<span class="title">Libro 2</span>
			 		<div class="plan-name">Educacion para el Desarrollo Sostenible</div>
			  			<div class="text" id="TEX">
						<p>El objetivo de esta publicación consiste en describir métodos para integrar la educación para el desarrollo sostenible (EDS) en la educación primaria y secundaria. Esta recopilación de informes está diseñada para complementar los demás materiales sobre la EDS publicados por la UNESCO. La selección de los temas de los mismos se realizó en...</p>
			  			</div>
						<button type="button" class="btn btn-warning"><a href="../Libros/Educacion para el Desarrollo Sostenible.pdf" download="Educacion para el Desarrollo Sostenible">Descargar </a><span class="glyphicon glyphicon-circle-arrow-down"></span> </button>
						<button type="button" class="btn btn-warning" ><a href="{{route('Libro2')}}">Ver </a><span class="glyphicon glyphicon glyphicon-file"></span></button>
		  </div>
		</div>

		<div class="row transparent">
    		<div class="col-md-6">
		  		<div class="tuyin first">	
					<span class="title">Libro 3</span>
			 		<div class="plan-name">El Valor De Educar</div>
			  			<div class="text" id="TEX">
						<p>Como hemos visto, el aprendizaje a través de la comunicación con los semejantes y
						de la transmisión deliberada de pautas, técnicas, valores y recuerdos es proceso
						necesario para llegar a adquirir la plena estatura humana. Para ser hombre no basta con
						nacer, sino que hay también que...</p>
			  			</div>
						<button type="button" class="btn btn-warning"><a href="../Libros/El Valor De Educar.pdf" download="El Valor De Educar">Descargar </a><span class="glyphicon glyphicon-circle-arrow-down"></span> </button>
						<button type="button" class="btn btn-warning"><a href="{{route('Libro3')}}">Ver </a> <span class="glyphicon glyphicon glyphicon-file"></span></button>
		  </div>
		</div>

		<div class="row transparent">
    		<div class="col-md-6">
		  		<div class="tuyin first">	
					<span class="title">Libro 4</span>
			 		<div class="plan-name">El Tacto De La Ensenanza</div>
			  			<div class="text" id="TEX">
						<p>Este libro esta dirigido a profesores que comienzan y quieren sentirse capaces y estimulados para la que seguramente es la mas importante de todas las tareas humanas. Esta pensado para profesores experimentados y otros especialistas de la infancia que quieran ser mas reflexivos en su vida profecional...</p>
			  			</div>
						<button type="button" class="btn btn-warning"><a href="../Libros/El Tacto De La Ensenanza.pdf" download="El Tacto De La Ensenanza">Descargar </a><span class="glyphicon glyphicon-circle-arrow-down"></span> </button>
						<button type="button" class="btn btn-warning"><a href="{{route('Libro4')}}">Ver </a> <span class="glyphicon glyphicon glyphicon-file"></span></button>
		  </div>
		</div>
		

		
  </div>
  
<button class="btn btn-lg btn-danger btn-block"><a href="{{route('Maestros')}}">Volver</a></button>
<br>
<br>

</div>
@endsection