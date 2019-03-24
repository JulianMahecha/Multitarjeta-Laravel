@extends('layouts.app')
@section('title', 'Trainers List')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($trainers as $trainer)
                <div class="col-sm">
                    <div class="card text-center" style="width: 18rem; margin-top: 50px;">
                        <img style="height:200px; width:200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$trainer->name}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver Mas</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection