@extends('layouts.app')
@section('title', 'Nueva categoría')
@section('content')
    <section id="newsSection">
        <div class="row">
            <div class="col-md-12">
                @if(session('success-new'))
                    <div class="alert alert-success">
                        {{ session('success-new') }}
                    </div>
                @endif

                <form action="{{ route('tags.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre de la categoria</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Agregar
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection