@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
        <label for="images">Image</label>
    <input type="file" name="images[]" required class="form-control" multiple>
    </div>
<input type="submit" class="btn btn-primary">

</form>

@endsection