@extends('layout.layout-default')

@section('content')
  @foreach ($drinkNames as $name)
    <div class="bevande-box">
      {{$name}}
    </div>
  @endforeach
  <div class="max-price">
    <p>Prezzo massimo: {{$max_price}}</p>
    <p>Prezzo minimo: {{$min_price}}</p>
    {{$avg_price_rounded}}
  </div>
@endsection
