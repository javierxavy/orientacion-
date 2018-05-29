@extends('layout.tema')

@section('content')
<br>
<br>
<br>

<legend>
<h1>
#SoyProfecional
</h1>
</legend>
  <br>
  <br>
  <br>
  <ul id="categories" class="clr">
  <li class="pusher"></li>
  <li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/Medico.png" alt=""/>
        <h1>Medico</h1>
        
        <p><a href="{{route('Medicina')}}">#SoyProfesional</a></p>
    </div>
  </li>
    <li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/Disenador.png" alt=""/>
        <h1>Diseñador</h1>
         <p><a href="{{route('Diseno')}}">#SoyProfesional</a></p>
    </div>
  </li>
  <li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/Turismo.png" alt=""/>
        <h1>Turismo</h1>
       <p><a href="{{route('Turismo')}}">#SoyProfesional</a></p>
    </div>
  </li>
  <li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/psicologia.png" alt=""/>
        <h1>Psicologo</h1>
        <p><a href="{{route('Psicologo')}}">#SoyProfesional</a></p>
    </div>
  </li>
  <li class="pusher"></li>
  <li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/Dentista.png" alt=""/>
        <h1>Dentista</h1>
         <p><a href="{{route('Dentista')}}">#SoyProfesional</a></p>
    </div>
  </li>
  
  <li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/deportes.png" alt=""/>
        <h1>Deportista</h1>
         <p><a href="{{route('Deportista')}}">#SoyProfesional</a></p>
  </li>
  <li class="pusher"></li>
  <li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/ing en sistemas.png" alt=""/>
        <h1>Ingeniero En Sistemas</h1>
        <p><a href="{{route('Sistemas')}}">#SoyProfesional</a></p>
    </div>
  </li>
  <li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/Maestro.png" alt=""/>
        <h1>Profesor</h1>
         <p><a href="{{route('Profesor')}}">#SoyProfesional</a></p>
    </div>
  </li><li>
      <div>
        <img src="../img/Tigre Personaje/Logos de Profesiones/Paleontologo.png" alt=""/>
        <h1>Paleontologo</h1>
         <p><a href="{{route('Paleontologo')}}">#SoyProfesional</a></p>
    </div>
  </li>
 
</ul>



@endsection