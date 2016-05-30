@extends('post.index')
<div id="overlay"></div>
@section('container')
    <br>
    <div class="row">
        <?php
        $array=['primary','success','info','warning','danger'];
        ?>
@foreach($all as $post)
    <div class="col-lg-10 col-lg-push-1">
    <div class="panel panel-<? echo $array[array_rand($array,'1')]?>">
        <div class="panel-heading"><a href="{{$post->id}}">{{ $post->title }}</a><div class="text-right">{{ $post->created_at }}</div></div>
        <div class="panel-body">
            {{$post->text}}
        </div>
        <div class='text-right'>
            <form method="post">
                <input type="hidden" name="id" value="{{ $post->id }}">
                <button class="btn btn-warning" name="edit" formaction="{{ url('post/showeditpost') }}/{{ $post->id }}">Edit</button>
                <button class="btn btn-danger modaljquery" name="delete" formaction="{{ url('post/delete')}}">Delete</button>
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <div class="modalwindow text-center">
                    <br>Are you sure?<br><br>
                    <form method="post" action="{{ url('post/delete')}}">
                        <button class="btn btn-info" name="delete" formaction="{{ url('post/delete')}}">Yes</button>
                        <button class="btn btn-info closemadalwindow" name="delete" formaction="{{ url('post/history')}}">No</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
    </div>
@endforeach
    </div>
@endsection