@extends('layouts.app')

@section('content')

@include('admin.include')

<div class="panel panel-default">
    <div class="panel-heading">
Edit Category
    </div>
    <div class="panel-body">
        <form action="{{ route('tag.update', ['id' => $tag->id] )}}" method="POST" >
     {{ csrf_field() }}
     <div class="form-group">
         <label for="tag"> Update Tag</label>
     <input type="text" name="tag" required value="{{ $tag->tag }}" class="form-control">
     </div>
     <input style="margin:0 45%;" type="submit" value="update" class="btn btn-success ">
        </form>
    </div>
</div>

@endsection