<!DOCTYPE html>
<html>
 <head>
 <title>test</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <link href="{{ asset('bootstrap-3.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet">
 <script src="{{ asset('bootstrap-3.3.6-dist/js/bootstrap.min.js') }}"></script>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="panel panel-primary"><div class="panel-heading">Menu</div>
<div class="container-fluid">
    <div class="row">
        <div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    First
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div><div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Second
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
    </div>
</div>
</div>
@yield('container')


</body>
</html>
