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
        <h2>Diseño</h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Disenador.png" class="img-circle img-responsive" alt="">
        <p>Un diseñador es un profesional que ejerce la profesión del diseño. Un profesional de este tipo puede dedicarse o especializarse en una gran variedad de objetos o áreas del diseño. Los diseñadores son responsables del desarrollo, en cuanto al proyecto, de un objeto, producto, o concepto.</p>
        
      </div>

      <div class="col-md-5">
        <h2>¿Como Trabajan?</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>Los diseñadores trabajan según un proceso de diseño que comienza con la interpretación o detección de un problema o necesidad y culminan con la producción o construcción de la solución a este problema. En este proceso intervienen, entre muchas otras, habilidades que se relacionan con el manejo y conocimiento de las ciencia, auxiliares del diseño la tecnología, la psicología, la forma, la ergonomía, el lenguaje, la comunicación visual, la cultura general y una gran capacidad creativa. </p>
        
      </div>
      <div class="col-md-5">
        <h2>Formación</h2>
        <p><br>La formación de cada una de las ramas de especialización del diseño es específica para cada una. En general se centran en el soporte científico de la teoría del diseño y la práctica profesional en sí.
        </p>
       
      </div>

      <div class="col-md-5">
        <h2>Diferentes Areas</h2>
        <p>Arquitectura 
        <br>Diseño de indumentaria y textil
        <br>Diseño de modas
        <br>Diseño de joyas
        <br>Diseño del paisaje
        <br>Diseño gráfico
        <br>Diseño industrial
        <br>Diseño interior
        <br>Diseño Multimedia
        <br>Diseño de videojuegos
        <br>Diseño audiovisual
        <br>Ingeniería</p>
        <br>
         <p><button type="button" class="btn btn-primary btn-lg btn-block"><a href="{{route('Menu')}}">Volver</a></button></p>
       
      </div>
      
      
       
    </div>
    <hr>

    <footer class="text-center">
    
    </footer>

  </div>  <!-- /container -->

@endsection