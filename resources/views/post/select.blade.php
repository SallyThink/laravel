@extends('post.index')
@section('container')
    <br>
 @foreach($all as $post)
     <div class="row">
         <div class="col-lg-8 col-lg-push-2">
     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">{{ $post->title }}</h3>
         </div>
         <div class="panel-body">
             {{ $post->text }}
         </div>
     </div></div>
     </div>
 @endforeach
@endsection