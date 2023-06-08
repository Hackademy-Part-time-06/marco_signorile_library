<x-layout>
    <section class="py-5">
        <div class="container px-5">
            <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="{{route('update',['book'=>$book->id])}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="title" name="title" type="text" value="{{$book->title}}"
                                    placeholder="Inserisci titolo libro">
                                <label for="title">Nome Libro</label>
                                @error('name')
                                <span class="text-danger">
                                    Titolo obbligatorio!
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                            <select name="author_id" id="author_id" class="form-control">
                                <option>{{$book->author->name}} {{$book->author->surname}}<option/>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name . ' ' . $author->surname }}</option>
                                @endforeach
                            </select>
                            <label for="Autore">Autore</label>
                                @error('name')
                                <span class="text-danger">
                                    Autore obbligatorio!
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="pages" name="pages" type="text" value="{{$book->pages}}"
                                    placeholder="Inserisci Numero pagine Libro">
                                <label for="pages">Numero pagine Libro</label>
                                @error('name')
                                <span class="text-danger">
                                    Inserisci un valore numerico obbligatorio!
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="year" name="year" type="text" value="{{$book->year}}"
                                    placeholder="Inserisci anno">
                                <label for="pages">Anno del libro</label>
                            </div>
                            <div class="mb-3" style="text-align:center;">
                                <img class="card-img-top mb-5 mb-md-0" style="width: 50%; height: 50%"
                                    src="{{empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image)}}"
                                    alt="">
                            </div>
                            <div class="mb-3">
                                <label for="pages">Immagine del Libro</label>
                                <input class="form-control" id="image" name="image" type="file" value="">
                            </div>
                            <div class="d-grid gap-3">
                                <button class="btn btn-primary btn-lg p-2" type="submit">Aggiorna</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>