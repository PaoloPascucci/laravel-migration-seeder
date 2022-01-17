@extends('layouts.app')

@section('content')
<h1>Le tue News</h1>
<div class="container">
    @forelse ($blogs as $blog)
    <div class="card">
        <div class="card-body">
          <h2 class="card-title">{{$blog->nome_post}}</h2>
          <h3 class="card-title">{{$blog->data_post}}</h3>
          <p class="card-text">{{$blog->description_post}}</p>
        </div>
      </div>
    @empty
    <h1>Nothing to see here</h1>        
    @endforelse
</div>
@endsection