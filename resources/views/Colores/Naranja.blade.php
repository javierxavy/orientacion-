@extends('layout.tema')

@section('content')
    <div class="container">
      <br>
      <br>
      <br>
      <br>
       <div class="alert alert-warning" role="alert"><p id="PP">#Colores</p></div>
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-6">
        
        <img src="../img/Imagenes nuevas resoluciones/Tigre globo naranja 480.png" class="img-responsive" alt="">
       
        </p>
        
      </div>

      <div class="col-md-5">
        <h2>Naranja</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>
          ¡Eres una persona que le gusta hablar y hacer nuevos amigos! Te gusta estar rodeado de gente, pero cuidando tu espacio personal. Además, te gusta la actividad física, el deporte y emprender nuevos retos cada día. ¡Increíble!
          <br>
          Este color transmite: Energía y positivismo.
          <br>
          El naranja es una combinación de rojo y amarillo, por ello el significado del color naranja, tiene mucho en común con estos. Así que podemos relacionar algunos de los significados del naranja con los de sus colores primarios como: la energía y el calor del sol (amarillo), y la intensidad agresiva del fuego (relacionado con los significados del color rojo).       
        <br>
        <br>
        Confianza en si mismo
        <br>
        Alta autoestima
        <br>
        Felicidad
        <br>
        Determinación
        <br>
        <br>       
        Este color se considera como un color histérico, y una exposición saturada, puede generar ataques de ansiedad e inestabilidad emocional. Por lo general, este color no se recomienda que domine en una habitación, ni un uniforme.
        <br>
       <p><button type="button" class="btn btn-primary btn-lg btn-block" ><a href="{{route('test-index')}}">Volver</a></button></p>
       
      </div>

    </div>
    <hr>

    <footer class="text-center">
      
    </footer>

  </div>  <!-- /container -->

@endsection