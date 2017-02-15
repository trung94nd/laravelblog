@extends('admin.layouts.master')
@section('main-content')
    <div class="col-sm-10">
        <form class="form-horizontal" action="{{ route('admin.new.update', ['id' => $news->id]) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Picture</label>
                <div class="col-sm-10">
                    <div class="preview-uploader"><img class="img-preview" src="{{url('uploads',['thumbnail' => $news->thumbnail])}}"></div>
                    <p class="clearfix"></p>
                    <input type="file" name="thumbnail">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="title">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" value="{{$news->title}}" class="form-control" placeholder="Title">
                    {!! $errors->first('title', '<span class="help-inline text-danger">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="categories">Categories</label>
                <div class="col-sm-10">
                    <select name="categories" class="form-control" placeholder="Categories">
                        <option value="">Categories</option>
                        @foreach ($categories as $category)
                            <option {{$news->categories->id == $category->id ? 'selected' : ''}} value="{{$category->id }}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    {{-- {!! $errors->first('categories', '<span class="help-inline text-danger">:message</span>') !!} --}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="summary">Summary</label>
                <div class="col-sm-10">
                    <textarea name="summary" class="form-control" placeholder="Summary">{{$news->summary}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="content">Content</label>
                <div class="col-sm-10">
                    <textarea name="content" class="form-control" placeholder="Content">{{$news->content}}</textarea>
                    {!! $errors->first('content', '<span class="help-inline text-danger">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="featured">Highlights</label>
                <div class="col-sm-10">
                <input type="checkbox" {{$news->featured == 0 ? '' : 'checked'}} name="featured" value="{{$news->featured == 0 ? 1 : ''}}" placeholder="featured">Activated
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