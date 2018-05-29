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
        <h2>Medicina</h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Medico.png" class="img-circle img-responsive" alt="">
        <p>Un médico es un profesional que practica la medicina y que intenta mantener y recuperar la salud humana mediante el estudio, el diagnóstico y el tratamiento de la enfermedad o lesión del paciente.</p>
        
      </div>

      <div class="col-md-5">
        <h2>Objetivo</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>El principal objetivo del médico, y de la medicina por extensión, es "cuidar la salud del paciente y aliviar su sufrimiento". </p>
        
      </div>

      
      
      <div class="col-sm-5">
        <h2>Valores</h2>
        <p>El trato digno al paciente y a los compañeros.
        <br>El control juicioso de la incertidumbre durante el encuentro con el enfermo
        <br>La práctica de una ética de la ignorancia (compartir con el paciente nuestras limitaciones científicas)
        <br>La práctica de una ética de la negativa (para rechazar aquello que no tiene sentido, firme pero amablemente, de pacientes, jefes y compañeros)
        <br>una enorme polivalencia en el limitado tiempo de la atención clínica.</p>
        
      </div>
      
       <div class="col-md-5">
        <h2>Funciones</h2>
        <p>
          Clínica: la atención a los pacientes.
          <br>Formación: tanto su propia formación continuada, como el adiestramiento de estudiantes de medicina. Además, de la educación para la salud de los ciudadanos.
          <br>Investigación: para conseguir el mejor desarrollo e innovación de la Medicina.
          <br>Administración y/o gestión: de los recursos humanos, materiales y financieros disponibles, y de la captación de nuevos apoyos socio-sanitarios.
          <br>
          <br>
          <br>
         <p><button type="button" class="btn btn-primary btn-lg btn-block"><a href="{{route('Menu')}}">Volver</a></button></p>
        </p>
       
      </div>
    </div>
    <hr>

    <footer class="text-center">
      
    </footer>

  </div>  <!-- /container -->

@endsection