@extends('layout.tema')

@section('content')

<div class="container">
    <br>
    <br>
    <br>
    <br>
   
        <div class="row">
            
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/Tigre Personaje/Personajes pag principal Artes, Deportes y Academico/Tigre Academico.png">
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Test De Colores</h4>
                        <div class="card-text">
                            Descubre segun tus gustos de colores como es que en realidad eres.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small">Da click y descubre...</small>
                        <button class="btn btn-warning float-right btn-sm" id="Naranjabtn">Iniciar</button>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/prueba.png">
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Test De Colores</h4>
                        <div class="card-text">
                            Descubre segun tus gustos de colores como es que en realidad eres.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small">Da click y descubre...</small>
                        <button class="btn btn-warning float-right btn-sm" id="Naranjabtn" disabled="">Iniciar</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/prueba.png">
                    <div class="card-block">
                        
                            
                        <h4 class="card-title">Test De Colores</h4>
                        <div class="card-text">
                            Descubre segun tus gustos de colores como es que en realidad eres.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small id="small">Da click y descubre...</small>
                        <button class="btn btn-warning float-right btn-sm" id="Naranjabtn" disabled="">Iniciar</button>
                    </div>
                </div>
            </div>
            
        </div>
</div>

@endsection

@section('scripts')
<script>
    window.onload = function() {
    //funciones a ejecutar
    document.body.style.background = "#f3f3f3 url('../../img/jungle.jpg') no-repeat";
    };
</script>
@endsection