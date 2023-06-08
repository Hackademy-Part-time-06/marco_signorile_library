<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('index') }}">Libreria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Libri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('category_index') }}">Categorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('author_index') }}">Autori</a>
        </li>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Aggiungi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('create') }}">Libro</a></li>
            <li><a class="dropdown-item" href="{{ route('category_create') }}">Categoria</a></li>
            <li><a class="dropdown-item" href="{{ route('author_create') }}">Autore</a></li>
          </ul>
        </li>
        <!--
        <form method="POST" action="{{ route('logout')}}">
          @csrf
        <li class="nav-item">
          <a class="nav-link btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
        </li>
        </form>
        -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <x-banner/>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profilo</a></li>
            <li><hr class="dropdown-divider"></li>
            <form method="POST" action="{{ route('logout')}}">
          @csrf
        <li class="nav-item">
          <a class="nav-link btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
        </li>
        </form>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Registrati</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>