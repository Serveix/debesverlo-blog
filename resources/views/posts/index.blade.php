@extends('layouts.app')

@section('title', 'Lista de Categorías')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css">
@endsection
@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-md-12">

                @if(session('success-deleted'))
                    <div class="alert alert-success">
                        {{ session('success-deleted') }}
                    </div>
                @endif

            @if($posts->count() < 1)
                <div class="alert alert-warning">
                    No hay categorias disponibles aun. Crea una nueva.
                </div>
                <br>
                <br>
                <br>
                <br>
            @endif
            <h1> Posts creados </h1>
                <hr>
                <table id="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>T&iacute;tulo</th>
                        <th>Descripci&oacute;n</th>
                        <th>Publicado</th>
                        <th>Acci&oacute;n</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->published ? 'Si' : 'No' }}</td>
                            <td>
                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-info">
                                    Editar
                                </a>
                                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST"
                                    onclick="return confirm('Estás a punto de eliminar un post, ¿desea continuar?')">
                                    <button type="submit" class="btn btn-danger" >
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( () => {
        $('#table').DataTable()
    })
    </script>
@endsection