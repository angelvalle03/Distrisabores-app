@extends('layouts.plantilla')

@section('title','Home')
@section('content')


<div class="screen-index z-depth-2" style="background-image: url(image/background-index.jpg);">
    <div class="screen-index-blur">
        <div class="content-screen-index center-align">
            <h3 class="black-900-italic flow-text index-text-main">Distrisabores</h3>
            <h5 class="bold-700 flow-text index-text-submain">Calidad en productos y al mejor precio</h5>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 center-align">
            <h2 class="flow-text black-900-italic-titles text-title-index-product">Productos</h2>
            <div class="line"></div>
        </div>
    </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image cont-img-scale-product">
                            <img class=" img-scale-0" src="/image/{{ $product->imagen }}" style="height: 300px" width="250px" loading="lazy">
                        </div>
                        <div class="card-content">
                            <span class="light-300 flow-text"><b>{{$product->nombre}}  <br> </b>
                            </span><br>
                            <div class="center">
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    <div class="row ">
        {{-- <div class="col s12 center-align ">
            <a href="{{route('productos.index')}}" class=" btn-small orange darken-2 waves-effect waves-red regular-400-italic">Ver
                todos</a>
        </div> --}}
        <div class="col s12 pag right">
            {{$products->links()}}  
        </div>
        
    </div>

</div>

<div class="seccion-contratar" style="background-image: url('image/background8.jpeg');">
    <div class="row">
        <div class="col s12 m3 center cont-lista-contratarnos">
            <div class="lista-contratarnos-icon"><span><i class="fas fa-dollar-sign "></i></span></div>
            <div class="lista-contratarnos-text"><span class="light-300-italic-texts">Precios a la medida</span></div>
        </div>
        <div class="col s12 m3 center cont-lista-contratarnos">
            <div class="lista-contratarnos-icon"><span><i class="fab fa-cc-paypal"></i></span></div>
            <div class="lista-contratarnos-text"><span class="light-300-italic-texts">Diferentes métodos de pago</span></div>
        </div>
        <div class="col s12 m3 center cont-lista-contratarnos">
            <div class="lista-contratarnos-icon"><span><i class="fas fa-star"></i></span></div>
            <div class="lista-contratarnos-text"><span class="light-300-italic-texts">Servicio de calidad</span></div>
        </div>
        <div class="col s12 m3 center cont-lista-contratarnos">
            <div class="lista-contratarnos-icon"><span><i class="fas fa-clock"></i></span></div>
            <div class="lista-contratarnos-text"><span class="light-300-italic-texts">Servicio a tiempo</span></div>
        </div>
    </div>
</div>





<div class="cont-category">
    <div class="container">
        <div class="row">
            <div class="col s12 center">
                <h3 class="black-900-italic-titles text-title-index-product">Categorias</h3>
                <div class="line-two"></div>
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image cont-img-scale-service">
                            <div class="cont-img-text">
                                <div>
                                    <img class="img-scale" style="height: 280px" src="/image/{{ $category->imagen }}" loading="lazy">
                                        
                                    <h5 class="position-text light-300">{{$category->nombre}}</h5>
                                    <a class='position-text-a light-300-italic-texts show-category waves-effect' href="{{route('categorias.show', $category)}}">Ver categoria</a>
                                        
                                </div>
                            </div>
                        </div>
                           
                    </div>                            
                </div>
            @endforeach   
        </div>
        <div class="row row-see-all">
            <div class="col s12 center-align ">
                <a href="{{route('categorias.index')}}" class="btn-small darken-2 waves-effect waves-red regular-400-italic">Ver
                    todos</a>
            </div> 

            
        </div>
    </div>
</div>

<div class="seccion-buscar">
    <div class="container">
        <div class="section">
            <h3 class="white-text flow-text center-align light-300-italic-texts-plus">Buscar productos</h3>
        </div>
        <form class="tourmaster-form-field  tourmaster-small" action="#" method="GET">
            <div class="row">
                <div class="col s12 m6 offset-m3 input-search">
                    <div>
                        <input name="tour-search" type="text" placeholder="Escribe aqui" value="" style="border: 0;">
                    </div>
                    <i class="fa fa-search right-align"></i>
                </div>
                <div class="col s4 offset-s4 m2 offset-m5 input-btn center ">
                    <input class=" blue regular-400-italic waves-effect waves-grey" type="submit" value="Buscar">
                </div>
            </div>
        </form>
    </div>
</div>


@endsection