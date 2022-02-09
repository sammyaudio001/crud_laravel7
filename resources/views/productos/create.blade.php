@extends('productos.layout')


@section('contenido')

<div class="container">
    <h1>Crear producto</h1>
</div>
<div class="container">
    <form action="{{route('productos.store')}}" method="POST">

        @csrf



        <div class="form-group">
          <label for="producto">Nombre del producto</label>
          <input type="text" class="form-control" placeholder="Nombre del producto" name="producto" required>
        </div>
        <div class="form-group">
            <label for="producto">Descripcion</label>
            <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" required>
          </div>

          <div class="form-group">
            <label for="producto">Precio</label>
            <input type="number" class="form-control" placeholder="Precio" name="precio" required>
          </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
</div>
<div class="container text-center">
    <a href="/productos" class="btn btn-outline-primary">Volver</a>

</div>

@endsection
