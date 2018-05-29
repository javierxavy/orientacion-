@extends('layout.tema')

@section('content')
  
    <div class="container">
      <br>
      <br>
      <br>
      <br>
      <br>
       <div class="alert alert-warning" role="alert"><p id="PP">#Colores</p></div>
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-6">
        
        <img src="../img/Imagenes nuevas resoluciones/Tigre globo verde 480.png" class="img-responsive" alt="">
       
        </p>
        
      </div>

      <div class="col-md-5">
        <h2>Verde</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>¿Eres una persona tranquila y relajada? Por lo general, a quienes les gusta el color verde les gusta ayudar a los demás aportando cosas buenas cada día. Les gusta ser reconocidos y son muy optimistas. ¡Asombroso!
        <br>
        Este color transmite: Equilibrio y calma
       
        <br>
        Se recomienda utilizar el verde en habitaciones donde se busca la estabilidad, y la tranquilidad. Además, en la psicología el verde se utiliza para facilitar la conexión entre las perosanas, aumentar la sociabilidad de pacientes, y trasmite positivismo.
        <br>
        <br>
        Aquellas personas que consideran el color verde como su color favorito suelen ser maduras, son sensibles,  tienen una mente abierta, suelen prestar mucha atención a su alrededor, y suelen ser muy amigables.
        <br>
        <br>       
        Con todo esto, sorprende, que un tono pálido de verde,  cambien su significado a algo mucho más negativo, como mal estar estomacal, comida en mal estado, y otras relaciones similares.  
       
        <br>
        <p><button type="button" class="btn btn-primary btn-lg btn-block" ><a href="{{route('test-index')}}">Volver</a></button></p>
       
      </div>

    </div>
    <hr>

    <footer class="text-center">
      
    </footer>

  </div>  <!-- /container -->

@endsection