@extends('adminlte::page')

@section('title', 'Distrisabores Admin')

@section('content_header')
    <h1>create categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre', []) !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}
                
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug', []) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoría', 'readonly']) !!}
                
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('imagen', 'Imagen', []) !!}
                    {!! Form::file('imagen', ['class'=>'form-control']) !!}

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <img id="imagenSeleccionada" style="max-height: 300px">
                    </div>
                    
                    @error('imagen')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                
               

                {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function (e) {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
            $('#imagen').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#imagenSeleccionada').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
        });

        
    </script>
@stop