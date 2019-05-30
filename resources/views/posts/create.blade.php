@extends('layouts.app')
@section('title', 'Nuevo post')
@section('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-md-12">

                @if(session('success-new'))
                    <div class="alert alert-success">
                        {{ session('success-new') }}
                    </div>
                @endif

                <form enctype="multipart/form-data" id="new-post-form" action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Titulo *</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">

                        @error('title')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Descripci&oacute;n *</label>
                        <textarea class="form-control" name="description">{{ old('description') }}</textarea>

                        @error('description')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="video-url">URL de Video:</label>
                        <input type="text" class="form-control" name="video_url" value="{{ old('video_url') }}">

                        @error('video_url')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="post-image">Imagen principal *</label>
                        <input type="file" name="image" id="post-image">

                        @error('image')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tags">Categoria *</label>
                        <select name="tag" id="tags" class="catgArchive">
                            @foreach($tags as $tag)
                                <option @if(old('tag') == $tag->id) selected @endif value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>

                        @error('tag')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="published">Visibilidad:</label> <br>
                        <input type="radio" name="published" value="1" checked> Publicado<br>
                        <input type="radio" name="published" value="0" > Oculto<br>

                        @error('published')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Cuerpo *</label>
                        <div id="editor"></div>

                        @error('body')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <input type="hidden" name="body" id="hiddenArea">

                    <div class="form-group">
                        <button  class="btn btn-primary" type="submit">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

    <script>

        let toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{'header': 1}, { 'header': 2}]
            [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'script': 'sub'}, {'script': 'super'}],
            [{'indent': '-1'}, {'indent': '+1'}],
            [{'direction': 'rt1'}],

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            [ 'link', 'image', 'video', 'formula' ],          // add's image support
            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']
        ]

        let quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        })

        $("#new-post-form").on("submit", () => {
            // $("#hiddenArea").val($("#quillArea").html());
            $('#hiddenArea').val( JSON.stringify(quill.getContents()) )
            console.log('appended !')
        })

        @if(!empty(old('body')))
        quill.setContents({!! old('body') !!})
        @endif


    </script>
@endsection