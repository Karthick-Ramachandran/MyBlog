@extends('layouts.app')


@section('content')

@foreach ($gallery as $galleries)

<img src="{{ $galleries->images }}" alt="alter">
    
@endforeach

@endsection