
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

            <section> </section>


            <!-- Topo for meedleScreen  -->

            <section> </section>

            <!-- Topo for desktop and > max desktop  -->
            <section>
            
              <ul class="nav nav-lg justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>

             </section>

        </header>
        <main class="container-fluid">



        		@yield('conteudo')
        		
  

        </main>
        <footer class="container-fluid">
          Rodape
        </footer>

          <script>
            $(document).ready(function(){ 

            });
          </script>
    </body>
</html>
