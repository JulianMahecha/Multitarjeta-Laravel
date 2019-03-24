@extends('layouts.app')
@section('title', 'Trainer Edit')

@section('content')
<div class="container">
    <form action="/trainers/{{$trainer->slug}}" method="post" class="form-group" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="name" class="form-control" value ="{{$trainer->name}}">
        </div>
        <div class="form-group">
            
            <label for="nombre">Avatar:</label>
            <img style="height:100px; width:100px; background-color: #EFEFEF;" class="card-img-top rounded-circle" src="/images/{{$trainer->avatar}}" alt="Card image cap">
            <input type="file" name="avatar" class="">
        </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>
@endsection
