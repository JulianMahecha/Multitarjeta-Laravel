@extends('layouts.app')
@section('title', 'Trainers Create')

@section('content')
<div class="container">
    <form action="/trainers" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="nombre">Avatar</label>
            <input type="file" name="avatar" class="">
        </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
@endsection
