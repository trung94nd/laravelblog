@extends('admin.layouts.master')
@section('main-content')
    <div class="col-sm-10">
        <form class="form-horizontal" action="{{ route("admin.new.store") }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Picture</label>
                <div class="col-sm-10">
                    <input type="file" name="thumbnail">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="title">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" value="" class="form-control" placeholder="Title">
                    {!! $errors->first('title', '<span class="help-inline text-danger">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="categories">Categories</label>
                <div class="col-sm-10">
                    <select name="categories" class="form-control" placeholder="Categories">
                        <option value="">Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('categories', '<span class="help-inline text-danger">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="summary">Summary</label>
                <div class="col-sm-10">
                    <textarea name="summary" class="form-control" placeholder="Summary"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="content">Content</label>
                <div class="col-sm-10">
                    <textarea name="content" class="form-control" placeholder="Content"></textarea>
                    {!! $errors->first('content', '<span class="help-inline text-danger">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="featured">Highlights</label>
                <div class="col-sm-10">
                    <input type="checkbox" name="featured" value="1" placeholder="featured">Activated
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Add new</button>
                </div>
            </div>
        </form>
    </div>
@stop