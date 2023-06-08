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
                        <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" value="{{old('email')}}"
                                    placeholder="Inserisci titolo libro">
                                <label for="title">Mail</label>
                                @error('email')
                                <span class="text-danger">
                                    Email obbligatoria!
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password"
                                    value="{{old('password')}}" placeholder="Password">
                                <label for="password">Password</label>
                                @error('password')
                                <span class="text-danger">
                                    Password obbligatoria!
                                </span>
                                @enderror
                            </div>
                            <div class="d-grid gap-3">
                                <button class="btn btn-primary btn-lg p-2" type="submit">Accedi</button>
                            </div>
                            <div class="d-grid gap-3">
                                <button class="btn btn-outline-primary btn-lg p-2">
                                    <a href="{{route('register')}}">Non sei registrato?</a> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>