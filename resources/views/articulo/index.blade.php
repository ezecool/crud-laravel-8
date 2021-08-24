@extends('layouts.plantillabase')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')

    <div class="mb-4 mt-4">
        <a href="articulos/create" class="btn btn-primary">Nuevo articulo</a>
    </div>

    <div>
        <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">C&oacute;digo</th>
                    <th scope="col">Descripci&oacute;n</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                    <tr>
                        <td>{{ $articulo->id }}</td>
                        <td>{{ $articulo->codigo }}</td>
                        <td>{{ $articulo->descripcion }}</td>
                        <td>{{ $articulo->cantidad }}</td>
                        <td>{{ $articulo->precio }}</td>
                        <td>
                            <form action="{{ route('articulos.destroy', $articulo->id) }}" method="post">
                                <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @section('js')
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#articulos').DataTable({
                        "lengthMenu": [
                            [5, 10, 15, -1],
                            [5, 10, 15, "all"]
                        ]
                    });
                })
            </script>
        @endsection

    </div>
@endsection
