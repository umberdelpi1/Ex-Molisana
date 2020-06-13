@extends('mainLayout')
@section('pasta')
  <h1>N° Tipologia di Pasta: {{$count}}</h1>
  @foreach ($pastaCortissima as $pasta)
    <div class="listaPasta">
      <img src="{{$pasta['src-h']}}" alt="">
      <h1>- {{$pasta["tipo"]}} - </h1><br>
      <h2>{{$pasta["titolo"]}}</h2><br>
      <p>{!!$pasta["descrizione"]!!}</p>
      <h3>Cottura: {{$pasta["cottura"]}} - Peso: {{$pasta["peso"]}}</h3>
    </div>
  @endforeach
@endsection
