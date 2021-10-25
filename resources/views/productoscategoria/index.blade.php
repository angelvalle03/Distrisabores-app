@extends('layouts.plantilla')

@section('title','Categorias')
@section('content')

<div class="cont-category">
    <div class="container">
        <div class="row">
            <div class="col s12 center">
                <h3 class="black-900-italic-titles text-title-index-product">Categorias</h3>
                <div class="line-two"></div>
            </div>
        </div>
        <div class="row">
            @foreach ($productos as $product)
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image cont-img-scale-service">
                            <div class="cont-img-text">
                                <div>
                                    <img class="img-scale" style="height: 280px" src="/image/{{ $product->imagen }}" loading="lazy">
                                        
                                    <h5 class="position-text light-300">{{$product->nombre}}</h5>
                                    {{-- <a class='position-text-a light-300-italic-texts show-category waves-effect' href='{{route('productoscategorias.index', $category)}}'>Ver categoria</a> --}}
                                        
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