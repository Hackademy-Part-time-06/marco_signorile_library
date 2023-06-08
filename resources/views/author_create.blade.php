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
                        <form action="{{route('author_store')}}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" value="{{old('name')}}"
                                    placeholder="Inserisci il nome dell'autore">
                                <label for="title">Nome autore</label>
                                @error('name')
                                <span class="text-danger">
                                    Nome obbligatorio!
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="surname" name="surname" type="text"
                                    value="{{old('surname')}}" placeholder="Inserisci cognome autore">
                                <label for="author">Cognome Autore</label>
                                @error('author')
                                <span class="text-danger">
                                    Cognome obbligatorio!
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date_birth" name="date_birth" type="date" value="{{old('date_birth')}}"
                                    placeholder="Inserisci nascita autore">
                                <label for="pages">Nascita autore</label>
                                @error('name')
                                <span class="text-danger">
                                    Nascita obbligatoria!
                                </span>
                                @enderror
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