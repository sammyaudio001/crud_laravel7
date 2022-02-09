@extends('productos.layout')


@section('contenido')

<a href="productos/create" class="btn btn-outline-success m-3">Crear producto</a>

<br>
<table class="table table-striped text-center">
    <thead>
      <tr>

        <th scope="col">Nombre del Producto</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($producto as $articulo )


      <tr>

        <td>{{$articulo->producto}}</td>
        <td>{{$articulo->descripcion}}</td>
        <td>{{$articulo->precio}} USD</td>
        <td><a href="{{route('productos.show', $articulo->id)}}" class="btn btn-outline-secondary">Mostrar</a></td>
        <td><a href="{{route('productos.edit', $articulo->id)}}" class="btn btn-outline-warning">Editar</a></td>
        <td>
            <form action="{{route('productos.destroy', $articulo->id)}}" method="POST">
          @csrf

          @method('DELETE')

          <button type="submit" class="btn btn-outline-danger">Borrar</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
