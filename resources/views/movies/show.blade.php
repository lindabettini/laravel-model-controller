@extends('layouts.main')

@section('main')
<div class="row">

  <div class="col-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$movie->title}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

      </div>
    </div>
  </div>

</div>
@endsection