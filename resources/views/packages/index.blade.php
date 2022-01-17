@extends('layouts.app')

@section('content')
<h1>Prenota le tua vacanze</h1>
<div class="container">
    @forelse ($flights as $flight)
    <div class="card" >
        <div class="card-body">
          <h2 class="card-title"> Volo per {{$flight->destination}}</h2>
          <p class="card-text">Partenza da  {{$flight->departure}}, il {{$flight->dep_data}}</p>
          <p class="card-text">Arrivo a  {{$flight->arrival}}, il {{$flight->arr_data}}</p>
          <button href="#" class="btn btn-primary">{{$flight->price}}€</button>
        </div>
      </div>
        
    @empty
        
    @endforelse
</div>
@endsection