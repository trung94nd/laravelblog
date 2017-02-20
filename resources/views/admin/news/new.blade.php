@extends('admin.layouts.master')
@section('main-content')
    <div class="col-sm-10">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="list-action">
            <a href="{{route('admin.new.create')}}" title="" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>
                <font>Create New</font>
            </a>
        </div>
        <div class="data-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Picture</th>
                        <th>Title</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($news as $new)
                    <tr>
                        <td><a class="display-block" ><img class="img-responive" src="{{url('uploads',['thumbnail' => $new->thumbnail])}}" alt=""></a></td>
                        <td>{{$new->title}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.new.edit', ['id' => $new->id])}}" title="" class="btn btn-default btn-update"><i class="fa fa-pencil"></i></a>
                            <a onclick="return confirm('Are you sure to delete this item?')" href="{{route('admin.new.destroy', [$new->id])}}" title="" class="btn btn-default btn-delete-action"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Chưa có bản ghi nào!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop