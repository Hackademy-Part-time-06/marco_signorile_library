<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $book['title'] }}</h5>
    <img src="{{empty($book->image) ? Storage::url('/images/cover/default.png') : Storage::url($book->image)}}" alt="" width="50" height="75">
    <div class="row">
      <a href="{{ route('show', ['book' => $book['id']]) }}" class="btn btn-primary">Visualizza</a>
    </div>
    @auth
    <div class="row">
      <a href="{{ route('edit', ['book' => $book['id']]) }}" class="btn btn-warning" >Modifica</a>
    </div>
    <div class="row">
      <form action="{{route('destroy',['book'=>$book['id']])}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Elimina</button>
      </form>
    </div>
    @endauth
  </div>
</div>
