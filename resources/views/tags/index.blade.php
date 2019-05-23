@extends('layouts.app')

@section('title', 'Lista de Categorías')

@section('content')
<section id="contentSection">
    <div class="row">
        <div class="col-md-12">

            @if(session('success-deleted'))
            <div class="alert alert-success">
                {{ session('success-deleted') }}
            </div>
            @endif

            <ul >
                @if($tags->count() < 1)
                    <div class="alert alert-warning">
                        No hay categorias disponibles aun. Crea una nueva.
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                @endif

                @foreach($tags as $tag)
                    <li>
                        <form method="POST" action="{{ route('tags.destroy', ['tag' => $tag->id]) }}">
                            @csrf
                            {{ $tag->name }} :
                            <button type="submit" class="btn btn-link" onclick="return confirm('Seguro desea eliminar esta categoria?');">Eliminar</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection