@extends('adminlte::page')

@section('title', 'Admin productos')

@section('content_header')
    <h1>Listado de productos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.products.create')}}">Agregar producto</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Categoría</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->nombre}}</td>
                            <td>{{$product->descripcion}}</td>
                            <td>{{$product->precio}}</td>
                            <td>
                                <img src="/image/{{ $product->imagen }}" width="50px" height="50px">
                            </td>
                            <td>{{$product->categoria->nombre}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.products.edit', $product)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.products.destroy', $product)}}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    (function(){
        'use strict'
        var forms = document.querySelectorAll('.formEliminar')
        Array.prototype.slice.call(forms)
            .forEach(function (form){
                form.addEventListener('submit', function(event){
                    event.preventDefault()
                    event.stopPropagation()
                    Swal.fire({
                        title: '¿Seguro que quiere eliminar el registro?',
                        text: "",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, eliminar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire('¡Eliminado!','El registro se ha eliminado exitosamente.','success');
                                
                        }
                    })
                },false)
            })
    })()
</script>
@stop