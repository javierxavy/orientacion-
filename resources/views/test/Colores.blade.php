@extends('layout.tema')

@section('content')
<br>
<br>
<br>
<legend>
<h1>
El Color Que Mas Me Gusta
</h1>
</legend>


    <div class="container">
    <div class="col-sm-5">

                <div class="bs-calltoaction bs-calltoaction-default">
                    <div class="row">
                        <div class="col-md-3 cta-contents">
                            <h1 class="cta-title">Blanco</h1>
                            
                        </div>
                        
                        <div class="col-md-3 cta-button">
                            <a href="{{route('Blanco')}}" class="btn btn-lg btn-block btn-default">Mas...</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-primary">
                    <div class="row">
                        <div class="col-md-4 cta-contents">
                            <h1 class="cta-title">Azul  </h1>
                            
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="{{route('Azul')}}" class="btn btn-lg btn-block btn-primary">Mas...</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-info">
                    <div class="row">
                        <div class="col-md-4 cta-contents">
                            <h1 class="cta-title">Naranja</h1>
                            <div class="cta-desc">
                                
                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="{{route('Naranja')}}" class="btn btn-lg btn-block btn-info">Mas..</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-success">
                    <div class="row">
                        <div class="col-md-4 cta-contents">
                            <h1 class="cta-title">Verde</h1>
                            <div class="cta-desc">
                                
                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="{{route('Verde')}}" class="btn btn-lg btn-block btn-success">Mas..</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-warning" id="Morado">
                    <div class="row">
                        <div class="col-md-4 cta-contents">
                            <h1 class="cta-title">Morado</h1>
                            
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="{{route('Morado')}}" class="btn btn-lg btn-block btn-warning" id="Moradobtn">Mas...</a>
                        </div>
                     </div>
                </div>          

                <div class="bs-calltoaction bs-calltoaction-warning">
                    <div class="row">
                        <div class="col-md-4 cta-contents">
                            <h1 class="cta-title">Amarillo</h1>
                            
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="{{route('Amarillo')}}" class="btn btn-lg btn-block btn-warning">Mas...</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-danger">
                    <div class="row">
                        <div class="col-md-4 cta-contents">
                            <h1 class="cta-title">Rojo</h1>
                            
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="{{route('Rojo')}}" class="btn btn-lg btn-block btn-danger">Mas...</a>
                        </div>
                     </div>
                </div>


 		
    </div>

<div class="container" id="aver">
    <div class="col-sm-5">
<img src="../img/Imagenes nuevas resoluciones/Tigre Colores 480.png">

    </div>
</div>
@endsection