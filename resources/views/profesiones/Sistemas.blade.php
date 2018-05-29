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
        <h2>Ingeniero en Sistemas</h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Sistemas.png" class="img-circle img-responsive" alt="">
        <p>Eres un profesionista especializado en el desarrollo de software para mejorar la calidad de vida de la sociedad y apoyar la competitividad de las organizaciones y el desarrollo sustentable del país. Tu formación en las áreas de ingeniería de software y ciencias computacionales te permitirá crear todo tipo de aplicaciones computacionales, desde las de uso personal y cotidiano hasta las especializadas en el ámbito científico, técnico, ingenieril y de negocios. </p>
        
      </div>

      <div class="col-md-5">
        <h2>Areas de Trabajo</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>Ingeniería de software. Desarrollas desde grandes sistemas computacionales hasta nuevos algoritmos.
        <br>Análisis y diseño de sistemas de información.
        <br>Desarrollo de aplicaciones innovadoras.
        <br>Administración de proyectos y servicios de tecnologías de información.
        <br>Consultoría especializada en soluciones de software y tecnologías de información.
        <br>Investigación en temas de nuevas tecnologías.
        <br>Empresa propia. Emprendes negocios de base tecnológica.</p>
        
      </div>
      <div class="col-md-5">
        <h2>Caracteristicas</h2>
        <p>Una de las principales diferencias de la ingeniería de sistemas respecto a otras disciplinas de ingeniería tradicionales, consiste en que la ingeniería de sistemas no construye productos tangibles. Mientras que los ingenieros civiles podrían diseñar edificios o puentes, los ingenieros electrónicos podrían diseñar circuitos, los ingenieros de sistemas tratan con sistemas abstractos con ayuda de las metodologías de la ciencia de sistemas, y confían además en otras disciplinas para diseñar y entregar los productos tangibles que son la realización de esos sistemas.
        </p>
       
      </div>

      <div class="col-md-5">
        <h2>Otras Areas</h2>
        <p>
          <br>Sistemas de Información
          <br>Investigación de operaciones
          <br>Ingeniería de sistemas cognitivos
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