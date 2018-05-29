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
        <h2>Psicólogo</h2>
        <img src="../img/Tigre Personaje/Personaje con Profesiones/Psicologia.png" class="img-circle img-responsive" alt="">
        <p> Profesional que se dedica a ejercer la psicología. Se trata de un especialista de la salud mental que, por esa razón, está interesado en estudiar y entender el comportamiento (o la conducta, según el punto de vista de otras terminologías).</p>
        
      </div>

      <div class="col-md-5">
        <h2>Perfil del Psicólogo</h2>
        <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
        <i class="fas fa-chess fa-5x"></i>

        <p>La actividad profesional del psicólogo lleva consigo necesariamente implicaciones éticas, estando sometida, por tanto, a exigencias y obligaciones profesionales de carácter deontológico. Estas consideraciones morales son normalmente acordadas y divulgadas por los colegios profesionales de psicólogos.</p>
        
      </div>
      <div class="col-md-5">
        <h2></h2>
        <p><br>La psicología es una disciplina compleja, con muchas maneras diferentes de observar e interpretar la mente y la conducta humana y de aplicar los conocimientos obtenidos. A medida que se ha ido desarrollando como disciplina científica y profesional, se ha producido también una creciente especialización, tanto en interés por la investigación como en términos de formación.
        </p>
       
      </div>

      <div class="col-md-5">
        <h2>Áreas y actividades</h2>
        <p>

        <br>Psicología educativa:
        <br>Orientación educativa y vocacional.
        <br>Asesoría e intervención psicopedagógica.
        <br>Educación especial.
        <br>Planeación y asesoría pedagógica.
        <br>Docencia.
        <br>Consejería psicológica.
        <br>Psicoterapia (individual, de grupos, familiar y de pareja).
        <br>Psicodiagnóstico.
        <br>Peritaje.
        <br>Psicología de enlace.
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