@extends('post.index')d
@section('container')
    @if (count($errors) > 0)
        <!-- Список ошибок формы -->
        <div class="alert alert-danger">
            <strong>Упс! Что-то пошло не так!</strong>

            <br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
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
            {{ csrf_field() }}
        <button type="submit" class="btn btn-default" formaction="{{ url('post/editpost') }}">Edit This</button>
            @else
            <button type="submit" class="btn btn-default">Send</button>
            @endif
    </form>
    </div>
    </div>
@endsection