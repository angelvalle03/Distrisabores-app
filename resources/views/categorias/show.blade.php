@extends('layouts.plantilla')

@section('title',$categorias->nombre)
@section('content')



    <div class="container section">
        <div class="row">
            <div class="col s12 center">
                <h3 class="black-900-italic-titles text-title-index-product">{{$categorias->nombre}}</h3>
                <div class="line"></div>
            </div>
        </div>
        <div class="row section">
            @foreach ($productos as $product)      
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image cont-img-scale-product">
                            <a href="#!"><img class="acti img-scale-0" width="280" height="280" src="/image/{{ $product->imagen }}" loading="lazy"></a>
                        </div>
                        <div class="card-content">
                            <span class="light-300"><b>{{$product->nombre}} <br></b>
                                    </span>
                                    
                            <div class="center">                                  
                                <a class='show-details regular-400-italic waves-effect waves-red' href="{{route('productos.show', $product->id)}}">Ver detalles</a>                      
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>




@endsection
