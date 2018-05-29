@extends('layout.tema')

@section('content')

<div class="container">
 
   
        <div class="row">
            
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info" id="uno">
                    <img class="card-img-top" src="../img/Tigre Personaje/Personajes pag principal Artes, Deportes y Academico/Tigre Academico.png">
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Test De Modos de Aprendizaje</h4>
                        <div class="card-text">
                            Descubre cual es la mejor manera en la que tu recibes conocimiento.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small">Da click y descubre...</small>
                        <button class="btn btn-warning float-right btn-sm" id="Naranjabtn"><a href="{{route('ModosdeAprendizaje')}}">Iniciar</a></button>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info" id="dos">
                    <img class="card-img-top" src="../img/Imagenes nuevas resoluciones/Tigre Colores 480.png">
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Test De Colores</h4>
                        <div class="card-text">
                            Descubre segun tus gustos de colores como es que en realidad eres.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small">Da click y descubre...</small>
                        <button class="btn btn-warning float-right btn-sm" id="Naranjabtn"><a href="{{route('Colores')}}">Iniciar</a></button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info" id="tres">
                    <img class="card-img-top" src="../img/Imagenes nuevas resoluciones/Tigre Vocaciones 480.png">
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Test De Orientacion Vocacional</h4>
                        <div class="card-text">
                            Descubre cuales son tus gustos y con ello sabras a que te podras dedicar en un futuro.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small">Da click y descubre...</small>
                         <button class="btn btn-warning float-right btn-sm" id="Naranjabtn"><a href="{{route('Cuestionario')}}">Iniciar</a></button>
                    </div>
                </div>
            </div>
            
        </div>
</div>

@endsection
