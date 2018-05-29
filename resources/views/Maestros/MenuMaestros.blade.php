@extends('layout.tema')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

   
        <div class="row">
            
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Altas</h4>
                        <div class="card-text">
                            Podras dar de alta un nuevo alumno
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small"></small>
                        <button class="btn btn-warning float-right btn-sm" id="Naranjabtn"><a href="{{route('Formulario')}}">Iniciar</a></button>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                   
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Lista de Alumnos</h4>
                        <div class="card-text">
                           Conoce Quien ya contesto los test y su resultado
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small"></small>
                        <button class="btn btn-warning float-right btn-sm" id="Naranjabtn"><a href="{{route('Descargas')}}">Iniciar</a></button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Zona de Descargas</h4>
                        <div class="card-text">
                            Conoce libros que te pueden ayudar como Maestro
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small"></small>
                        <button class="btn btn-warning float-right btn-sm" id="Naranjabtn"><a href="{{route('Descargas')}}">Iniciar</a></button>
                    </div>
                </div>
            </div>
            
            
        </div>
</div>  <!-- /container -->


@endsection