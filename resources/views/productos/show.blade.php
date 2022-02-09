@extends('productos.layout')

@section('contenido')

<div class="container">


<strong>Nombre del producto:</strong>
{{$producto->producto}}
<br>
<strong>Descripcion:</strong>
{{$producto->descripcion}}
<br>
<strong>Precio:</strong>

{{$producto->precio}} USD.
</div>

<div class="container text-center">
    <a href="/productos" class="btn btn-outline-primary">Volver</a>

</div>



@endsection
