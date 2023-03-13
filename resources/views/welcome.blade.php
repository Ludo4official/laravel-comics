@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/81rYQEkagGL._CR0,207,1222,1222_UX256.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $comic['title']}}</h5>
                          <p class="card-text">{{ $comic['type']}}</p>
                          <p class="card-text">{{ $comic['sale_date']}}</p>
                          <a href="#" class="btn btn-primary">{{ $comic['price']}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
