@extends('layout.tema')

@section('content')
<br>
<br>
<br>

<legend>
<h1>
CUESTIONARIO 
</h1>
</legend>
 <div class="container">

    <div class="col-md-12">
      <form>
        <h2>Cuando estás en clase y el profesor explica algo que está escrito en la pizarra o en tu libro,te es más fácil seguir las explicaciones:</h2>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle" checked> <span class="label-text">Escuchando al profesor</span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Leyendo el libro o la pizarra </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Te aburres y esperas que te den algo que hacer a ti </span>
          </label>
        </div>
        
      </form>
    </div>
    <div class="col-md-12">
      <form>
        <h2>Cuando estás en clase</h2>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle" checked> <span class="label-text">Te distraen los ruidos </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Te distrae el movimiento </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Te distraes cuando las explicaciones son demasiado largas. </span>
          </label>
        </div>
        
      </form>
    </div>
    <div class="col-md-12">
      <form>
        <h2>Cuando te dan instrucciones:</h2>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle" checked> <span class="label-text">Te pones en movimiento antes de que acaben de hablar y explicar lo que hay que hacer.   </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Te cuesta recordar las instrucciones orales, pero no hay problema si te las dan por escrito   </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Recuerdas con facilidad las palabras exactas de lo que te dijeron.  </span>
          </label>
        </div>
        
      </form>
    </div>
    <div class="col-md-12">
      <form>
        <h2>Cuando tienes que aprender algo de memoria: </h2>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle" checked> <span class="label-text">Memorizas lo que ves y recuerdas la imagen (por ejemplo, la página del libro)</span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Memorizas mejor si repites rítmicamente y recuerdas paso a paso  </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Memorizas a base de pasear y mirar y recuerdas una idea general mejor que los detalles   </span>
          </label>
        </div>
        
      </form>
    </div>
    <div class="col-md-12">
      <form>
        <h2>En clase lo que más te gusta es que:  </h2>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle" checked> <span class="label-text">Se organicen debates y que haya dialogo</span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Que se organicen actividades en que los alumnos tengan que hacer cosas y puedan moverse.</span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Que te den el material escrito y con fotos, diagramas.   </span>
          </label>
        </div>
        
      </form>
    </div>
    <div class="col-md-12">
      <form>
        <h2>Marca la frace con las que te identifiques más:  </h2>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle" checked> <span class="label-text">Cuando escuchas al profesor te gusta hacer garabatos en un papel. </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Eres visceral e intuitivo, muchas veces te gusta/disgusta la gente sin saber bien porqué.</span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Prefieres los chistes a los cómics. </span>
          </label>
        </div>
        
      </form>
    </div>
    <div class="col-md-12">
      <form>
        <h2>Marca la frace con las que te identifiques más: </h2>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle" checked> <span class="label-text">Te gusta tocar las cosas y tiendes a acercarte mucho a la gente cuando hablas con alguien </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Tus cuadernos y libretas están ordenados y bien presentados, te molestan los tachones y las correcciones.  </span>
          </label>
        </div>
        <div class="form-check">
          <label class="toggle">
            <input type="radio" name="toggle"> <span class="label-text">Sueles hablar contigo mismo cuando estás haciendo algún trabajo </span>
          </label>
        </div>
        
      </form>
    </div>
    
</div>

<br>
<br>
<br><br>
<input class="btn btn-lg btn-success " type="submit" value="Enviar">
<input class="btn btn-lg btn-danger " type="submit" value="cancelar">
<br>
<br><br>

@endsection