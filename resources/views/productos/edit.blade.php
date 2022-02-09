@extends('productos.layout')

@section('contenido')
<h2>Editar producto</h2>

<div class="container">
    <form action="{{route('productos.update', $producto->id)}}" method="POST">

        @csrf

        @method('PUT')

        <div class="form-group">
          <label for="producto">Nombre del producto</label>
          <input type="text" class="form-control" placeholder="Nombre del producto" name="producto" required value="{{$producto->producto}}">
        </div>
        <div class="form-group">
            <label for="producto">Descripcion</label>
            <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" required value="{{$producto->descripcion}}">
          </div>

          <div class="form-group">
            <label for="producto">Precio</label>
            <input type="number" class="form-control" placeholder="Precio" name="precio" required value="{{$producto->precio}}">
          </div>

        <button type="submit" class="btn btn-primary">Modificar</button>
      </form>
</div>


@endsection
