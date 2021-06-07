@extends('maestra') @section("titulo", "Inicio") @section('contenido')
<!--
<div class="container">
    <div class="row col12">
        <h1 class="card-title text-center">
            Tablero de metricas </h1>
    </div>
    <div class="row ">
        <div class="col-6">
            <div class="card justify-content-center flex text-center">
                <div id="columnchart_material" style="width: 500px; height: 300px;"></div>
                <div class="card-body">
                    <h5 class="card-title text-center">Inventario</h5>

                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card justify-content-center flex text-center">
            <div id="chart_div" style="width: 90%; height: 300px;"></div>
                <div class="card-body">
                    <h5 class="card-title text-center">Ventas</h5>

                </div>
            </div>
        </div>

    </div>
    <div class="row mt-3 mb-8">
        <div class="col-6">
            <div class="card justify-content-center flex text-center">
            <div id="piechart" style="width: 400px; height: 250px;"></div>
                <div class="card-body">
                    <h5 class="card-title text-center">Clientes</h5>
                </div>
            </div>
        </div>
     

    </div>
    <div class="row mb-3 mt-4"></div>
</div>

-->
<!--@foreach([
    ["productos", "ventas", "vender", "clientes"],
    ["usuarios", "acerca_de", "soporte"]
    ] as $modulos)
        <div class="col-12 pb-2">
            <div class="row">
                @foreach($modulos as $modulo)
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{url("/img/$modulo.png")}}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$modulo === "acerca_de" ? "Acerca de" : ucwords($modulo)}}
                                </h5>
                                <a href="{{route("$modulo.index")}}" class="btn btn-success">
                                    Ir a&nbsp;{{$modulo === "acerca_de" ? "Acerca de" : ucwords($modulo)}}
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach-->
<div class="container">


    <div class="jumbotron text-white">
        <h1 class="display-4">Bienvenido al Punto de Venta</h1>
        <p class="lead">Comienza, registrando una venta</p>
        <hr class="my-4">

        <p class="lead">
            <a class="btn " style="background-color:#02AEAE; color:white;" href="#" role="button">Vender</a>
        </p>
    </div>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                        <img src="{{url("/img/vender.png")}}" class=" card-img-top " alt=" ... " />
                        <div class=" card-body ">
                            <h5 class=" card-title ">Consulta, agrega, elimina y edita productos</h5>
                            <p class=" card-text ">
                                <ul class=" list-group ">
                                    <li class=" list-group-item ">Gestiona tus productos con gran facilidad</li>


                                </ul>


                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-4 d-flex justify-content-center ">
                    <div class=" card " style=" width: 15rem; ">
                        <img  src="{{url("/img/is1.jpg")}}" class=" card-img-top " alt=" ... " />
                        <div class=" card-body ">
                            <h5 class=" card-title ">
                                Clientes satisfechos
                            </h5>
                            <p class=" card-text ">
                                <ul class=" list-group ">
                                    <li class=" list-group-item ">Grandes resultados sobre el control de ventas</li>


                                </ul>


                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-4 d-flex justify-content-center ">
                    <div class=" card " style=" width: 15rem; ">
                        <img  src="{{url("/img/res.jpg")}}" class=" card-img-top " alt=" ... " />
                        <div class=" card-body ">
                            <h5 class=" card-title ">Consulta desde cualquier dispositivo</h5>
                            <p class=" card-text ">
                                <ul class=" list-group ">
                                    <li class=" list-group-item ">Puedes usar una tablet, smartphone, etc.</li>


                                </ul>


                            </p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>
  



</div>

@endsection