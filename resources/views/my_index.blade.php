<x-layout>

<!--elenco
<ul>
    @foreach($books as $book)
        <li>
            Titolo: {{$book['title']}} - Pagine: {{$book['pages']}} - Autore: {{$book['author']}} - Anno: {{$book['year']}}
            <a href="{{route('show', ['book' => $book['id']])}}">
                Visualizza
            </a>
        </li>
    @endforeach
</ul>
-->
@if (session('success')) 
    Salvato correttamente
@endif
<!--<ul> -->
    @auth
    @else
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
    @foreach($books as $book)
    <x-swiper :$book/>
    @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="autoplay-progress">
      <svg viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="20"></circle>
      </svg>
      <span></span>
    </div>
  </div>
    @endauth
    @auth
<div class="d-grid gap-3">
    <button class="btn btn-primary btn-lg p-2">
        <a class="nav-link" href="{{ route('create') }}">Inserisci un nuovo libro</a>
    </button>
</div>
@endauth
<div class="container text-center">
    <div class="row">
        @foreach($books as $book)
            <!-- <li> -->
            <div class="col-md-auto">
                <x-my_card :$book/>
            </div>
            <!--  </li> -->
        @endforeach
    </div>
</div>
<!-- </ul> -->
</x-layout>