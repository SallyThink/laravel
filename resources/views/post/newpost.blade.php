@extends('post.index')
@section('container')
    <div class="row">
        <div class="col-lg-5 col-lg-push-3">
            <p class="text-primary text-center">New Post</p>
    <form action="" method="post" action="{{ route('publishedpost') }}">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Post Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Text</label>
            <textarea class="form-control" name="text" rows="5" placeholder="Post Text"></textarea>
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <button type="submit" class="btn btn-default">Send</button>
    </form>
    </div>
    </div>
@endsection