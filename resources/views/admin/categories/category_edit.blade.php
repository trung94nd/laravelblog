@extends('admin.layouts.master')
@section('main-content')
    <div class="col-sm-10">

        <form class="form-horizontal" action="{{ route('admin.category.update', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                    {!! $errors->first('name', '<span class="help-inline text-danger">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label"> Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control">{{$category->description}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Update</button>
                </div>
            </div>
        </form>
    </div>
@stop