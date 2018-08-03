@extends('layouts.app')

@section('content')
@if(count($errors) > 0)
@foreach ( $errors->all() as $error )
<div class="alert alert-danger">{{ $error }}</div>    
@endforeach



@endif

<div class="panel panel-default">
    <div class="panel-heading">
Create a New Category
    </div>
    <div class="panel-body">
        <form action="{{ route('category.store') }}" method="POST" >
     {{ csrf_field() }}
     <div class="form-group">
         <label for="name">Name</label>
     <input type="text" name="name" required class="form-control">
     </div>
     <input style="margin:0 45%;" type="submit" value="Store" class="btn btn-success ">
        </form>
    </div>
</div>

@endsection