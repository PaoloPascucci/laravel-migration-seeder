@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Prenota le tua vacanze</h1>
    @forelse ($flights as $flight)
    <div class="card" >
        <div class="card-body">
          <h5 class="card-title"> Volo per {{$flight->destination}}</h5>
          <p class="card-text">Partenza da  {{$flight->departure}}, il {{$flight->dep_data}}</p>
          <p class="card-text">Arrivo a  {{$flight->arrival}}, il {{$flight->arr_data}}</p>
          <a href="#" class="btn btn-primary">{{$flight->price}}</a>
        </div>
      </div>
        
    @empty
        
    @endforelse
</div>
@endsection