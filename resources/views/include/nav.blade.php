<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{route('books.index')}}">Libri</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav mb-2 mb-lg-0 text-white ms-1">
          @auth
          <form method="post" action="{{route('logout')}}">
            @csrf
              <button class="nav-link">Logout</button>
          </form>
          @else
          <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
          <li><a href="{{route('register')}}" class="nav-link">Registrati</a></li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>