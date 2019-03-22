@extends('layouts.app')
@section('title', 'Trainers Create')

@section('content')
<div class="container">
    <form action="/trainers" method="post" class="form-group">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
@endsection
