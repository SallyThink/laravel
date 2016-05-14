@extends('welcome')

@section('container')

<!--карусель-->
<div class="container-fluid">
 <div class="row">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 <div class="carousel-inner">
    <div class="item active text-left">
    <a href="{{ route('result', ['numb' => $ret]) }}"> {{ $ret }}</a>
      <div class="carousel-caption">
      </div>
    </div>
      <div class="item text-center">
      <a href="{{ route('result', ['numb' => $ret]) }}"> {{ $ret }}</a>
      <div class="carousel-caption"> 
      </div>
    </div>
    <div class="item text-right">
      <a href="{{ route('result', ['numb' => $ret]) }}"> {{ $ret }}</a>
      <div class="carousel-caption"> 
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>
</div>
<form action="{{ route('result', ['numb' => $ret]) }}" method="post">
<input type='submit' value='pressme'>
</form>
@endsection
