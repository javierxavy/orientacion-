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
        
        <img src="../img/Imagenes nuevas resoluciones/Tigre globo rojo 480.png" class="img-responsive" alt="">
       
        </p>
        
      </div>

      <div class="col-md-5">
        <h2>Rojo</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>EWow! ¡Tu personalidad es muy activa y siempre ves el lado positivo de las cosas! Tu carácter te permite superarte constantemente y dar lo mejor de ti. ¡Sigue así!
        <br>
        Este color transmite: Energía y vitalidad.
    
        <br>
        Los significados del rojo, trasmiten un sentido de seguridad, confianza y estabilidad emocional. Así que una persona que utiliza de una manera inconsciente el color rojo, suele estar alineada con alguno de estos tres estados psicológicos.
        <br>
        <br>
        El rojo se utiliza para llamar la atención a un elemento en particular y para generar una sensación de urgencia, o emergencia.
        <br>
        <br>       
        Estos, son los efectos que una persona puede sentir al estar expuesto de una manera continua al color rojo, por ejemplo, un ejemplo de una situación así, sería trabajar en una oficina con mobiliario rojo, o plantas rojas. Este color, trasmite vitalidad y acción, este efecto es muy notable, y puede desencadenar: palpitaciones aumento de la tensión muscular, elevación dela presión arterial, y aceleración en la respiración.
       
        <br>
        <p><button type="button" class="btn btn-primary btn-lg btn-block" ><a href="{{route('test-index')}}">Volver</a></button></p>
       
      </div>

    </div>
    <hr>

    <footer class="text-center">
      
    </footer>

  </div>  <!-- /container -->

@endsection