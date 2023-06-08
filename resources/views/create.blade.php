<x-layout>
    <section class="py-5">
        <div class="container px-5">
            <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="title" name="title" type="text" value="{{old('title')}}"
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
                                <option>-</option>
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
                                <input class="form-control" id="pages" name="pages" type="text" value="{{old('pages')}}"
                                    placeholder="Inserisci Numero pagine Libro">
                                <label for="pages">Numero pagine Libro</label>
                                @error('name')
                                <span class="text-danger">
                                    Inserisci un valore numerico obbligatorio!
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="year" name="year" type="text" value="{{old('year')}}"
                                    placeholder="Inserisci anno">
                                <label for="pages">Anno del libro</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="mail" name="mail" type="email" value="{{old('mail')}}"
                                    placeholder="Inserisci anno">
                                <label for="pages">Mail utente</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="image" name="image" type="file">
                            </div>
                            <div class="d-grid gap-3">
                                <button class="btn btn-primary btn-lg p-2" type="submit">Salva</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>