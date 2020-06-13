@extends ("mainLayout")
@section ("pasta")

<div class="parteCentrale">
  <a href="{{route('allLunga')}}"><img src="/img/spaghetti2.jpg" alt=""></a>
  <a href="{{route('allCorta')}}"><img src="/img/corta2.jpg" alt=""></a>
  <a href="{{route('allCortissima')}}"><img src="/img/cortissima2.jpg" alt=""></a>
  {{-- <h2>
    @for ($i=0; $i < $iterazioni; $i++)
      {{$i+1}} ) {{$test}}<br>
      @for ($j=0; $j < 3; $j++)
        <ul>
          <li>{{$test2}}</li>
        </ul>

      @endfor
    @endfor
  </h2> --}}
</div>

@endsection
