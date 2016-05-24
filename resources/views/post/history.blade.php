@extends('post.index')
@section('container')
    <br>
    <div class="row">
        <?php
        $array=['primary','success','info','warning','danger'];
        ?>
@foreach($all as $post)
    <div class="col-lg-10 col-lg-push-1">
    <div class="panel panel-<? echo $array[array_rand($array,'1')]?>">
        <div class="panel-heading">{{ $post->title }}</div>
        <div class="panel-body">
            {{$post->text}}
        </div>
    </div>
    </div>
@endforeach
    </div>
@endsection