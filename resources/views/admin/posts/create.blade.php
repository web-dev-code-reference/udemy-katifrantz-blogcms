@extends('layouts.app')

@section('content')
    @include('admin.includes.errors');
    <div class="panel panel-default">
        <div class="panel panel-heading">
            <h1>Create New Post</h1>
        </div>
        <div class="panel panel-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-right">
                        <button class="btn btn-success" type="submit">Store Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop()