@extends('layouts.app')

@section('content')
@if(count($errors) > 0)
@foreach ( $errors->all() as $error )
<div class="alert alert-danger">{{ $error }}</div>    
@endforeach



@endif

<div class="panel panel-default">
    <div class="panel-heading">
Edit Blog Setting 
   </div>
    <div class="panel-body">
        <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group">
            <label for="site_name">Site_name</label>
        <input type="text" name="site_name" required value="{{ $settings->site_name }}"  class="form-control">
        </div>
     <div class="form-group">
         <label for="contact_email">Email</label>
     <input type="email" name="contact_email" value="{{ $settings->contact_email}}"  required class="form-control">
     </div>
     <div class="form-group">
        <label for="contact_number">Number</label>
    <input type="number" name="contact_number" required value="{{ $settings->contact_number }}" class="form-control">
    </div>
                 
                
          
                <input style="margin:0 45%;" type="submit" value="Store" class="btn btn-success ">
        </form>
    </div>
</div>

@endsection