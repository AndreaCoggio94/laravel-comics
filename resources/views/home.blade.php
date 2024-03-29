@extends('layout.app')


@section('title')
Home
@endsection

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

@section('buy')
@foreach($buyCards as $card)
<div class="d-flex" >
    <img src="{{ Vite::asset($card['img']) }}" alt="" />
    <span class="text-uppercase"> {{ $card['title'] }} </span>
  </div>
  @endforeach
@endsection