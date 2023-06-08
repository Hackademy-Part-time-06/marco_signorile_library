<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $author['name'] }} {{ $author['surname'] }}</h5>
    <div class="row">
      <a href="{{ route('author_show', ['author' => $author['id']]) }}" class="btn btn-primary">Visualizza</a>
    </div>
    @auth
    <div class="row">
      <a href="{{ route('author_edit', ['author' => $author['id']]) }}" class="btn btn-warning" >Modifica</a>
    </div>
    <div class="row">
      <form action="{{route('author_destroy',['author'=>$author['id']])}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Elimina</button>
      </form>
    </div>
    @endauth
  </div>
</div>