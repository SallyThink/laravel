@extends('post.index')
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
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    @endforeach
    @foreach($comments as $comment)
        <div class="row">
            <div class="col-lg-4 col-lg-push-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $comment->auth }}</h3>
                    </div>
                    <div class="panel-body">
                        {{ $comment->comment }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-lg-6 col-lg-push-3">
            <form role="form" method="post" action=" {{ route('addcomment') }}">
                <div class="form-group">
                    <label>Your Comment</label>
                    <textarea class="form-control" rows="3" name="comment"></textarea>
                </div>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <button type="submit" class="btn btn-default">Comment It</button>
            </form>
        </div>
    </div>
@endsection