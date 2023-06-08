<x-layout>
<section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{$author->name}} {{$author->surname}}</h1>
                    <p>Anno di nascita: {{$author->date_birth}} </p>
                    @forelse ($author->books as $book)
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0"
                            src="{{empty($book->image) ? Storage::url('image/default.jpg') : Storage::url($book->image)}}"
                            alt="...">
                    </div>
                    @empty
                    Nessun libro presente
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</x-layout>