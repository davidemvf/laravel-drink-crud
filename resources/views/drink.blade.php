@extends('layout.layout-default')

@section('content')
  <div class="list">
    @foreach ($drinkNames as $name)
      <div class="bevande-box">
        <p>{{$name}}</p>
      </div>
    @endforeach
  </div>

  <div class="price-data">
    <p>Prezzo massimo: {{$max_price}} EUR</p>
    <p>Prezzo minimo: {{$min_price}} EUR</p>
    <p>Prezzo medio: {{$avg_price_rounded}} EUR</p>
  </div>
@endsection
