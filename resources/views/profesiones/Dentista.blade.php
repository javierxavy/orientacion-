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
        <h2>Cirujano Dentista (Odontología)</h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Dentista.png" class="img-circle img-responsive" alt="">
        <p>Es una de las ciencias de la salud que se encarga del diagnóstico, tratamiento y prevención de las enfermedades del aparato estomatognático, el cual incluye además de los dientes, las encías, el tejido periodontal, el maxilar superior, el maxilar inferior y la articulación temporomandibular. </p>
        
      </div>

      <div class="col-md-5">
        <h2>Perfil del Dentista</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>El Cirujano Dentista cuenta con conocimientos suficientes para desarrollar y demostrar habilidades, actitudes y valores para contribuir a la prevención, promoción, diagnóstico, tratamiento y rehabilitación de la salud bucal.</p>
        
      </div>
      <div class="col-md-5">
        <h2>Actividades</h2>
        <p><br>Se encamina a la prevención y curación de los padecimientos del Macizo facial.
        <br>Elimina la caries dental.
        <br>Contribuye con aparatos protésicos, fijos y removibles, para sustituir los órganos dentarios faltantes.
        <br>Devuelve a los órganos dentarios afectados su forma y función.
        </p>
       
      </div>

      <div class="col-md-5">
        <h2></h2>
        <p>El odontólogo o dentista debe poseer amplios conocimientos de diferentes aspectos de la medicina, incluyendo anatomía, fisiología, patología y farmacología. Es preciso tener en cuenta que una enfermedad bucal puede provocar complicaciones locales que afecten a regiones próximas como el cuello y la cara, pero también complicaciones generales de gravedad como septicemia y endocarditis..
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