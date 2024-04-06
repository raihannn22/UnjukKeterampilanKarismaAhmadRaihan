<div class="container">

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Beranda</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route ('beranda')}}" class="nav-link active" aria-current="page">Home</a></li>
        
        @auth
        @if(Auth::check() && Auth::user()->role == "admin")
        <li class="nav-item"><a href="{{ route ('kategori')}}"class="nav-link">Kategori</a></li>
        <li class="nav-item"><a href="{{ route ('post')}}" class="nav-link">Post</a></li>
        <li class="nav-item"><a href="{{ route ('user')}}" class="nav-link">User</a></li>

        @elseif(Auth::check() && Auth::user()->role == "editor")
        <li class="nav-item"><a href="{{ route ('kategori')}}"  class="nav-link">Kategori</a></li>
        <li class="nav-item"><a href="{{ route ('post')}}"  class="nav-link">Post</a></li>
        @endif
        @endauth
        <li class="nav-item"><a href="login" class="nav-link">Account</a></li>
      </ul>
    </header>
</div>
