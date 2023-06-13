<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $book['title'] }}</h5>
    <img src="{{empty($book->image) ? Storage::url('/images/cover/default.png') : Storage::url($book->image)}}" alt="" width="50" height="75">
    @auth
    <div class="row">
      <a href="{{ route('edit', ['book' => $book['id']]) }}" class="btn btn-warning" >Modifica</a>
    </div>
    @endauth
  </div>
</div>