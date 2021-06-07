<!doctype html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{env(" APP_NAME ")}}">
    <meta name="author" content="Samuel Blas y Cesar Baron">
    <title>@yield("titulo") - {{env("APP_NAME")}}</title>
    <!-- <link href="{{url("/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{url("/css/all.min.css")}}" rel="stylesheet">-->
    <link href="{{url(" /css/StylesMaestra.css ")}}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dash.css') }}" rel="stylesheet">
    <style>
        body {}
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <header>

        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap  shadow">


            <a class=" mx-4" aria-current="page" href="{{route("home")}}">

                <img src="{{url("/img/logo.png")}}" alt="" width="50" height="50" class="rounded-circle ">
            </a>
            @guest


            <ul class="nav">
                <li class="nav-item m-3">
                    <button type="button" class="btn btn-outline-primary">
                        <a class="nav-link" href="{{ route('login') }}" style="padding: 0px 0px;">Login</a>


                    </button>


                </li>
                <li class="nav-item m-3">
                    <button type="button" class="btn btn-outline-primary">
                        <a class="nav-link" href="{{ route('register') }}" style="padding: 0px 0px;">Registro

                        </a> </button>
                </li>

            </ul>




            @else









            <div class="btn-group dropleft">
                <button type="button" href="{{route("logout")}}" class="btn  btn-outline-info btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img  src="{{url("/img/profa.jpg")}}" alt="mdo" width="32" height="32" class="rounded-circle me-2">


                    @auth


                    {{ Auth::user()->name }}


                    @endauth
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route("logout")}}">Cerrar Sesión ({{ Auth::user()->name }})</a>

                </div>
            </div>
            @endguest
        </nav>



    </header>
    <div class="container-fluid">
       <!-- <div class="row">
            @guest @else
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-5 navbar navbar-expand-lg">


                <div class="position-sticky pt-3 collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route("home")}}">
                                <span data-feather="home"></span> Inicio&nbsp;
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("productos.index")}}">
                                <span data-feather="file"></span> Productos&nbsp;
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("vender.index")}}">
                                <span data-feather="shopping-cart"></span> Vender&nbsp;
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("ventas.index")}}">
                                <span data-feather="users"></span> Ventas&nbsp;
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("usuarios.index")}}">
                                <span data-feather="bar-chart-2"></span> Usuarios&nbsp;
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("clientes.index")}}">
                                <span data-feather="layers"></span> Clientes&nbsp;
                            </a>
                        </li>
                    </ul>



                </div>
            </nav>



            <nav class="navbar navbar-expand-md  navbar-light  d-lg-none mt-6 ">

                <button class="navbar-toggler  " type="button" data-toggle="collapse" id="botonMenu" aria-label="Mostrar u ocultar menú">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav mr-auto text-secondary">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                Registro
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="{{route("home")}}">Inicio&nbsp;<i
                                    class="fa fa-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="{{route("productos.index")}}">Productos&nbsp;<i
                                    class="fa fa-box"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-secondary" href="{{route("vender.index")}}">Vender&nbsp;<i
                                    class="fa fa-cart-plus"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="{{route("ventas.index")}}">Ventas&nbsp;<i
                                    class="fa fa-list"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="{{route("usuarios.index")}}">Usuarios&nbsp;<i
                                    class="fa fa-users"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="{{route("clientes.index")}}">Clientes&nbsp;<i
                                    class="fa fa-users"></i></a>
                        </li>
                        @endguest
                    </ul>

                </div>
            </nav>
            @endguest
        </div>-->


<div class="container">
@guest @else
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            
              
              <a class="nav-link active" aria-current="page" href="{{route("home")}}">
                                <span data-feather="home"></span> Inicio&nbsp;
                            </a>
            
          </li>
        
          <li class="nav-item">
            
           
              <a class="nav-link text-secondary" href="{{route("productos.index")}}">   <span data-feather="shopping-cart"></span>Productos&nbsp;</a>
        
          </li>
          <li class="nav-item">
          <a class="nav-link  text-secondary" href="{{route("vender.index")}}"><span data-feather="bar-chart-2"></span>Vender&nbsp;</a>
             
              
          </li>
          <li class="nav-item">
            
             
              <a class="nav-link text-secondary" href="{{route("ventas.index")}}"> <span data-feather="bar-chart-2"></span> Ventas&nbsp;</a>
        
          </li>
          <li class="nav-item">
          <a class="nav-link text-secondary" href="{{route("usuarios.index")}}"> <span data-feather="users"></span> Usuarios&nbsp;</a>
          </li>
          <li>
          <a class="nav-link text-secondary" href="{{route("clientes.index")}}"> <span data-feather="users"></span> Clientes&nbsp;</a>
          </li>
        </ul>

      
      </div>
    </nav>
    @endguest
  </div>
</div>



        <script type="text/javascript">
            // Tomado de https://parzibyte.me/blog/2019/06/26/menu-responsivo-bootstrap-4-sin-dependencias/
            document.addEventListener("DOMContentLoaded", () => {
                const menu = document.querySelector("#menu"),
                    botonMenu = document.querySelector("#botonMenu");
                if (menu) {
                    botonMenu.addEventListener("click", () => menu.classList.toggle("show"));
                }
            });
        </script>
         <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js">
        
        </script>
        <script>

        (function() {
            "use strict";

            feather.replace();
        })();
    
        </script>
        <main class="">
          

                @yield("contenido")

        
        </main>

        <footer class="px-2 py-2 fixed-bottom bg-dark text-white-50" ">
    <span class=" text-muted ">OPTATIVA TERMINAL IV INGENIERIA DE SOFTWARE - 8° U VESPERTINO - L.I.
    <div class=" container text-center ">
      <small>Copyright &copy; 2021 | Samuel Blas | Cesar Barón</small>
    </div>
    </span>
</footer>
</body>
</html>