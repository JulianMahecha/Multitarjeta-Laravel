@extends('layouts.app')
@section('title', 'Trainer')

@section('content')
<div class="container">
    <div class="row">
        <img style="height:300px; width:300px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Card image cap">
        <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, eaque error sit assumenda ducimus quibusdam et explicabo maxime fugit consectetur! Repudiandae suscipit voluptate maxime voluptatum iure eos. Ipsum, accusantium fugiat.
        Atque sint culpa suscipit assumenda vitae corrupti consequatur autem. Tempora, dolore facere cumque reprehenderit deleniti, debitis velit quidem, numquam rem ut natus nostrum quis quaerat animi ratione placeat qui mollitia!
        Ex enim ratione laudantium quis, qui repudiandae optio ipsam obcaecati cum debitis dolore tempora sapiente possimus placeat, pariatur eveniet error. Numquam asperiores aut voluptate eum sequi vitae quis beatae atque.
        Eaque doloremque fugit provident vel eum culpa sed, assumenda, cumque quasi animi a exercitationem voluptates iste velit quae in, neque ad illo doloribus. Optio totam, dignissimos repudiandae obcaecati beatae eum?.</p>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
        </div> 
    </div>
@endsection 