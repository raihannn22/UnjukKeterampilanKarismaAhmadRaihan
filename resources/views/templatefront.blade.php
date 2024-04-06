<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{asset ('css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">

        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="{{ route ('beranda')}}"></use></svg>
                <span class="fs-4">Beranda</span>
              </a>

              <ul class="nav nav-pills">

                @auth

                @if(Auth::check() && Auth::user()->role == "admin")
                <li class="nav-item"><a href="{{ route ('beranda')}}" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="{{ route ('kategori')}}"class="nav-link">Kategori</a></li>
                <li class="nav-item"><a href="{{ route ('post')}}" class="nav-link">Post</a></li>
                <li class="nav-item"><a href="{{ route ('user')}}" class="nav-link">User</a></li>

                @elseif(Auth::check() && Auth::user()->role == "editor")
                <li class="nav-item"><a href="{{ route ('beranda')}}"  class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="{{ route ('kategori')}}"  class="nav-link">Kategori</a></li>
                <li class="nav-item"><a href="{{ route ('post')}}"  class="nav-link">Post</a></li>
                @endif
                @endauth
                <li class="nav-item"><a href="login" class="nav-link">Account</a></li>

              </ul>
            </header>
        </div>

        <div class="b-example-divider"></div>


            <div class="container">
                <div id="layoutSidenav">


                        <div id="layoutSidenav_content">

                            <main>

                                <div class="container-fluid px-4">
                                    @yield('main')
                                </div>
                            </main>

                            {{-- @include('layouts.partials.footer') --}}

                        </div>
                </div>
            </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset ('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset ('js/datatables-simple-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>

</html>
