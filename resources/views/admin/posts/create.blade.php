@extends('layouts.app')

@section('content')
@if(count($errors) > 0)
@foreach ( $errors->all() as $error )
<div class="alert alert-danger">{{ $error }}</div>    
@endforeach



@endif

<div class="panel panel-default">
    <div class="panel-heading">
Create a New Post
    </div>
    <div class="panel-body">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group">
         <label for="title">Title</label>
     <input type="text" name="title" required class="form-control">
     </div>
     <div class="form-group">
            <label for="title">Image</label>
        <input type="file" name="image" required class="form-control">
        </div>
        <div class="form-group">
                <label for="Category">Select Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach ($categories as $category )

                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                    <label for="tag">Tags</label>

                @foreach ($tags as $tag)
                <div class="checkbox">
                    <label for=""><input type="checkbox"  value="{{ $tag->id }}" name="tags[]" id="">{{ $tag->tag  }}</label>
                        </div>    
                @endforeach
                
            </div>
        <div class="form-group">
                <label for="title">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input style="margin:0 45%;" type="submit" value="Store" class="btn btn-success ">
        </form>
    </div>
</div>

@endsection