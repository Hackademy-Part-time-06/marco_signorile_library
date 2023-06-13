<x-layout>
<section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        src="{{empty($book->image) ? Storage::url('/images/cover/default.png') : Storage::url($book->image)}}"
                        alt="..."></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{$book->title}}</h1>
                    <p>Autore: {{$book->author->name}} {{$book->author->surname}}</p>
                    <p>Numero Pagine: {{$book->pages}} </p>
                    <p>Anno pubblicazione: {{$book->year}} </p>
                    <hr>
                    <p>Aggiunto da: {{$book->user->name ?? 'Ignoto'}} </p>
                </div>
            </div>
        </div>
    </section>
</x-layout>