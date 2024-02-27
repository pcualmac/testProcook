@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-columns">
        <div class="card border-0 bg-transparent" style="width: 18rem;">
            <div class="card-body">
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Colour</li>
                <li class="list-group-item">Warranty</li>
            </ul>
        </div>
        @foreach ($data as $card)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/image/'.$card->image.'.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$card->product_name}}</h5>
                <p class="card-text">{{$card->point_1}}</p>
                <p class="card-text">{{$card->point_2}}</p>
                <p class="card-text">{{$card->point_3}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$card->colour}}</li>
                <li class="list-group-item">{{$card->guarantee_period}}</li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection
