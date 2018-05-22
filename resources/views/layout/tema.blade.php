<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<meta charset="UTF-8">
<link href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->


</head>
<body>

<!-- inicio nav -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Orientacion Educativa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Menu <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Libros</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">#SoyProfecional <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Medico</a></li>
            <li><a href="#">Diseñador</a></li>
            <li><a href="#">Turismo</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Psicologo</a></li>
            <li><a href="#">Dentista</a></li>
            <li><a href="#">Deportista</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Ing. Sistemas</a></li>
            <li><a href="#">Profesor</a></li>
            <li><a href="#">Paleontologo</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        
          <li><a href="{{ route('logout') }}">Cerrar Sesion</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">

@yield('content')

</div>

  


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>