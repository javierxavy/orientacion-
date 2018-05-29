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
        
        <img src="../img/Imagenes nuevas resoluciones/Tigre globo morado 480.png" class="img-responsive" alt="">
       
        </p>
        
      </div>

      <div class="col-md-5">
        <h2>Morado</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>¡Padrísimo! Te gusta razonar las situaciones y actúas con mucha cabeza y equilibrio. Y, aunque tu personalidad es sentimental, eres muy seguro de ti mismo. Siempre te enfocas a ayudar y a orientar a quien lo necesite.
        <br>
        Este color transmite: Tranquilidad y misterio.

        <br>
        <br>
        El color morado es un color púrpura azulado, oscuro y profundo y cuyo nombre hace referencia al color de las moras. No es hasta el siglo XV cuando se le da esta denominación en el castellano.
        <br>
        <br>       
        Actualmente el color puede simbolizar magia, espiritualidad, creatividad, dignididad o hasta realeza.
      
        <br>
        Este color está relacionado a la imaginación y la espiritualidad. Estimula la imaginación e inspira altos ideales. Es un color 
        <br>
        introspectivo que nos permite entrar en contacto con nuestros pensamientos más profundos. 
        <br>
        <p><button type="button" class="btn btn-primary btn-lg btn-block" ><a href="{{route('test-index')}}">Volver</a></button></p>
       
      </div>

    </div>
    <hr>

    <footer class="text-center">
      
    </footer>

  </div>  <!-- /container -->

@endsection