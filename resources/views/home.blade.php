@extends('layout.app')

@section('cards')
@foreach($comics as $comic)
<div class="comic-card">
    <div class="image">
      <img class="" src="{{ $comic['thumb'] }}" alt="" />
    </div>
    <span class="text">{{ $comic['series'] }}</span>
  </div>
  @endforeach
@endsection
