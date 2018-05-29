@extends('layout.tema')

@section('content')
<div class="container-fluid">
    <form class="form-horizontal">
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
  <label class="col-md-4 control-label" for="Id_Nombres" id="Etiqueta">Nombre(s)</label>  
  <div class="col-md-4">
  <input id="Id_Nombres" name="Id_Nombres" type="text" placeholder="Ej. Javier" class="form-control input-md" required=""  pattern="[A-Z]">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Apellido" id="Etiqueta">Apellidos</label>  
  <div class="col-md-4">
  <input id="Id_Apellido" name="Id_Apellido" type="text" placeholder="Ej. Marquez Rodriguez" class="form-control input-md" required="" maxlength="30" pattern="[A-Z,a-z]">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Escuela" id="Etiqueta">Escuela</label>
  <div class="col-md-4">
    <select id="Id_Escuela" name="Id_Escuela" class="form-control">
      <option value="1">BENITO ENCINO</option>
      <option value="2">BENITO LAS NIEVES</option>
      <option value="3">FELIPE ANGELES</option>
      <option value="4">FORD</option>
      <option value="5">MIGUEL HIDALGO</option>
      <option value="6">PRIMERO DE MAYO</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Grupo" id="Etiqueta">Grupo</label>
  <div class="col-md-4">
    <select id="Id_Grupo" name="Id_Grupo" class="form-control">
      <option value="1">6°A</option>
      <option value="2">6°B</option>
      <option value="3">6°C</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Sexo" id="Etiqueta">Sexo</label>
  <div class="col-md-4">
    <select id="Id_Sexo" name="Id_Sexo" class="form-control">
      <option value="1">Masculino</option>
      <option value="2">Femenino</option>
    </select>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Id_Contraseña" id="Etiqueta">Contraseña</label>
  <div class="col-md-4">
    <input id="Id_Contraseña" name="Id_Contraseña" type="password" placeholder="Password" class="form-control input-md" required="">
    
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
    <button id="button1id" name="button1id" class="btn btn-success">Aceptar</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>

  </div>

  
@endsection