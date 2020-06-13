@extends ("mainLayout")
  @section ("pasta")
    @isset($pastaLunga)
      <div class="lunga">
        @foreach ($pastaLunga as $pasta)
          <div class="listaPasta">
            <img src="{{$pasta['src']}}" alt="">
            <h1>- {{$pasta["tipo"]}} - </h1><br>
            <h2>{{$pasta["titolo"]}}</h2><br>
            <p>{!!$pasta["descrizione"]!!}</p>
            <h3>Cottura: {{$pasta["cottura"]}} - Peso: {{$pasta["peso"]}}</h3>
          </div>
        @endforeach
      </div>
  @endisset

  @isset($pastaCorta)
    <div class="corta">
      @foreach ($pastaCorta as $pasta)
        <div class="listaPasta">
          <img src="{{$pasta['src']}}" alt="">
          <h1>- {{$pasta["tipo"]}} - </h1><br>
          <h2>{{$pasta["titolo"]}}</h2><br>
          <p>{!!$pasta["descrizione"]!!}</p>
          <h3>Cottura: {{$pasta["cottura"]}} - Peso: {{$pasta["peso"]}}</h3>
        </div>
      @endforeach
    </div>
  @endisset

  @isset($pastaCortissima)
      <div class="cortissima">
        @foreach ($pastaCortissima as $pasta)
          <div class="listaPasta">
            <img src="{{$pasta['src']}}" alt="">
            <h1>- {{$pasta["tipo"]}} - </h1><br>
            <h2>{{$pasta["titolo"]}}</h2><br>
            <p>{!!$pasta["descrizione"]!!}</p>
            <h3>Cottura: {{$pasta["cottura"]}} - Peso: {{$pasta["peso"]}}</h3>
          </div>
        @endforeach
      </div>
    </div>
  @endisset
@endsection
