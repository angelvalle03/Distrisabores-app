@extends('layouts.plantilla')

@section('title',$producto->nombre)
@section('content')

<div class="container section">    
    <div class="row">
        <div class="col s12 center-align">
            <h2 class="flow-text black-900-italic-titles text-title-index-product">{{$producto->nombre}}</h2>
            <div class="line"></div>
        </div>
        
    </div>
    <div class="row row-product-detail">
        <div class="col s12 m7 l5 ">
            <div class="card " style="border: none;">
                    <div class="card-image cont-img-product-detail">
                        <img class="materialboxed responsive-img" src="/image/{{ $producto->imagen }}" alt="">
                    </div>
            </div>
        </div>
        <div class="col s12 m12 l6 offset-l1">
            <div class="col s12">
                <h4>Detalles</h4><br>
                    <ul>
                        <li>
                            <p><span><i class="fas fa-caret-right orange-text darken-4"></i></span>{{$producto->descripcion}}</p>
                        </li>
                                            
                    </ul>
            </div>
            <div class="col s12">
                <h5>categoria</h5>
                    <ul>
                        <li><p>{{$producto->categoria->nombre}}</p></li>
                                        
                    </ul>
            </div>
            <div class="col s12">
                <h5>Precio</h5>
                <ul>
                    <li><p>${{$producto->precio}} cop</p></li>
                </ul>
            </div>
            <div class="col s12">
                <a href="https://api.whatsapp.com/send?phone=573046760406&amp;text=Quiero mas informacion sobre el producto {{$producto->nombre}}| Distrisabores"
                            target="_blank" class="waves-effect btn-small waves-red orange darken-2">Cotizar</a>
            </div> 
        </div>                    
    </div>
    <div class="row row-product-related">
        <div class="col s12 center-align">
            <h2 class="flow-text black-900-italic-titles text-title-index-product">Productos relacionados</h2>
            <div class="line"></div>  
        </div>
    </div>
    <div class="row products-related">
        @foreach ($productRelated as $related)
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image cont-img-scale-product">
                    <img class=" img-scale-0" width="250" height="250" src="/image/{{ $related->imagen }}" loading="lazy">
                </div>
                <div class="card-content">
                    <span class="light-300"><b>{{$related->nombre}}<br></b>
                    </span><br>
                    <div class="center">
                        <a class='show-details regular-400-italic waves-effect waves-red' href='#'>Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <div class="col s1"></div>
    </div>
   
</div>

@endsection
