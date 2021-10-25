@extends('layouts.plantilla')

@section('title','Home')
@section('content')


<div style="position: relative;">
    <div class="container section">
        <div class="row">
            <div class="col s12 center">
            <h3 class="black-900-italic-titles text-title-index-product"> Productos</h3>
                <div class="line-two"></div>
            </div>
        </div>
        <div class="row section">
            @foreach ($products as $product)
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image cont-img-scale-service">
                                <div class="cont-img-text">
                                    <div id="cont-ancla-one">
                                        <img class="img-scale"  width="280" height="280" src="/image/{{ $product->imagen }}" loading="lazy">
                                        
                                        
                                        <h5 class="position-text light-300">{{$product->nombre}}</h5>
                                        <a class='position-text-a light-300-italic-texts show-category waves-effect' href='#'>Ver detalles</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>
            @endforeach
            
        </div>
    </div>
</div>

@endsection