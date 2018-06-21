@extends('layout.tema')

@section('content')
<div class="container-fluid">
    <form action="{{ route('registro-persona') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<br>
<br>
<br>
<br>
<br>

<legend>Registro de Alumnos</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" id="Etiqueta">Usuario</label>  
  <div class="col-md-4">
  <input id="Id_Nombres" name="username" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Nombres" id="Etiqueta">Nombre(s)</label>  
  <div class="col-md-4">
  <input id="Id_Nombres" name="nombre" type="text" placeholder="Ej. Javier" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Apellido" id="Etiqueta">Apellidos</label>  
  <div class="col-md-4">
  <input id="Id_Apellido" name="apellidos" type="text" placeholder="Ej. Marquez Rodriguez" class="form-control input-md" required="" maxlength="30">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Escuela" id="Etiqueta">Escuela</label>
  <div class="col-md-4">
    <select id="Id_Escuela" name="escuela" class="form-control">
      <option value="Benito Encino">BENITO ENCINO</option>
      <option value="Benito Las Nieves">BENITO LAS NIEVES</option>
      <option value="Felipe Angeles">FELIPE ANGELES</option>
      <option value="Ford">FORD</option>
      <option value="Miguel Hidalgo">MIGUEL HIDALGO</option>
      <option value="Primero de Mayo">PRIMERO DE MAYO</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Grupo" id="Etiqueta">Grupo</label>
  <div class="col-md-4">
    <select id="Id_Grupo" name="grupo" class="form-control">
      <option value="6°A">6°A</option>
      <option value="6°B">6°B</option>
      <option value="6°C">6°C</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Grupo" id="Etiqueta">Grupo</label>
  <div class="col-md-4">
    <select id="Id_Grupo" name="tipo" class="form-control">
      <option value="maestro">MAESTRO</option>
      <option value="alumno">ALUMNO</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Sexo" id="Etiqueta">Sexo</label>
  <div class="col-md-4">
    <select id="Id_Sexo" name="sexo" class="form-control">
      <option value="hombre">Masculino</option>
      <option value="mujer">Femenino</option>
    </select>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Contraseña" id="Etiqueta">Contraseña</label>
  <div class="col-md-4">
    <input id="Id_Contraseña" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="" id="Etiqueta">Confirmar Contraseña</label>
  <div class="col-md-4">
    <input id="" name="" type="password" placeholder="Repita Contraseña" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success">Aceptar</button>
    <button class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>

  </div>

  
@endsection