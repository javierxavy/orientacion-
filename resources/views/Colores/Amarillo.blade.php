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
        
        <img src="../img/Imagenes nuevas resoluciones/Tigre globo amarillo 480.png" class="img-responsive" alt="">
        
        
      </div>

      <div class="col-md-5">
       <h2>Amarillo</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>
        
        <h3>
        
        <br>
        <br>
        ¿Eres muy alegre y creativo? ¡Ahora sé porque es tu color favorito! Este color se asocia con cosas positivas como la felicidad, la juventud y la creatividad. 
        <br>
        ¡Es por eso que realizas con mucha facilidad tus actividades diarias! ¡Viva la felicidad!
        <br>
        Este color transmite: Alegría, positivismo y energía
        </h3>
    
        <p><button type="button" class="btn btn-primary btn-lg btn-block" ><a href="{{route('test-index')}}">Volver</a></button></p>
        
       
      </div>
    </div>
    <hr>

    <footer class="text-center">
      
    </footer>

  </div>  <!-- /container -->

@endsection