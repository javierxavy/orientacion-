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
        <h2>Turismo</h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Turismo.png" class="img-circle img-responsive" alt="">
        <p> El turismólogo es el profesional universitario que conoce e investiga el turismo, considerando su campo de análisis como una ciencia social en constante desarrollo metodológico y relacionada con las ciencias económicas.
          <br>
          <br></p>
        
      </div>

      <div class="col-md-5">
        <h2>Perfil del turismólogo</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>El sustentante en turismo o administración turística, se destaca por la importancia de esta actividad a nivel de algunos países o en carácter internacional, a su constante desarrollo. Ofrece conocimientos, actitudes y habilidades para satisfacer las necesidades relacionadas con las actividades y objetivos de los usuarios turísticos.

        Cada uno de los Patrimonios de la Humanidad Universal deben de admirarse profesionalmente, porque representan un enorme potencial para el desarrollo económico y promueve las relaciones cultural de diversas regionales mundiales.</p>
        
      </div>
      <div class="col-md-5">
        <h2>Labores</h2>
        <p><br>La elaboración y asesoría en políticas de turismo municipales, estaduales (o provinciales) y nacionales
<br>Elaborar el planeamiento del espacio turístico
<br>Analizar y elaborar planes para el desarrollo del turismo de un modo sustentable, basándose en factores sociales, culturales, ambientales y económicos, presentes en cada región
<br>Coordinar, desarrollar y orientar trabajos de selección y clasificación de zonas y áreas destinadas al turismo
<br>Coordinal actividades relacionadas con el ocio para la demanda turística
<br>Brindar consultoría a organizaciones del sector turístico
<br>Planear y organizar circuitos turísticos y gestionar agencias de viajes.
        </p>
       
      </div>

      <div class="col-md-5">
        <h2>Áreas de trabajo</h2>
        <p>Dirección de Actividades que favorezcan el Desarrollo Turístico.
        <br>Administración Hotelera y Sistemas Operativos de Hospedaje.
        <br>Planeación, Logística y Ejecución de Eventos, Congresos y Convenciones.
        <br>Coordinación de Grupos de Turistas.
        <br>Gestión en Alimentos y Bebidas, Restaurantes y Bares.
        <br>Selección y Capacitación del Recurso Humano.
        <br>Difusión y Marketing de Productos Turísticos.
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