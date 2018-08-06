<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $slug->title }}</title>
  <link rel="stylesheet" href="{{ asset('css/ano.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ani.css') }}">

</head>
<body>
<div class="row mt-5">
    <div class="container">
<div class="col-lg-12 col-xs-12">
        <div class="card text-center">

                <div class="card-header bg-primary text-white">
                 <h1> {{ $slug->title  }} </h1>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $slug->created_at->format('F d, D, Y') }}</h5>
                  <img class="img-responsive" src="{{ $slug->image }}" alt="{{ $slug->title }}">
                  <p class="card-text">{!! $slug->content !!} 
                </div>
                <div class="card-footer text-muted">
{{                $slug->created_at->diffForHumans()
}}                </div>
              </div>
</div>

    </div>
</div>
    
</body>
</html>