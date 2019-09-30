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
    <div class="bevande-box">
      <p>Prezzo massimo: {{$max_price}} EUR</p>
    </div>
    <div class="bevande-box">
      <p>Prezzo minimo: {{$min_price}} EUR</p>
    </div>
    <div class="bevande-box">
      <p>Prezzo medio: {{$avg_price_rounded}} EUR</p>
    </div>
  </div>
@endsection
