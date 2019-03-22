@extends('layouts.app')
@section('title', 'Trainers List')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($trainers as $trainer)
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://66.media.tumblr.com/2715f961a957eb2f0ef95b43bf4a1ae4/tumblr_n9lc2t5zT91rpn9eno1_500.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$trainer->name}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection