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
         <div class="col-lg-4"></div>
     </div>
 @endforeach
    <div class="row">
        <div class="col-lg-6 col-lg-push-3">
    <form role="form" method="post" action="{{url ('post\/')}}{{ $post->id }}">
        <div class="form-group">
            <label>Your Comment</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <button type="submit" class="btn btn-default">Comment It</button>
    </form>
        </div></div>
@endsection