@extends('post.index')
@section('container')
    @if($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($edit))
         @foreach($edit as $val)
             <?$id=$val->id;
             $title=$val->title;
              $text=$val->text;
             $nameofpost='Edit Post'?>
             @endforeach
    @endif
    <div class="row">
        <div class="col-lg-5 col-lg-push-3">
            <p class="text-primary text-center">{{ $nameofpost or 'New Post'  }}</p>
    <form action="" method="post" action="{{ route('publishedpost') }}">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control"  placeholder="Post Title" value="{{ $title or '' }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Text</label>
            <textarea class="form-control" name="text" rows="5" placeholder="Post Text">{{ $text or '' }}</textarea>
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        @if(isset($edit))
            <input type="hidden" name="id" value="{{ $id }}">
        <button type="submit" class="btn btn-default" formaction="{{ url('post/editpost') }}">Edit This</button>
            @else
            <button type="submit" class="btn btn-default">Send</button>
            @endif
    </form>
    </div>
    </div>
@endsection