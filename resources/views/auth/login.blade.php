<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->


</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
        <div class="panel panel-default">
          <div class="panel-heading">

            <h3 class="panel-title">Please sign in</h3>
        </div>
          <div class="panel-body">
            <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
                    <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Usuario" name="username">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password">
              </div>
              
              <input class="btn btn-lg btn-success btn-block" type="submit">
            </fieldset>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>

          

          
        </div>
      </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>