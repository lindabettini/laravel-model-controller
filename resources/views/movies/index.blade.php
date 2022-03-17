@extends('layouts.main')

@section('main')
<div class="row">
  @foreach ($movies as $movie)
  <div class="col-3">
    <div class="card text-center p-1 m-3">
      <div class="card-body">
        <h5 class="card-title">{{$movie->title}}</h5>
        <div>{{$movie->date}}</div>
        <div>{{$movie->vote}}</div>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, unde! Similique error adipisci alias ea accusantium ex eius maiores in placeat dolorum? Suscipit, voluptates aliquam saepe eligendi sint cupiditate reprehenderit!</p>
        <a href="{{route('movies.show', ['id'=>$movie->id])}}" class="btn btn-primary">Scopri di più</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection