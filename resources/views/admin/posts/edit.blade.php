@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="panel panel-default">
    <div class="class panel-heading">
        Edit post : {{$post->title}}
    </div>

    <div class="class panel-body">
        <form action="{{route('post.update', ['id'=>$post->id])}}" method="post" enctype="multipart/form-data">

            {{csrf_field()}}
           
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
            </div>

            <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="btn btn-sm btn-default">  
                    {{--  class="form-control"  --}}
                </div>

                <div class="form-group">
                    <label for="category">Select a Category</label>
                   
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="class form-group">

                        <label for="tags">Select tags</label>
                        @foreach($tags as $tag)
                            <div class="checkbox">
                                <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
                                    @foreach($post->tags as $t)
                                        @if($tag->id == $t->id)
                                        checked
                                        @endif

                                    @endforeach
                                    >{{$tag->tag}}
                                </label>
                            </div>
                        @endforeach
                    </div>

                <div class="form-group">
                        <label for="content">Content</label>
                       <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{$post->content}}</textarea>
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-info" type="submit">Update post</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
@endsection