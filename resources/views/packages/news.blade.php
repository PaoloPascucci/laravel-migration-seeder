@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="card-title"> Volo per {{$flight->destination}}</h2>
    <p class="card-text">Partenza da  {{$flight->departure}}, il {{$flight->dep_data}}</p>
    <p class="card-text">Arrivo a  {{$flight->arrival}}, il {{$flight->arr_data}}</p>
    <button href="#" class="btn btn-primary">{{$flight->price}}€</button>
</div>
@endsection