<x-layout>
@if (session('success')) 
    Salvato correttamente
@endif
<div class="d-grid gap-3">
    <button class="btn btn-primary btn-lg p-2">
        <a class="nav-link" href="{{ route('category_create') }}">Inserisci una nuova categoria</a>
    </button>
</div>
<div class="container text-center">
    <div class="row">
        @foreach($categories as $category)
            <!-- <li> -->
            <div class="col-md-auto">
                <x-card_category :$category/>
            </div>
            <!--  </li> -->
        @endforeach
    </div>
</div>

</x-layout>