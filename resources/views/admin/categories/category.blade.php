@extends('admin.layouts.master')
@section('main-content')
    <div class="col-sm-10">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="list-action">
            <a href="{{url('categories/create')}}" title="" class="btn btn-sm btn-primary pull-right">
                <i class="fa fa-plus"></i>
                <font>Create New</font>
            </a>
        </div>
        <div class="data-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{route('admin.category.edit', ['id' => $category->id])}}" title="" class="btn btn-default btn-update"><i class="fa fa-pencil"></i></a>
                                <a href="{{route('admin.category.destroy', [$category->id])}}" class="btn btn-default btn-delete-action"><i class="fa fa-trash-o"></i></a>
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
