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
        <h2>Deportista</h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Deportes.png" class="img-circle img-responsive" alt="">
        <p>Los deportistas son los profesionales que dedican su vida al ejercicio y a la competición. Éstas pueden realizarse a muy diversos niveles. Los profesionales de élite pueden llegar a cobrar  salarios desorbitados, aunque estos beneficios vendrán también de la publicidad. Sin embargo, lo normal es que realicen esta profesión por placer y deban tener otro trabajo mejor remunerado.</p>
        
      </div>

      <div class="col-md-5">
        <h2>Necesidades Formativas</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>Para ser deportista no es necesario tener ningún tipo de estudios. Sin embargo, muchos de ellos deciden estudiar profesiones relacionadas con el ámbito de la educación o de la salud. De este modo, podrán seguir trabajando una vez se retiren y abandonen el mundo de la competición. Podrán cursar, por ejemplo, los estudios de Medicina, Fisioterapia, Entrenamiento Deportivo o Educación Física.</p>
        
      </div>
      <div class="col-md-5">
        <h2>Principales Deportes</h2>
        <p>
          <br>Fútbol.
          <br>Beisbol.
          <br>Atletismo.
          <br>Baloncesto.
          <br>Tenis.
          <br>Automovilismo.
          <br>Voleibol.
          <br>Box
          <br>Fútbol Americano
          <br>Gimnasia
        </p>
       
      </div>

      <div class="col-md-5">
        <h2>Funciones y Habilidades</h2>
        <p>
          <br>Analizar la competencia
          <br>Mantener la forma física
          <br>Practicar su deporte
          <br>Realizar actividades de promoción
          <br>Realizar análisis
          <br>Realizar entrenamientos diarios
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