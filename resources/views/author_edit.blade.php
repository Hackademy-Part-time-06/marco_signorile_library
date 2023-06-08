<x-layout>
    <section class="py-5">
        <div class="container px-5">
            <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="{{route('author_update',['author'=>$author->id])}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" value="{{$author->name}}"
                                    placeholder="Inserisci titolo libro">
                                <label for="title">Nome autore</label>
                                @error('name')
                                <span class="text-danger">
                                    Nome autore obbligatorio!
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="surname" name="surname" type="text"
                                    value="{{$author->surname}}" placeholder="Inserisci cognome autore">
                                <label for="author">cognome Autore</label>
                                @error('surname')
                                <span class="text-danger">
                                    Cognome autore obbligatorio!
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date_birth" name="date_birth" type="date" value="{{$author->date_birth}}"
                                    placeholder="Inserisci Numero pagine Libro">
                                <label for="pages">Data nascita autore</label>
                                @error('date_birth')
                                <span class="text-danger">
                                    Data nascita autore obbligatorio!
                                </span>
                                @enderror
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