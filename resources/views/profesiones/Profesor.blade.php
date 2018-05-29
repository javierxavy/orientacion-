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
        <h2>Profesor</h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Maestro.png" class="img-circle img-responsive" alt="">
        <p>Profesor, docente o enseñante, es quien se dedica profesionalmente a la enseñanza, bien con carácter general, bien especializado en una determinada área de conocimiento, asignatura, disciplina académica, ciencia o arte. Además de la transmisión de valores, técnicas y conocimientos generales o específicos de la materia que enseña, parte de la función pedagógica del profesor consiste en facilitar el aprendizaje para que el alumno (estudiante o discente) lo alcance de la mejor manera posible</p>
        
      </div>

      <div class="col-md-5">
        <h2>Principales Tareas</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>Actualmente, una de las principales tareas y funciones del docente radica en apoyar a los estudiantes a “aprender a aprender” de manera autónoma,  promoviendo su desarrollo cognitivo y personal mediante estrategias  aplicadas  al aprovechamiento de los recursos y la información disponible. Por este motivo, el docente debe prepararse con una perspectiva multidisciplinaria, considerando aspectos propios de su disciplina, como también aspectos filosóficos, pedagógicos, didácticos, epistemológicos, tecnológicos, psicológicos, históricos y lingüísticos entre otros.</p>
        
      </div>
      <div class="col-md-5">
        <h2></h2>
        <p>El docente debe ser consciente de la responsabilidad y compromiso que tiene de forma individual y a nivel social, reconociendo su papel como eje de transformación de generaciones y sociedades, una vez comprendida la responsabilidad podrán verse de forma clara las funciones para lograr la construcción de individuos reflexivos, críticos, humanistas y responsables.
        </p>
       
      </div>

      <div class="col-md-5">
        <h2>Niveles en la profesión</h2>
        <p>
          Existen docentes en todos los niveles (primario, secundario, y universitario), que pueden ejercer su trabajo en la enseñanza pública o en instituciones privadas. Un docente puede trabajar por cuenta propia (como profesional libre) o bajo alguna modalidad de contratación con su empleador.
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