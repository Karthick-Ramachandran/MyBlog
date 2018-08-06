@extends('layouts.app')

@section('content')
@if(count($errors) > 0)
@foreach ( $errors->all() as $error )
<div class="alert alert-danger">{{ $error }}</div>    
@endforeach



@endif

<div class="panel panel-default">
    <div class="panel-heading">
Edit Post
    </div>
    <div class="panel-body">
        <form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group">
         <label for="title">Title</label>
     <input type="text" name="title"  value="{{ $post->title }}"required class="form-control">
     </div>
     <div class="form-group">
            <label for="title">Image</label>
        <input type="file" name="image" required class="form-control">
        </div>
        <div class="form-group">
                <label for="Category">Select Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach ($categories as $category )
                 

                    <option value="{{ $category->id }}"
                        
                            @if($post->category->id == $category->id)
                                              selected
                                              
                                                @endif
                        
                        >{{ $category->name }}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                    <label for="tag"> Edit Tags</label>

                @foreach ($tags as $tag)
                <div class="checkbox">
                    <label for=""><input type="checkbox"  value="{{ $tag->id }}" name="tags[]" id="" 
                        @foreach ($post->tags as $t )
                            @if($tag->id === $t->id)
                                   checked
                            @endif
                        @endforeach
                        
                        >{{ $tag->tag  }}</label>
                        </div>    
                @endforeach
                
            </div>
        <div class="form-group">
                <label for="title">Content</label>
                <textarea name="content" id="summernote" cols="30" rows="10"  class="form-control">{{ $post->content }}</textarea>
            </div>
            <input style="margin:0 45%;" type="submit" value="Store" class="btn btn-success ">
        </form>
    </div>
</div>

@endsection