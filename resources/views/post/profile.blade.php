@extends('post.index')
@section('container')
    <div class="row">
        <div class="col-lg-8 col-lg-push-2">
            @foreach($result as $val)
            <form role="form" action="{{ route('saveprofile') }}">
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status" value="{{ $val->status or "" }}">
                </div>
                <div class="form-group">
                    <label>Date of Birth</label>
                    <div class="row">
                    <div class="col-lg-1">
                        Day<input type="text" class="form-control col-lg-2" name="day" value="{{ $match[1] or "" }}">
                    </div>
                    <div class="col-lg-2">
                        {{--Month<input type="text" class="form-control" name="month" value="{{ $match[2] or "" }}">--}}
                        <? $month=['January','February','March','May','June','July','August','September','October','November','December'] ?>
                    <select class="form-control" name="month">
                        @foreach($month as $val)
                            <option>{{ $val }}</option>
                         @endforeach
                    </select>
                    </div>
                        <div class="col-lg-2 year">
                            Year<input type="text" class="form-control year" name="year" value="{{ $match[3] or "" }}">
                        </div>
                </div>
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" value="{{ $val->country or "" }}">
                </div>
                <div class="form-group">
                    <label>File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <button type="submit" class="btn btn-default">Save</button>
            </form>
                @endforeach
        </div>
    </div>
@endsection