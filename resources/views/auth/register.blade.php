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
                        <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="name" value="{{old('name')}}"
                                    placeholder="Inserisci il tuo nome">
                                <label for="title">Inserisci il tuo nome</label>
                                @error('name')
                                <span class="text-danger">
                                    Devi inserire il tuo nome!
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email"
                                    value="{{old('email')}}" placeholder="email">
                                <label for="author">email</label>
                                @error('author')
                                <span class="text-danger">
                                    Autore obbligatorio!
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                                <label for="author">Password</label>
                                @error('author')
                                <span class="text-danger">
                                    Autore obbligatorio!
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password_confirmation" placeholder="password_confirmation">
                                <label for="author">password_confirmation</label>
                                @error('author')
                                <span class="text-danger">
                                    Autore obbligatorio!
                                </span>
                                @enderror
                            </div>

                            <div class="d-grid gap-3">
                                <button class="btn btn-primary btn-lg p-2" type="submit">Registrati</button>
                            </div>
                            <div class="d-grid gap-3">
                                <button class="btn btn-outline-primary btn-lg p-2">
                                    <a href="{{route('login')}}">Sei già registrato?</a>    
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>