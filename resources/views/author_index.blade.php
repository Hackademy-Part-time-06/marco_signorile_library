<x-layout>
@if (session('success')) 
    Salvato correttamente
@endif
@auth
<div class="d-grid gap-3">
    <button class="btn btn-primary btn-lg p-2">
        <a class="nav-link" href="{{ route('author_create') }}">Inserisci un nuovo autore</a>
    </button>
</div>
@endauth
<div class="container text-center">
    <div class="row">
        @foreach($authors as $author)
            <!-- <li> -->
            <div class="col-md-auto">
                <x-card_author :$author/>
            </div>
            <!--  </li> -->
        @endforeach
    </div>
</div>

<!-- </ul> -->
</x-layout>
