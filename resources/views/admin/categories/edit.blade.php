@extends('layouts.app')

@section('content')

@include('admin.include')

<div class="panel panel-default">
    <div class="panel-heading">
Edit Category
    </div>
    <div class="panel-body">
        <form action="{{ route('category.update', ['id' => $category->id] )}}" method="POST" >
     {{ csrf_field() }}
     <div class="form-group">
         <label for="name">Name</label>
     <input type="text" name="name" required value="{{ $category->name }}" class="form-control">
     </div>
     <input style="margin:0 45%;" type="submit" value="update" class="btn btn-success ">
        </form>
    </div>
</div>

@endsection