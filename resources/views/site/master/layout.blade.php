
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plataforma</title>


        <link rel="stylesheet" href="{{asset('site/css/estilo.css')}}">


        <script src=" {{asset('site/js/jquery.js')}} "></script>
        <script src=" {{asset('site/js/bootstrap.js')}} "></script>

    </head>
    <body>
        <header class="container-fluid bg-light">

            <!-- Topo for mobile  -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
            <section class="  d-lg-none d-xl-none d-md-none d-sm-block">
                Este aparece quando temos um telefone
             </section>


            <!-- Topo for meedleScreen  -->

            <section  class="d-none d-lg-none d-xl-none d-sm-none d-md-block ">

                Este aparece quando temos um tablet
             </section>

            <!-- Topo for desktop and > max desktop  -->
            <section  class="d-none d-lg-block  d-xl-block  d-md-none d-sm-none ">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link {{(Route::current()->getName()==='plat.home'? 'active':'')}}" href="{{route('plat.home')}}">Inicial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{(Route::current()->getName()==='plat.artigos'? 'active':'')}}" href="{{route('plat.home')}}">Artigos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{(Route::current()->getName()==='plat.sobre'? 'active':'')}}" href="{{route('plat.sobre')}}">Sobre</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link {{(Route::current()->getName()===''? 'active':'')}}" href="#">Tornar-me vendedor</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link {{(Route::current()->getName()===''? 'active':'')}}" href="#">Area de vendedor</a>
                </li>
              </ul>

             </section>

        </header>
        <main class="container-fluid">



        @yield('conteudo')



        </main>

        <footer class="container-fluid bg-dark">

        </footer>

          <script>
            $(document).ready(function(){

            });
          </script>
    </body>
</html>
