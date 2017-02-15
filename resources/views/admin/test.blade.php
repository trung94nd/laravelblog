@extends('frontend.master')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
              {{--   <h1>time
                @if ($time != '')
                    {{$time}}
                @else
                    {{'khong co time'}}
                @endif
                </h1> --}}

               {{--  @for ($i = 0; $i < 10; $i++)
                    {{$i}}
                @endfor --}}
                <form class="form-horizontal" action="{{-- {{ route("postFile") }} --}}" method="post" enctype="multipart/form-data">{{-- {{ csrf_field() }} --}}
                    <div class="form-group">
                        <label for="thumbnail" class="col-sm-2 control-label">Picture Post</label>
                        <div class="col-sm-10">
                            <input type="file" name="thumbnail" class="file-upload">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Add new</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
