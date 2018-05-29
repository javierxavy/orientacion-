@extends('layout.tema')

@section('content')
    <div class="container">
      <br>
      <br>
      <br>
      <br>
    <div class="alert alert-warning" role="alert"><p id="PP">#SoyProfesional</p></div>
      
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-6">
        <h2>Paleontólogo </h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Paleontologo.png" class="img-circle img-responsive" alt="">
        <p>El paleontólogo es un profesional de las ciencias naturales que estudia la vida y el medio ambiente. A través de los restos orgánicos (huesos, plantas, fósiles...) obtenidos en excavaciones desarrolla su investigación. El resultado obtenido muestra cómo eran la vida, el clima y el medio ambiente hace siglos.</p>
        
      </div>

      <div class="col-md-5">
        <h2>Funciones y Habilidades</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>Es habitual que un paleontólogo decida especializarse en alguno de los ámbitos que abarca la paleontología ya sean paleontólogos de vertebrados, paleontólogos de invertebrados, micropaleontólogos o paleobotánicos. Todos han de realizar sus excavaciones de forma responsable procurando dañar lo menos posible el entorno en el momento de la extracción.</p>
        
      </div>
      <div class="col-md-5">
        <h2></h2>
        <p>
          <br>Buscar información
          <br>Explicar y difundir los hallazgos
          <br>Explicar y difundir los hallazgos del patrimonio
          <br>Extraer fósiles
          <br>Interpretar datos
          <br>Procesar y analizar los hallazgos
          <br>Conservación del patrimonio medioambiental
          <br>Creación de trabajo original
          <br>Curiosidad
        </p>
       
      </div>

      <div class="col-md-5">
        <h2>Mundo Laboral</h2>
        <p>
          La docencia, la investigación, la asesoría, la documentación, la consultoría, el seguimiento de obras, la cartografía y la gestión y difusión del patrimonio y podrá desarrollar sus funciones en empresas de evaluación ambiental, medios de comunicación, empresas de prospección, museos o fundaciones, centros de enseñanza, oficinas del gobierno o centros de divulgación paleontológica. No solo trabaja en oficinas, laboratorios o archivos, sino que se precisan paleontólogos para realizar el trabajo de campo, por ejemplo, en excavaciones o yacimientos o realizando las tareas de guía turístico.
        </p>
        <br>
        <p><button type="button" class="btn btn-primary btn-lg btn-block"><a href="{{route('Menu')}}">Volver</a></button></p>
       
      </div>
      
      
       
    </div>
    <hr>

    <footer class="text-center">
      
    </footer>

  </div>  <!-- /container -->
  @endsection